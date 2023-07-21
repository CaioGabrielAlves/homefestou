<!DOCTYPE html>
<html lang="pt-br">
<head>
 @include('includes.metahead')
  
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHZ8HG9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <section data-bs-version="5.1" class="menu menu01 cid-tmNB9Af64M" once="menu" id="menu01-1p">
    @include('includes.menu')
</section>

<section data-bs-version="5.1" class="slider3 cid-tmN2j4vmQx" id="slider3-1d">
    
    
  
    <div class="row justify-content-center">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="carousel slide carousel-fade" id="turyq7vIE9" data-ride="carousel" data-bs-ride="carousel" data-interval="2000" data-bs-interval="2000">
                
                <div class="carousel-inner">
                    <div class="carousel-item slider-image item banner1 active">
                        <div class="item-wrapper">
                            <img class="d-block w-100" src="assets/images/banner-eventos-infantis-1600x600-celular.jpeg" data-slide-to="0" data-bs-slide-to="0" alt="">
                            <div class="carousel-caption">
                                <h5 class="mbr-section-title mbr-fonts-style display-5"><strong>Eventos Infantis: Passeios escolares,
                                </strong><div><strong>colônia de férias, atividades em Buffets
                                </strong></div><div><strong>Infantis, aulas, cursos, etc.</strong></div></h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slider-image item banner5">
                        <div class="item-wrapper">
                            <img class="d-block w-100" src="assets/images/banner-eventos-infantis-1-1500x750.jpeg" data-slide-to="4" data-bs-slide-to="4" alt="">
                            <div class="carousel-caption">
                                <h5 class="mbr-section-title mbr-fonts-style display-5">Escolas e Produtores de Eventos Infantis,seja um parceiro da Plataforma Festou</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slider-image item banner7">
                        <div class="item-wrapper">
                            <img class="d-block w-100" src="assets/images/depositphotos-154969550-xl-2015-1400x933.jpeg" data-slide-to="6" data-bs-slide-to="6" alt="">
                            <div class="carousel-caption">
                                <h5 class="mbr-section-title mbr-fonts-style display-5">Aulas, Cursos e Atividades Infantis.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible">
            {{ Session::get('error') }}
        </div>
    @endif
</section>

<section data-bs-version="5.1" class="form1 cid-tmNgZiJCyS" id="aform1-1i">
   

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 main-col">
                <div class="title-container">
                    
                    <h5 class="main-title mbr-fonts-style mb-0 display-5"><strong>Encontre sua próxima experiência!</strong></h5>
                    
                </div>

                <div class="form-container">
                    <div class="col-12 mbr-form">
<!--Formbuilder Form-->
<form action="{{ route('busca') }}" method="GET" id="frm_busca" class="mbr-form form-with-styler mx-auto">
<div class="dragArea row">
<div class="col-lg-6 col-md-12 col-sm-12 form-group" data-for="tipo_festa">
    @include('includes.tipofesta')
</div>
<div class="col-lg-6 col-md-12 col-sm-12 form-group" data-for="zona">
    @include('includes.locais')
</div>
<div data-for="data_min" class="col-12 col-lg-5 form-group mb-3">
<input type="date" onclick="this.showPicker()" name="data_min" data-form-field="data_min" class="form-control display-7" value="{{ date('Y-m-d')}}" id="data_min-aform1-1i">
</div>
<div data-for="data_max" class="col-12 col-lg-5 form-group mb-3">
<input type="date" onclick="this.showPicker()" name="data_max" data-form-field="data_max" class="form-control display-7" value="{{ date('Y-m-d', strtotime('+30 days'))  }}" id="data_max-aform1-1i">
</div>
<div class="col-12 col-lg-2 mbr-section-btn align-center">
<button type="submit" class="w-100 w-100 w-100 w-100 w-100 w-100 btn btn-info display-7">BUSCAR</button>
</div>
</div>
<input type="hidden" id="ip" name="ip">
<input type="hidden" id="url_anterior" name="url_anterior">
<input type="hidden" name="espaco" value="">
<input type="hidden" name="nome_evento" value="">
</form><!--Formbuilder Form-->
</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="header1 cid-tmvM91vBhg" id="header1-11">

    

    
    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(250, 250, 250);"></div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h3 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong>O que é a Plataforma Festou?</strong></h3>
                
                <p class="mbr-text mbr-fonts-style display-7">A Festou é uma plataforma tecnológica que realiza a venda de eventos e passeios escolares, oferecendo para os pais de alunos facilidade na compra, e para as escolas um gerenciamento completo da parte financeira e dos dados necessários para a organização
                    <br>A Plataforma Festou tem em seu propósito facilitar a realização dos eventos escolares de maneira que a escola, como organizadora, possa focar no que mais interessa: a criação e a realização dos eventos.
                    <br>A Festou atende também qualquer produtor de evento que queira comercializar seus ingressos em um sistema automatizado, via pix, boleto ou cartão de crédito.
                    <br>Descomplique seu evento com a Plataforma Festou!</p></div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="features13 cid-tmvM1DFx56" id="features14-z" data-sortbtn="btn-primary">
    

    
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3 class="mbr-section-title align-center mb-4 mbr-fonts-style display-7 animate__animated animate__delay-1s animate__fadeInUp"><strong>
</strong><div><br></div><div><strong>Alguns benefícios e praticidades da Plataforma Festou</strong></div></h3>
            </div>
            <div class="card col-12 col-md-4 col-lg-2 p-3">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mobi-mbri-cash mobi-mbri"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7 animate__animated animate__delay-1s animate__fadeInUp"><strong>&nbsp;Pagamento pix, boleto ou cartão de crédito.&nbsp;</strong></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbri-cursor-click"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7 animate__animated animate__delay-1s animate__fadeInUp"><strong>Relatórios e dados do evento em poucos cliques.</strong></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbrib-credit-card"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7 animate__animated animate__delay-1s animate__fadeInUp"><strong>Venda de ingressos para eventos e cursos infantis em geral.</strong></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mobi-mbri-features mobi-mbri"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7 animate__animated animate__delay-1s animate__fadeInUp"><strong>Eventos customizados para escolas e produtores de eventos infantis.</strong></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mobi-mbri-shopping-bag mobi-mbri"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7 animate__animated animate__delay-1s animate__fadeInUp"><strong>Lojas exclusivas e </strong><span style="font-size: 19.2px;"><strong>personalizadas</strong></span><strong>&nbsp;&nbsp;para venda de produtos e serviços.</strong></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbrib-lock"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7 animate__animated animate__delay-1s animate__fadeInUp"><strong>&nbsp;Festa ou evento seguros.</strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="slider6 mbr-embla cid-tmd7nIjGjw" id="slider6-s" style="background-color: #ffffff">
    <div class="position-relative ">
        <div class="mbr-section-head">
            <br><br>
            <h2 class="mbr-section-title align-center mbr-fonts-style display-2"><strong>Eventos e Festas</strong></h2>
        </div>
        <div class="embla mt-4" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-auto-play-interval="5" data-draggable="true">
            <div class="embla__viewport container-fluid">
                <div class="embla__container">
                    @foreach ($datas as $data)
                    <div class="embla__slide slider-image item active" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    @if(!empty($data->foto_destaque))
                                        @if(File::exists(storage_path('/app/public/'.$data->foto_destaque)))
                                            <img src="{{ url('/laravel/storage/app/public/'.$data->foto_destaque) }}"  data-slide-to="0" data-bs-slide-to="0" style="width: 410px">
                                        @elseif(File::exists('/home/u746654379/domains/festou.com.br/public_html/laravel/storage/app/public/'.$data->foto_destaque ))
                                            <img src="https://festou.com.br/laravel/storage/app/public/{{$data->foto_destaque}}"   data-slide-to="0" data-bs-slide-to="0" style="width: 410px">
                                        @elseif (count($data->fotos) > 0)
                                            @foreach ($data->fotos as $fotos)
                                                @if ($fotos->destaque == 1)
                                                    @if(File::exists(storage_path('/app/public/'.$fotos->img_path)))
                                                        <img src="{{ url('/laravel/storage/app/public/'.$fotos->img_path) }}"   data-slide-to="0" data-bs-slide-to="0" style="width: 410px">
                                                    @elseif(File::exists('/home/u746654379/domains/festou.com.br/public_html/laravel/storage/app/public/'.$fotos->img_path ))
                                                        <img src="https://festou.com.br/laravel/storage/app/public/{{$fotos->img_path}}"  data-slide-to="0" data-bs-slide-to="0" style="width: 410px">
                                                    @else
                                                        <img src="{{url('/img/315x225.png')}}" data-slide-to="0" data-bs-slide-to="0" style="width: 410px">
                                                    @endif
                                                @else
                                                    @if(File::exists(storage_path('/app/public/'.$fotos->img_path)))
                                                        <img src="{{ url('/laravel/storage/app/public/'.$fotos->img_path) }}"  data-slide-to="0" data-bs-slide-to="0" style="width: 410px">
                                                    @elseif(File::exists('/home/u746654379/domains/festou.com.br/public_html/laravel/storage/app/public/'.$fotos->img_path ))
                                                        <img src="https://festou.com.br/laravel/storage/app/public/{{$fotos->img_path}}"  data-slide-to="0" data-bs-slide-to="0" style="width: 410px">
                                                    @else
                                                        <img src="{{url('/img/315x225.png')}}" data-slide-to="0" data-bs-slide-to="0" style="width: 410px">
                                                    @endif
                                                @endif
                                            @endforeach  
                                        @endif
                                    @elseif (count($data->fotos) > 0)
                                            @foreach ($data->fotos as $fotos)
                                                @if ($fotos->destaque == 1)
                                                    @if(File::exists(storage_path('/app/public/'.$fotos->img_path)))
                                                        <img src="{{ url('/laravel/storage/app/public/'.$fotos->img_path) }}"  data-slide-to="0" data-bs-slide-to="0" style="width: 410px">
                                                    @elseif(File::exists('/home/u746654379/domains/festou.com.br/public_html/laravel/storage/app/public/'.$fotos->img_path ))
                                                        <img src="https://festou.com.br/laravel/storage/app/public/{{$fotos->img_path}}"  data-slide-to="0" data-bs-slide-to="0" style="width: 410px">
                                                    @else
                                                        <img src="{{url('/img/315x225.png')}}"  data-slide-to="0" data-bs-slide-to="0" style="width: 410px">
                                                    @endif
                                                @else
                                                    @if(File::exists(storage_path('/app/public/'.$fotos->img_path)))
                                                        <img src="{{ url('/laravel/storage/app/public/'.$fotos->img_path) }}"  data-slide-to="0" data-bs-slide-to="0" style="width: 410px">
                                                    @elseif(File::exists('/home/u746654379/domains/festou.com.br/public_html/laravel/storage/app/public/'.$fotos->img_path ))
                                                        <img src="https://festou.com.br/laravel/storage/app/public/{{$fotos->img_path}}"  data-full="https://festou.com.br/laravel/storage/app/public/{{$fotos->img_path}}">
                                                    @else
                                                        <img src="{{url('/img/315x225.png')}}" data-slide-to="0" data-bs-slide-to="0" style="width: 410px">
                                                    @endif
                                                @endif
                                        @endforeach    
                                @else
                                    <img src="{{url('/img/315x225.png')}}"  data-slide-to="0" data-bs-slide-to="0" style="width: 410px">
                                @endif  
                                </div>
                            </div>
                            <div class="item-content">
                                
                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>@php 
                                    switch($data->tipo_festa){
                                    case(1):
                                        //$link_tipo_festa = 'https://festou.com.br/evento/'.$data->dataid.'/'.$data->dataslug;
                                        $tipo_festa = "Festa";
                                        break;
                                    case(3):
                                        //$link_tipo_festa =  'https://festou.com.br/evento/'.$data->dataid.'/'.$data->dataslug;
                                        $tipo_festa = "Evento";
                                        break;
                                    case(4):
                                        //$link_tipo_festa =  'https://festou.com.br/evento/'.$data->dataid.'/'.$data->dataslug;
                                        $tipo_festa = "Festas em Parques";
                                        break;
                                    default:
                                        //$link_tipo_festa =   'https://festou.com.br/evento/'.$data->dataid.'/'.$data->dataslug;
                                        $tipo_festa = "Evento";
                                        break;
                                    }
                                @endphp
                                {{$tipo_festa}}</strong></h6>
                                
                            </div>
                            <div class="mbr-item-title w-100">
                                <div class="mbr-text mb-0 mbr-fonts-style align-left display-7">
                                    <strong>
                                    {{ $data->nome_evento ? $data->nome_evento : $data->nome }}
                                </strong><br>
                                <span class="align-center mbr-fonts-style mbr-bold display-4">
                                            <i class="mobi-mbri-calendar"></i> {{ date('d-m-Y', strtotime($data->data)) }}
                                </span>
                            </div>
                                <div class="prices align-right">
                                        
                                </div>
                                <div class="mbr-section-btn item-footer mt-2"><a href="https://festou.com.br/evento/{{$data->dataid}}/{{$data->dataslug}}" class="btn item-btn btn-primary-outline display-7" target="_blank">Acesse &gt;</a></div>
                            </div>
                    </div>
                    </div>
                    @endforeach
                    
                    
                </div>
            </div>
            <button class="embla__button embla__button--prev">
                <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Previous</span>
            </button>
            <button class="embla__button embla__button--next">
                <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<section data-bs-version="5.1" class="video3 cid-tmNpRU6euC" id="video3-1m">
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Veja o que dizem na mídia</strong></h4>
            
        </div>
        <div class="row mt-4">
            <div class="col-12 col-md-6 video-block">
                <div class="video-wrapper"><iframe class="mbr-embedded-video" src="https://player.vimeo.com/video/562169509?loop=0&amp;autoplay=0" width="800" height="600" frameborder="0" allowfullscreen></iframe></div>
                
            </div>
            <div class="col-12 col-md-6 video-block">
                <div class="video-wrapper"><iframe class="mbr-embedded-video" src="https://player.vimeo.com/video/750493380?loop=0&amp;autoplay=0" width="800" height="600" frameborder="0" allowfullscreen></iframe></div>
                
            </div>
        </div>
    </div>
</section>
<section data-bs-version="5.1" class="info3 cid-tmd8Y3QKf5 mbr-parallax-background" id="info3-w">
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(68, 121, 217);">
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-lg-10">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        
                        
                        <div class="mbr-section-btn mt-3"><a class="btn btn-warning display-4" href="https://blog.festou.com.br/" target="_blank">BLOG</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="slider6 mbr-embla cid-tmd7nIjGjw" id="slider6-s">
    
    
    <div class="position-relative ">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Artigos</strong></h4> 
        </div>
        <div class="embla mt-4" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-auto-play-interval="5" data-draggable="true">
            <div class="embla__viewport container-fluid">
                <div class="embla__container">
                    
                    @foreach ($posts as $key=>$post)
                    
                    <div class="embla__slide slider-image item active" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src=" {{ $post['yoast_head_json']['og_image'][0]["url"] }}" alt="" title="" data-slide-to="0" data-bs-slide-to="0" style="width: 600px">
                                </div>
                            </div>
                            <div class="item-content">
                                
                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>{{ $post['title']['rendered'] }}</strong></h6>
                                
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="{{$post['link']}}" class="btn item-btn btn-primary-outline display-7" target="_blank">Leia mais &gt;</a></div>
                        </div>
                    </div>
                   
                    @endforeach
                    
                    
                </div>
            </div>
            <button class="embla__button embla__button--prev">
                <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Previous</span>
            </button>
            <button class="embla__button embla__button--next">
                <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="list1 cid-tmN0nljZpo" id="list1-1b">
    

    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="section-head align-center mb-4">
                    <h3 class="mbr-section-title mbr-fonts-style display-5"><strong>&nbsp;PERGUNTAS FREQUENTES SOBRE A PLATAFORMA FESTOU&nbsp;</strong></h3>
                </div>
                <div id="bootstrap-toggle" class="toggle-panel accordionStyles tab-content">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse1_18" aria-expanded="false" aria-controls="collapse1">
                                <h6 class="panel-title-edit mbr-fonts-style display-7"><strong>&nbsp;Quais são os serviços da Plataforma Festou?</strong><span class="mobi-mbri mobi-mbri-arrow-down mbr-iconfont"></span>
                                </h6>
                            </a>
                        </div>
                        <div id="collapse1_18" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p class="mbr-fonts-style panel-text display-4">&nbsp;A Festou é uma plataforma de venda e gestão de ingressos para eventos infantis em geral, atendendo os produtores de eventos e os consumidores finais. 
<br>
<br>A Plataforma Festou realiza:
<br>
<br>Venda e gestão de ingressos para qualquer evento infantil;
<br>
<br>Suporte de Marketing Digital para empresas do segmento de festas e eventos;
<br>
<br>Suporte para a realização de eventos escolares.
</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse2_18" aria-expanded="false" aria-controls="collapse2">
                                <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>O que são os Eventos Infantis dentro da Plataforma Festou?</strong><span class="mobi-mbri mobi-mbri-arrow-down mbr-iconfont"></span>
                                </h6>
                            </a>
                        </div>
                        <div id="collapse2_18" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p class="mbr-fonts-style panel-text display-4">&nbsp;São eventos no universo do entretenimento infantil divulgados e comercializados dentro da Plataforma. 
<br>
<br>Alguns dos eventos divulgados na Plataforma:
<br>
<br>Dia da Diversão - Os Espaços de Festas (Buffets e Casas de Festas) abrem seus salões via venda de ingressos. Neste dia servem o cardápio do buffet, disponibilizam
<br>
<br>o parque de diversões geralmente oferece alguma atração extra.
<br>
<br>Colônia de Férias - Atividades realizadas dentro dos espaços de festas, em condomínios, etc,  para as crianças nos períodos de férias escolares;
<br>
<br>Cursos e aulas abertas - Profissionais de diversas áreas oferecem palestras, cursos ou atividades dentro do universo infantil;
<br>
<br>Eventos diversos - Qualquer evento de entretenimento infantil, que utilize a Plataforma da Festou para comercializarem seus ingressos; e
<br>
<br>Etc.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse5_18" aria-expanded="false" aria-controls="collapse5">

                                <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>A Plataforma Festou é responsável pela realização dos eventos  e festas das empresas e escolas parceiras?</strong><span class="mobi-mbri mobi-mbri-arrow-down mbr-iconfont"></span>
                                </h6>
                            </a>
                        </div>
                        <div id="collapse5_18" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p class="mbr-fonts-style panel-text display-4">&nbsp;Não, a Plataforma Festou divulga e comercializa os eventos, atuando na intermediação das festas e eventos.
<br>
<br>O contrato de prestação de serviço assim com a responsabilidade da execução das ofertas, são de exclusiva responsabilidade do prestador de serviço.&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <a role="button" class="collapsed panel-title text-black t1" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse6_18" aria-expanded="false" aria-controls="collapse6">
                                <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>Existe um CNPJ por trás da Plataforma Festou?</strong><span class="mobi-mbri mobi-mbri-arrow-down mbr-iconfont"></span>
                                </h6>
                            </a>
                        </div>
                        <div id="collapse6_18" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p class="mbr-fonts-style panel-text display-4">
                                     Sim, sob a razão social Festa Tecnologia Da Informação Ltda, CNPJ 41.049.622/0001-91, situada à Rua Mourato Coelho, 936, salas 13 e 14, Pinheiros (SP).
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="info1 cid-tmdaULoRsA" id="info1-y">
    

    
    
    <div class="align-center container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h3 class="mbr-section-title mb-4 mbr-fonts-style display-7" style="color: #ffffff;">
                    <br><br><br><strong>Publique e venda festas, cursos e eventos infantis pela Plataforma Festou.<br>A Festou é especializada em conteúdos de entretenimento infantil e oferece todo suporte para que seu evento seja&nbsp; um sucesso.</strong></h3>
                
                <div class="mbr-section-btn"><a class="btn btn-white display-4" href="https://web.whatsapp.com/send?phone=5511940841577&text=Quero%20saber%20mais%20sobre%20Festa%20Compartilhada,%20Eventos%20e%20ou%20Produtos" target="_blank">Fale com um
<br>consultor</a></div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<div class="theme-footer" id="mainFooter">
    @include('includes.footer')
</div>
<!-- Start of whatsapp -->
@include('includes.whatsapp')
<!-- End of whatsapp -->

<script src="{{ url('/assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ url('/assets/parallax/jarallax.js')}}"></script>
  <script src="{{ url('/assets/web/assets/cookies-alert-plugin/cookies-alert-core.js')}}"></script>
  <script src="{{ url('/assets/web/assets/cookies-alert-plugin/cookies-alert-script.js')}}"></script>
  <script src="{{ url('/assets/smoothscroll/smooth-scroll.js')}}"></script>
  <script src="{{ url('/assets/ytplayer/index.js')}}"></script>
  <script src="{{ url('/assets/dropdown/js/navbar-dropdown.js')}}"></script>
  <script src="{{ url('/assets/playervimeo/vimeo_player.js')}}" defer></script>
  <script src="{{ url('/assets/embla/embla.min.js')}}"></script>
  <script src="{{ url('/assets/embla/script.js')}}"></script>
  <script src="{{ url('/assets/mbr-switch-arrow/mbr-switch-arrow.js')}}" defer></script>
  <script src="{{ asset('js/magnific-popup.js') }}"></script>
  <script src="{{ url('/assets/theme/js/script.js?v=4')}}"></script>
  <script src="{{ asset('js/jquery-ui.js') }}" async></script>
  <script src="{{ asset('assets/festou/js/script.js?v=1')}}"></script>
<input name="cookieData" type="hidden" data-cookie-customDialogSelector='null' data-cookie-colorText='#424a4d' data-cookie-colorBg='rgba(234, 239, 241, 0.99)' data-cookie-textButton='Aceitar' data-cookie-colorButton='' data-cookie-colorLink='#424a4d' data-cookie-underlineLink='true' data-cookie-text="Usamos cookies para lhe dar a melhor experiência. Leia nossa <a href='#' class='politica-cookies'>política de cookie </a>.">
    <input name="animation" type="hidden">
  </body>
</html>
{{-- <option value="1">Festas Compartilhadas em Buffets</option>2
<option value="2">Festa Exclusiva - Ofertas Relâmpago</option>4
<option value="3">Evento temático</option>5
<option value="4">Festas em Parques de Diversão</option>3
<option value="7">Aulas, Cursos e Atividades Infantis</option> 7
<option value="8">Eventos Infantis em geral</option> 1
<option value="9">Festas em Domicílio - Ofertas</option> 6 --}}
<script>
     $(document).on('change', '#tipo_festa', function() {
            var tipo_festa = $(this).val();
            console.log(tipo_festa);
            switch(tipo_festa) {
            case "1":
                //$('#frm_busca').attr('action', 'https://festou.com.br/busca');
                $(".carousel-inner").find('.active').removeClass("active");
                $(".carousel-inner").find('.banner2').addClass("active");
                $('#parametros').attr('name', 'espaco');
                $('#parametros').attr('placeholder', 'Espaço de festa');
            break;
            case "2":
                $(".carousel-inner").find('.active').removeClass("active");
                $(".carousel-inner").find('.banner4').addClass("active");
                //$('#frm_busca').attr('action', 'https://eventostematicos.com.br/busca');
                $('#parametros').attr('name', 'nome_evento');
                $('#parametros').attr('placeholder', 'Evento');
            break;
            case "3":
                $(".carousel-inner").find('.active').removeClass("active");
                $(".carousel-inner").find('.banner5').addClass("active");
                //$('#frm_busca').attr('action', 'https://eventostematicos.com.br/busca');
                $('#parametros').attr('name', 'nome_evento');
                $('#parametros').attr('placeholder', 'Evento');
            break;
            case "4":
                $(".carousel-inner").find('.active').removeClass("active");
                $(".carousel-inner").find('.banner3').addClass("active");
                //$('#frm_busca').attr('action', 'https://festaparque.com.br/busca');
                $('#parametros').attr('name', 'nome_evento');
                $('#parametros').attr('placeholder', 'Evento');
            break;
            case "5":
                //$('#frm_busca').attr('action', 'https://festaparque.com.br/busca');
                $('#parametros').attr('name', 'nome_evento');
                $('#parametros').attr('placeholder', 'Evento');
            break;
            case "6":
                
                //$('#frm_busca').attr('action', 'https://festaparque.com.br/busca');
                $('#parametros').attr('name', 'nome_evento');
                $('#parametros').attr('placeholder', 'Evento');
            break;
            case "7":
                $(".carousel-inner").find('.active').removeClass("active");
                $(".carousel-inner").find('.banner7').addClass("active");
                //$('#frm_busca').attr('action', 'https://festaparque.com.br/busca');
                $('#parametros').attr('name', 'nome_evento');
                $('#parametros').attr('placeholder', 'Evento');
            break;
            case "8":
                $(".carousel-inner").find('.active').removeClass("active");
                $(".carousel-inner").find('.banner1').addClass("active");
                //$('#frm_busca').attr('action', 'https://festaparque.com.br/busca');
                $('#parametros').attr('name', 'nome_evento');
                $('#parametros').attr('placeholder', 'Evento');
            break;
            case "9":
                $(".carousel-inner").find('.active').removeClass("active");
                $(".carousel-inner").find('.banner6').addClass("active");
                //$('#frm_busca').attr('action', 'https://festaparque.com.br/busca');
                $('#parametros').attr('name', 'nome_evento');
                $('#parametros').attr('placeholder', 'Evento');
            break;
            default:
                $('#frm_busca').attr('action', 'https://festou.com.br/busca');
            }
        });
              /* Add "https://api.ipify.org?format=json" statement
           this will communicate with the ipify servers in
           order to retrieve the IP address $.getJSON will
           load JSON-encoded data from the server using a
           GET HTTP request */
  
           $.getJSON("https://api.ipify.org?format=json",
                                          function(data) {
  
            // Setting text of element P with id gfg
            $("#ip").val(data.ip);
            console.log(data.ip);
            $("#url_anterior").val(document.referrer);
        })  
</script>
