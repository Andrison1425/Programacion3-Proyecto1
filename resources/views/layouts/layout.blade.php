<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@section('title')@show</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('/css/index.css')}}">
        <link rel="stylesheet" href="{{asset('/css/all.min.css')}}">

    </head>
    <body>
        <header>
            <div>
                <a href="{{url('/')}}" class="index-href">
                    <h1><span class="red">BolsaDe</span><span class="blue">Empleo</span>RD</h1>
                </a>
                <span>
                    @auth
                        <a class="btn-publicar" href="{{route('vacante.categorias')}}" >Gestionar Categorías</a>

                        <form action="{{route('logout')}}" method="post" style="display:contents">
                            @csrf
                            <a class="btn-publicar send" href="" >Cerrar Sesión</a>
                        </form>
                    @endauth

                    @guest
                        <a href="{{route('login')}}" class="btn-publicar">Iniciar Sesión</a>
                    @endguest
                    <a href="{{route('newVacante.index')}}" class="btn-publicar">Publicar vacante</a>
                </span>
            </div>
        </header>
        <main>
            @section('main')
            @show
        </main>

        <footer>
            BolsaDeEmpleoRD 2022-Todos los derechos reservados
        </footer>

        <script>
            let btn=document.querySelector(".send");
            let form=document.querySelector("form");

            btn.onclick=(e)=>{
                e.preventDefault();
                document.querySelector("form").submit();
            }
        </script>
    </body>
</html>
