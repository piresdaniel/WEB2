
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de Localização</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
               background-image: url("/img/logo_inicio.png");
                background-repeat: no-repeat;
                background-position: right;
                background-size: 800px, 800px;
                color: #636b6f;
                font-family: 'Loto', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 15px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 100px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Admin</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Registrar</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Sistema de localização
                </div>

                <div class="links">

                    <!--<a href="salas/listar">Pesquise uma Sala ou Curso</a>-->

                    <a href="salas/listar">Localize sua sala</a>

                    <a href="salas/listar">Pesquise sua Grade</a>


                </div>
            </div>
        </div>
    </body>
    <div class="container"> <!-- inicio container -->

            @yield('conteudo')

            <hr>

            <footer>
                <div class="row">
                    <div class="col-lg-18">
                        <p>Copyright &copy; Sistema de Localização</p>
                    </div>
                </div>
            </footer>

        </div><!-- fim container -->
</html>
