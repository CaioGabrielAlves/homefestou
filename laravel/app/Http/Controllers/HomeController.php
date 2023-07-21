<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\models\Clientes;
use App\models\Newsletter;
use App\models\Locais;
use App\models\Buffets;
use App\models\Datas;
use App\services\GlobalService;

class HomeController extends Controller {
   

    public function index(Request $request) {
        $locais = Locais::getLocais();
        if ($request->session()->has('customerLogado')) {
            $customer = Clientes::find($request->session()->get('customerLogado')->id);
            $request->session()->remove('customerLogado');
            $request->session()->put('customerLogado', $customer);
        }
        $data_min = date('Y-m-d');
        $data_max = date('Y-m-d', strtotime('+6 months'));

        $datas =  Buffets::join('datas_buffets', 'buffets.id', '=', 'datas_buffets.id_buffet')
        ->where("datas_buffets.bloqueada","0")
        ->where("datas_buffets.destaque","=","1")
        ->whereBetween('data', [$data_min, $data_max ])
        ->where("buffets.ativo","1")
        ->select('datas_buffets.*', 'buffets.*', 'datas_buffets.id as dataid', 'datas_buffets.slug as dataslug')
        ->latest("datas_buffets.created_at")
        ->take(8)
        ->get();
   

       $posts = GlobalService::PostBlog();
        return view('home')->with([
                                'locais' => $locais,
                                'posts' => $posts,
                                'datas' => $datas,
                            ]);
    }

    public function index2(Request $request) {
        if ($request->session()->has('customerLogado')) {
            $customer = Clientes::find($request->session()->get('customerLogado')->id);
            $request->session()->remove('customerLogado');
            $request->session()->put('customerLogado', $customer);
        }
        return view('hometeste1');
    }

    public function index3(Request $request) {
        if ($request->session()->has('customerLogado')) {
            $customer = Clientes::find($request->session()->get('customerLogado')->id);
            $request->session()->remove('customerLogado');
            $request->session()->put('customerLogado', $customer);
        }
        return view('hometeste2');
    }
    
    public function newsletter(Request $request) {
        $input = $request->all();
        $newsletter = Newsletter::where([
            "email" => $input["email"]
        ])->first();
        if (!$newsletter) {
            Newsletter::create(request()->all());
        }
        Mail::send("emails.newsletter", ["email" => $input['email']], function($message) {
            $message->to("festascompartilhadas@gmail.com", "Festou")->subject("Novo Email - Newsletter");
            $message->cc("no-reply@festou.com.br","Festou");
            $message->from("no-reply@festou.com.br","Festou");
        });
        return response()->json(['success' => true]);
    }

}