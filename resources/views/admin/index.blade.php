<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/> 
        <link rel="stylesheet" href="{{ url(mix('assets/css/reset.css')) }}"/>
        <link rel="stylesheet" href="{{ url(mix('assets/css/boot.css')) }}"/>
        <link rel="stylesheet" href="{{ url(mix('assets/css/login.css')) }}"/>
        <link rel="stylesheet" href="{{ url(mix('assets/css/bootstrap.css')) }}">
        <link rel="icon" type="image/png" href="{{ url('assets/logotipo/logo.png') }}"/>    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">  

        <style type="text/css">
            video {
                object-fit: cover;
                width: 100vw;
                height: 100vh;
                position: fixed;
                top: 0;
                left: 0;
            }

        </style>

    <video playsinline autoplay muted loop poster="{{ url('assets/background/background_login.jpg') }}">
    </video>

    <title>{{  $tit_login }}</title>

</head>
<body>
    <div class="ajax_response"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card" style="margin-top: 20%;">
                    <div class="card-header"><img src="{{ url('assets/logotipo/logo.png') }}" class="img-fluid" width="20" alt="Logotipo"> Login</div>                    
                    <div class="card-body">             
                        <img src="{{ url('assets/logotipo/logo.png') }}" class="img-fluid rounded mx-auto d-block" width="40">
                        <div class="text-center text-muted mt-2">Universidade do Estado de Mato Grosso - Unemat</div>
                        <div class="text-center text-muted">BBC-AIA</div>    
                        <form name="login" action="{{ route('admin.login.do') }}" method="post" autocomplete="off">                   
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="email" class="font-weight-bold">E-mail</label>
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Seu e-mail">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="password" class="font-weight-bold">Senha</label>
                                    <input id="password" type="password" class="form-control"
                                           name="password_check" placeholder="Sua senha">
                                </div>
                            </div>           
                            <div class="form-group row mb-0 text-center">                
                                <div class="col-md-12">                  
                                    <a href="" class="btn btn-secondary" data-toggle="cancel" title="Cancelar"><i class="bi bi-x-lg"></i> Cancelar</a>

                                    <button class="btn btn-success radius" data-toggle="login" title="Entrar">
                                        <i class="bi bi-box-arrow-in-right"></i> Entrar
                                    </button>                                  
                                </div>
                            </div>
                        </form>
                        <div class="row mt-3">
                            <div class="col-sm-12 text-center">
                                <a href="https://unemat.br" target="_blank" class="text-muted" data-toggle="unemat" title="Site da Instituição">www.unemat.br</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url(mix('assets/js/jquery.js')) }}"></script> 
    <script src="{{ url(mix('assets/js/login.js')) }}"></script>
    <script src="{{ url(mix('assets/js/bundle.js')) }}"></script> 

    <script>
    $(function () {
        $('[data-toggle="login"]').tooltip();
        $('[data-toggle="cancel"]').tooltip();
        $('[data-toggle="unemat"]').tooltip();
    })
    </script>

</body>
</html>
