<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Consulta de categorias - Bolsa de empleo RD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('/css/index.css')}}">
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">

    </head>
    <body>
        <header>
            <div>
                <a href="{{url('/')}}" class="index-href">
                    <h1><span class="red">BolsaDe</span><span class="blue">Empleo</span>RD</h1>
                </a>
            <a href="" class="btn-publicar">Publicar vacante</a>
            </div>
        </header>
        <main>
            @section('main')
            <form method="POST" action="{{ route('newVacante.insert') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputState">Categoria</label>
                        <select name="categoria" id="inputState" class="form-control">
                            <option selected>Selecciona...</option>
                            <option value="Programación">Programación</option>
                            <option value="Diseño">Diseño</option>
                            <option value="Contabilidad">Contabilidad</option>
                            <option value="Administración">Administración</option>
                            <option value="Ingeniería">Ingeniería</option>
                            <option value="Asistente">Asistente</option>
                            <option value="Limpieza">Limpieza</option>
                            <option value="Servicio al cliente">Servicio al cliente</option>
                            <option value="Derecho">Derecho</option>
                            <option value="Redes">Redes</option>
                            <option value="Seguridad">Seguridad</option>
                            <option value="Auxiliar">Auxiliar</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            @show
        </main>

        <footer>
            BolsaDeEmpleoRD 2022-Todos los derechos reservados
        </footer>
    </body>
</html>
