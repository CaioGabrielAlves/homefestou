<nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
    <div class="container-fluid">
        <div class="navbar-brand">
            <span class="navbar-logo">
                <a href="/">
                    <img src="/assets/images/logo-novo-web.fw-173x173.png" alt="" style="height: 4.4rem;">
                </a>
            </span>
            
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                
                <li class="nav-item">
                    <a class="nav-link link text-black text-primary display-7" href="https://blog.festou.com.br/">
                        Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black text-primary display-7" href="https://www.eventotematico.com.br/sejaumprodutor" aria-expanded="false">
                        Seja um Produtor
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black text-primary display-7" href="https://www.eventotematico.com.br/passeioescolar">Passeios Escolares</a>
                </li>
                            @if (Session::has('buffetLogado'))
                            <li class="nav-item dropdown">
                                <a class="nav-link link text-black text-primary dropdown-toggle display-7" href="https://www.festascompartilhadas.com.br/contato" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Minha Conta</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown-366">
                                    <a class="text-black text-primary dropdown-item display-7" href="{{ route('espaco') }}">Informações Básicas</a>
                                    <a class="text-black text-primary dropdown-item display-7" href="{{ route('espaco.servicos') }}">Serviços</a>
                                    <a class="text-black text-primary dropdown-item display-7" href="{{ route('espaco.fotos') }}">Fotos</a>
                                    <a class="text-black text-primary dropdown-item display-7" href="{{ route('espaco.alugueis') }}">Reservas</a>
                                    <a class="text-black text-primary dropdown-item display-7" href="{{ route('espaco.compras') }}">Compras</a>
                                    <a class="text-black text-primary dropdown-item display-7" href="{{ route('espaco.logout') }}">Sair</a>
                                </div>
                            </li>
                       
                            @elseif(Session::has('customerLogado'))
                            <li class="nav-item dropdown">
                                <a class="nav-link link text-black text-primary dropdown-toggle display-7" href="#" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Minha Conta</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown-554">
                                        <a class="text-black text-primary dropdown-item display-7" href="{{ route('customer') }}">Informações Básicas</a>
                                        <a class="text-black text-primary dropdown-item display-7" href="{{ route('customer.alugueis') }}">Compras</a>
                                        <a class="text-black text-primary dropdown-item display-7" href="{{ route('customer.logout') }}">Sair</a>
                                    </div>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link link dropdown-toggle text-black display-7" href="#" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <span class="mobi-mbri mobi-mbri-user mbr-iconfont mbr-iconfont-btn"></span>Entrar
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown-774">
                                        <a class="dropdown-item text-black text-primary display-7" href="{{url('/espaco/login')}}">Login Espaço</a>
                                        <a class="dropdown-item text-black text-primary display-7" href="{{url('/customer/login')}}">Login Cliente</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link link text-black dropdown-toggle display-7" href="#" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <span class="mobi-mbri mobi-mbri-users mbr-iconfont mbr-iconfont-btn"></span>Cadastrar
                                    </a><div class="dropdown-menu" aria-labelledby="dropdown-905">
                                        <a class="text-black show dropdown-item text-primary display-7" href="{{url('/espaco/new')}}">Cadastrar Espaço</a>
                                        <a class="text-black show dropdown-item text-primary display-7" href="{{url('/customer/new')}}">Cadastrar Cliente</a>
                                    </div>
                                </li>
                            @endif

            </ul>
            
            
        </div>
    </div>
</nav>