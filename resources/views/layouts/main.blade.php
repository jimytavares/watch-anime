<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Meu CSS -->
    <link href="{{ URL::asset('css/new-style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ URL::asset('css/style2.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ URL::asset('css/tooplate-style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ URL::asset('css/unicons.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ URL::asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ URL::asset('css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!- Font Awesome: Rede Social Icons -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Alert JavaScript -->
    <script type="text/javascript" src="{{ URL::asset('js/node_modules/sweetalert/dist/sweetalert.min.js') }}"></script>
    <!-- Font Family -->
        <!-- Poppins -->
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    <script>
    $(document).ready(function(){


      $("#showsearch").click(function(){
        $("#btan").fadeToggle(1000);
        $("#btas").fadeToggle(1000);
      });

      $("#btan").click(function(){
        $("#inputanime").fadeToggle(1000);
      });

      $("#btas").click(function(){
        $("#inputassistindo").fadeToggle(1000);
      });

      $("#showrank").click(function(){
        $("#btrankf").fadeToggle(1000);
        $("#btrankl").fadeToggle(1000);
      });

    });
    </script>
    
    <style>
   
    .bodyanimeted{
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, #152137, #151d28);
    background-size: 400% 400%;
    position: relative;
    animation: change 10s ease-in-out infinite;
        overflow-x: hidden;
}
    @keyframes change {
        0%{background-position: 0 50%}
        50%{background-position: 100% 50%}
        100%{background-position: 0 50%}
    }
    
        .thema-black{ background-color:#1d2939 !important; color:white !important; }
        .btn-thema-black{ background-color:#17a2b7 !important; color:white !important; border:none; }
        
        .btn-menu{ color:white; letter-spacing:2px; }
        .btn-menu:hover{ text-decoration: underline; }
        
        /* CSS */
        .button-85 {
          padding: 0.6em 2em;
          border: none;
          outline: none;
          color: rgb(255, 255, 255);
          background: #111;
          cursor: pointer;
          position: relative;
          z-index: 0;
          border-radius: 10px;
          user-select: none;
          -webkit-user-select: none;
          touch-action: manipulation;
        }

        .button-85:before {
          content: "";
          background: linear-gradient(
            45deg,
            #ff0000,
            #ff7300,
            #fffb00,
            #48ff00,
            #00ffd5,
            #002bff,
            #7a00ff,
            #ff00c8,
            #ff0000
          );
          position: absolute;
          top: -2px;
          left: -2px;
          background-size: 400%;
          z-index: -1;
          filter: blur(5px);
          -webkit-filter: blur(5px);
          width: calc(100% + 4px);
          height: calc(100% + 4px);
          animation: glowing-button-85 20s linear infinite;
          transition: opacity 0.3s ease-in-out;
          border-radius: 10px;
        }

        @keyframes glowing-button-85 {
          0% {
            background-position: 0 0;
          }
          50% {
            background-position: 400% 0;
          }
          100% {
            background-position: 0 0;
          }
        }

        .button-85:after {
          z-index: -1;
          content: "";
          position: absolute;
          width: 100%;
          height: 100%;
          background: #222;
          left: 0;
          top: 0;
          border-radius: 10px;
        }

        /* CSS */
        .btn-anime {
          padding: 0.6em 2em;
          border: none;
          outline: none;
          color: rgb(255, 255, 255);
          background: #111;
          cursor: pointer;
          position: relative;
          z-index: 0;
          border-radius: 10px;
          user-select: none;
          -webkit-user-select: none;
          touch-action: manipulation;
        }

        .btn-anime:before {
          content: "";
          background: linear-gradient(
            45deg,
            #c0c0aa,
              #1cefff,
              #48ff00,
              #c0c0aa
          );
          position: absolute;
          top: -2px;
          left: -2px;
          background-size: 400%;
          z-index: -1;
          filter: blur(5px);
          -webkit-filter: blur(5px);
          width: calc(100% + 4px);
          height: calc(100% + 4px);
          animation: glowing-button-85 20s linear infinite;
          transition: opacity 0.3s ease-in-out;
          border-radius: 10px;
        }

        @keyframes glowing-button-85 {
          0% {
            background-position: 0 0;
          }
          50% {
            background-position: 400% 0;
          }
          100% {
            background-position: 0 0;
          }
        }

        .btn-anime:after {
          z-index: -1;
          content: "";
          position: absolute;
          width: 100%;
          height: 100%;
          background: #222;
          left: 0;
          top: 0;
          border-radius: 10px;
        }
        
    </style>
    
</head>
<body class="bodyanimeted resp-bodyAll">  
    
    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light" style="background: linear-gradient(to right, #1A2980, #26D0CE); color:white; box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">
        <div class="container">
            
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ URL::asset('img/linux/dev1.png') }}" style="width:50px;" /> .com</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link btn-menu" style="">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link btn-menu">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link btn-menu">Destaques</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link btn-menu">Notícias</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                     <div class="ml-lg-4">
                      <div class="color-mode d-lg-flex justify-content-center align-items-center">
                          
                          <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="btn btn-light btn-sm" style="margin-left:5px;">
                                <i class="fas fa-sign-in-alt"></i> {{ __('Sair') }}
                            </button>
                          </form>
                          
                      </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    
    {{-- .left/USUARIO --}}
    <div class="row">
        <div class="col-3">

            <section style="margin-top:40px;">
                <div class="container-fluid">

                    <div class="row" style="width:99%; margin:0 auto;">

                        <!-- #### .left #### -->
                        <div class="thema-black" style="border-radius:3px; box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 3px;;">

                            {{-- /Usuario --}}
                            <div class="box-user">
                                <div class="row" style="margin-top:15px;">
                                    <div class="col-4">
                                        <img src="{{ URL::asset('img/animes/ningen-fushin.jpg') }}" style="width:100%; border-radius:5px; box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;"/>
                                    </div>
                                    <div class="col-8">
                                        <h4>Jimy Dickson Jales da Silva</h4>
                                        <small style="color:#38ef7d;">Level: {{$level_user}}</small>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: {{$exp_user}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$exp_user}}%</div>
                                        </div>
                                        <div class="" style="margin-top:10px;">
                                            <a href="https://www.intoxianime.com/2023/08/guia-de-temporada-outubro-2023/" target="_blank"><button class="btn btn-primary btn-sm" style="background-color:#2a80b9; border:none;">Intoxy Anime</button></a>
                                            <a href="https://animesdigital.org/" target="_blank"><button class="btn btn-primary btn-sm" style="background-color:#2ecd71; border:none;">Anime Assistir</button></a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr style="height:2px; background-color:blue; ">
                                    </div>
                                </div>
                            </div>

                            {{-- /dev --}}
                            <div class="">
                                <a href="{{ route('dashboard') }}"><button class="btn btn-primary btn-sm btn-thema-black button-85" style="width:100%; letter-spacing:2px;">Dashboard</button></a>
                                <button class="btn btn-primary btn-sm button-85" type="button" data-bs-toggle="collapse" data-bs-target="#laravel" aria-expanded="false" aria-controls="collapseExample" style="width:100%; margin-top:10px; color:#ff2d20; letter-spacing:2px;"><i class="fab fa-laravel"></i> Laravel 10.33</button>
                                <div class="collapse" id="laravel">
                                  <div class="" style="margin-top:10px;">
                                      <a href="{{ route('laravelAuth') }}"><button class="btn btn-sm " style="width:100%; margin-top:10px; background-color:white; border-radius:10px;">Auth</button></a>
                                      <a href="{{ route('laravelMigrations') }}"><button class="btn btn-sm " style="width:100%; margin-top:10px; background-color:white; border-radius:10px;">Migrations</button></a>
                                      <a href="{{ route('laravelEloquent') }}"><button class="btn btn-sm " style="width:100%; margin-top:10px; background-color:white; border-radius:10px;">Eloquente ORM</button></a>
                                      <a href="{{ route('apache2') }}"><button class="btn btn-sm " style="width:100%; margin-top:10px; background-color:white; border-radius:10px;">Models</button></a>
                                      <a href="{{ route('createProject') }}"><button class="btn btn-sm " style="width:100%; margin-top:10px; background-color:white; border-radius:10px;">Create Projetct</button></a>
                                      <a href="{{ route('apache2') }}"><button class="btn btn-sm " style="width:100%; margin-top:10px; background-color:white; border-radius:10px;">Erros</button></a>
                                  </div>
                                </div>
                                
                                <button class="btn btn-primary btn-sm btn-thema-black button-85" type="button" data-bs-toggle="collapse" data-bs-target="#mysql" aria-expanded="false" aria-controls="collapseExample" style="width:100%; margin-top:10px; letter-spacing:2px; color:#00ffff !important;"><i class="fas fa-database"></i> MySQL</button>
                                <div class="collapse" id="mysql">
                                  <div class="" style="margin-top:10px;">
                                      <a href="{{ route('apache2') }}"><button class="btn btn-sm btn-thema-black" style="width:100%; margin-top:10px;">Apache 2</button></a>
                                  </div>
                                </div>
                                
                                <button class="btn btn-primary btn-sm btn-thema-black button-85" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="width:100%; margin-top:10px; letter-spacing:2px;"><i class="fab fa-linux"></i> Linux Server</button>
                                <div class="collapse" id="collapseExample">
                                  <div class="" style="margin-top:10px;">
                                      <a href="{{ route('linuxComandos') }}"><button class="btn btn-sm" style="width:100%; margin-top:10px; background-color:white; border-radius:10px;">Comandos</button></a>
                                      <a href="{{ route('apache2') }}"><button class="btn btn-sm" style="width:100%; margin-top:10px; background-color:white; border-radius:10px;">Apache 2</button></a>
                                  </div>
                                </div>
                            </div>
                            
                            {{-- /Animes --}}
                            <div class="">
                                <hr style="height:2px; background-color:blue; ">
                                <a href="{{ route('dashboard') }}"><button class="btn btn-primary btn-sm btn-thema-black btn-anime" type="button" style="width:100%; margin-top:10px; letter-spacing:2px; color:#00ffff !important;"><i class="fas fa-feather-alt"></i> Administrativo</button></a>
                                <a href="{{ route('formanime') }}"><button class="btn btn-primary btn-sm btn-thema-black btn-anime" type="button" style="width:100%; margin-top:10px; letter-spacing:2px; color:#00ffff !important;"><i class="fas fa-feather-alt"></i> Adicionar Anime</button></a>
                                <a href="{{ route('formassistindo') }}"><button class="btn btn-primary btn-sm btn-thema-black btn-anime" type="button" style="width:100%; margin-top:10px; letter-spacing:2px; color:#00ffff !important;"><i class="fas fa-feather-alt"></i> Assistir Anime</button></a>
                            </div>
                            <div class="" style="margin-top:15px;">
                                <button class="btn btn-secondary btn-sm btn" style="width:100%; margin-top:10px;">Todos os Animes</button>
                                <button class="btn btn-secondary btn-sm btn" style="width:100%; margin-top:10px;">Meu Ranking</button>
                                <hr>
                            </div>

                        </div>

                    </div>

                </div>
            </section>
            
        </div>
    
        <div class="col">
            @yield('content')
        </div>
    </div>
    
    <footer style="margin-top:40px;">
        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </footer>

    <script type="text/javascript">
        $(function(){
            $("#txtBusca").keyup(function(){
                var texto = $(this).val();
                console.log("Rodando!");

                $("#ulItens li").css("display", "block");
                $("#ulItens li").each(function(){
                    if (texto.length == 0){
                        $("#ulItens li").css("display", "none");
                        console.log("String vazia!");
                    }else{
                        if($(this).text().indexOf(texto) < 0){
                           $(this).css("display", "none");
                        }else{
                           $(this).css("display", "block");
                        }
                    }
                });
            });
        });
	</script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>
</html>