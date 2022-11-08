<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ url(mix('assets/css/bootstrap.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('assets/css/style.css')) }}">
    <link rel="icon" type="image/png" href="{{ url('assets/logotipo/logo.png') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('assets/js/jqueryte/jquery-te-1.4.0.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @hasSection('css')
    @yield('css')
    @endif

</head>

<body style="background-color: #DCDCDC;">

    <nav class="navbar navbar-expand-sm navbar-light bg-white">
        <a class="navbar-brand" href="#"><img src="{{ url('assets/logotipo/logo.png') }}" width="30"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ isActive('admin.home') }}">
                    <a class="nav-link" href="{{ route('admin.home') }}">Área de Trabalho</a>
                </li>
                <li class="nav-item {{ isActive('admin.users') }}">
                    <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="bi bi-people"></i> Conta de Acesso</a>
                </li>
                <li class="nav-item {{ isActive('admin.teachers') }}">
                    <a class="nav-link" href="{{ route('admin.teachers.index') }}"><i class="bi bi-archive"></i> Docentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Contatos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Estrutura</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Projetos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">TCC Concluídos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Disciplinas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Eventos</a>
                </li>
            </ul>

            <div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        @if(Auth:: user()->cover != null)
                        {{ Auth:: user()->name }} <img src="{{ url('storage/' . Auth:: user()->cover) }}" class="circle-menu-image">

                        @else
                        {{ Auth:: user()->name }} <img src="{{ url('assets/background/avatar.png') }}" class="rounded" width="30" data-holder-rendered="true">
                        @endif
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="" class="dropdown-item" href="#"><i class="bi bi-recycle"></i> Lixeira</a>

                        <a href="{{ route('admin.logout') }}" class="dropdown-item" href="#"><i class="bi bi-door-closed"></i> Sair</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="{{ url(mix('assets/js/jquery.js')) }}"></script>
    <script src="{{ url(mix('assets/js/bundle.js')) }}"></script>
    <script src="{{ url('assets/js/jqueryte/jquery-te-1.4.0.min.js') }}"></script>
    <script src="{{ url(mix('assets/js/jquery.mask.js')) }}"></script>

    @hasSection('script')
    @yield('script')
    @endif

</body>

</html>
