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
    background: ;
    background-size: 400% 400%;
    position: relative;
    animation: change 10s ease-in-out infinite;
}
    @keyframes change {
        0%{background-position: 0 50%}
        50%{background-position: 100% 50%}
        100%{background-position: 0 50%}
    }
    
        .thema-black{ background-color:#1d2939 !important; color:white !important; }
        .btn-thema-black{ background-color:#17a2b7 !important; color:white !important; border:none; }
        
</style>
</head>
<body class="bodyanimeted resp-bodyAll">  
    
    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light" style="background: linear-gradient(to right, #1A2980, #26D0CE); color:white; box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">
        <div class="container">
            
            <a class="navbar-brand" href="../index.php"><img src="{{ URL::asset('img/titulo-white.png') }}"  /> .com</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link"><span data-hover="Home">Inicio</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link"><span data-hover="Categorias">Categorias</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link"><span data-hover="Destaques">Destaques</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link"><span data-hover="Notícias">Notícias</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                     <div class="ml-lg-4">
                          <a href="/watch-anime/public/dashboard" class="btn btn-light btn-sm"><i class="fas fa-sign-in-alt"></i> &nbsp;Login</a>
                          <a href="/watch-anime/public/register" class="btn btn-light btn-sm"><i class="fas fa-street-view"></i> &nbsp;Cadastrar </a>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    
index 
    
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