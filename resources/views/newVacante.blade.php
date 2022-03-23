<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Publicar vacante - Bolsa de empleo RD</title>

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
            <div>
                <div>
                    <div>
                        Síguenos
                    </div>

                    <div>
                        <a href="https://laravel.com/docs">Facebook</a>
                        <a href="https://laracasts.com">Instagram</a>
                        <a href="https://laravel-news.com">Telegram</a>
                        <a href="https://blog.laravel.com">Whatsapp</a>
                        <a href="https://nova.laravel.com">LinkedIn</a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            @section('main')
            <form method="POST" action="{{ route('newVacante.insert') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nombre">Nombre de la vacante</label>
                        <input type="text" name="nombre" required class="form-control" id="nombre" placeholder="Nombre de la vacante">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Ubicación</label>
                        <select name="ubicacion" id="inputState" class="form-control">
                            <option selected>Selecciona...</option>
                            <option value="">Todos</option>
                            <option value="Azua">Azua</option>
                            <option value="Bahoruco">Bahoruco</option>
                            <option value="Barahona">Barahona</option>
                            <option value="Dajabón">Dajabón</option>
                            <option value="Distrito Nacional">Distrito Nacional</option>
                            <option value="Duarte">Duarte</option>
                            <option value="Elías Piña">Elías Piña</option>
                            <option value="El Seibo">El Seibo</option>
                            <option value="Espaillat">Espaillat</option>
                            <option value="Hato Mayor">Hato Mayor</option>
                            <option value="Hermanas Mirabal">Hermanas Mirabal</option>
                            <option value="Independencia">Independencia</option>
                            <option value="La Altagracia">La Altagracia</option>
                            <option value="La Romana">La Romana</option>
                            <option value="La Vega">La Vega</option>
                            <option value="María Trinidad Sánchez">María Trinidad Sánchez</option>
                            <option value="Monseñor Nouel">Monseñor Nouel</option>
                            <option value="Monte Cristi">Monte Cristi</option>
                            <option value="Monte Plata">Monte Plata</option>
                            <option value="Pedernales">Pedernales</option>
                            <option value="Peravia">Peravia</option>
                            <option value="Puerto Plata">Puerto Plata</option>
                            <option value="Punta Cana">Punta Cana</option>
                            <option value="Samaná">Samaná</option>
                            <option value="Sánchez Ramírez">Sánchez Ramírez</option>
                            <option value="San Cristóbal">San Cristóbal</option>
                            <option value="San José de Ocoa">San José de Ocoa</option>
                            <option value="San Juan">San Juan</option>
                            <option value="San Pedro de Macorís">San Pedro de Macorís</option>
                            <option value="Santiago">Santiago</option>
                            <option value="Santiago Rodríguez">Santiago Rodríguez</option>
                            <option value="Santo Domingo">Santo Domingo</option>
                            <option value="Valverde">Valverde</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="horario">Horario</label>
                        <input type="text" name="horario" required class="form-control" id="horario" placeholder="Ejemplo: L/V 9am-6pm">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="salario">Salario</label>
                        <input type="number" name="salario" required class="form-control" id="salario" placeholder="Salario del puesto">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">A dicutir en la entrevista</label>
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="nombre">Nombre de la empresa (opcional)</label>
                        <input type="text" name="nombre_empresa" class="form-control" id="nombre" placeholder="Nombre de la empresa">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="descripcion">Descripción</label>
                        <textarea required name="descripcion" class="form-control" id="descripcion" rows="3"></textarea>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="requisitos">Requisitos</label>
                        <textarea required name="requisitos" class="form-control" id="requisitos" rows="3"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputState">Tipo</label>
                        <select name="tipo" required id="inputState" class="form-control">
                            <option selected>Selecciona...</option>
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                            <option value="Freelance">Freelance</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="email">Correo electrónico (para recibir curriculum)</label>
                        <input required type="email" name="email" class="form-control" id="email" placeholder="Correo electrónico">
                    </div>
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
                <div class="form-row">
                    <div class="form-group">
                        <label for="file">Imágen (Opcional)</label>
                        <input type="file" name="img" class="form-control-file" id="file" accept="image/*">
                        <small>Puede ser una imágen de la vacante, la empresa, etc...</small>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            @show
        </main>

        <footer>
            PrimerEmpleoRD 2021-Todos los derechos reservados
        </footer>
    </body>
</html>
