@extends('layouts.layout')

@section('title')
Bolsa de empleo RD | Vacantes de trabajo en RD
@endsection

@section('main')
<div class="cont-filtros">
    <form method="get" action="{{route('vacante.buscar')}}" class="m-0">
        <input type="search" placeholder="Buscar vacante" name="q" id="txt-buscar">
        <input type="submit" name="" id="btn-buscar" value="Buscar">
    </form>

    <span>
        <label for="lugar">Categoria: </label>
        <form style="display:contents;" method="get" action="{{route('vacante.categoria')}}" id="form">
            <select  name="categoria" class="form-control" id="lugar" value="{{$categoria}}">
                <option {{ $categoria === '' ? 'selected' : '' }} value="">Todos</option>
                <option {{ $categoria === 'Programación' ? 'selected' : '' }} value="Programación">Programación</option>
                <option {{ $categoria === 'Diseño' ? 'selected' : '' }} value="Diseño">Diseño</option>
                <option {{ $categoria === 'Contabilidad' ? 'selected' : '' }} value="Contabilidad">Contabilidad</option>
                <option {{ $categoria === 'Administración' ? 'selected' : '' }} value="Administración">Administración</option>
                <option {{ $categoria === 'Ingeniería' ? 'selected' : '' }} value="Ingeniería">Ingeniería</option>
                <option {{ $categoria === 'Asistente' ? 'selected' : '' }} value="Asistente">Asistente</option>
                <option {{ $categoria === 'Limpieza' ? 'selected' : '' }} value="Limpieza">Limpieza</option>
                <option {{ $categoria === 'Servicio al cliente' ? 'selected' : '' }} value="Servicio al cliente">Servicio al cliente</option>
                <option {{ $categoria === 'Derecho' ? 'selected' : '' }} value="Derecho">Derecho</option>
                <option {{ $categoria === 'Redes' ? 'selected' : '' }} value="Redes">Redes</option>
                <option {{ $categoria === 'Seguridad' ? 'selected' : '' }} value="Seguridad">Seguridad</option>
                <option {{ $categoria === 'Auxiliar' ? 'selected' : '' }} value="Auxiliar">Auxiliar</option>
            </select>
        </form>
    </span>
</div>

<h2>{{$categoria != ''? $vacantes->count() .' vacantes en '. $categoria: 'Vacantes de trabajo en República Dominicana'}}</h2>

<ul>
    @foreach ($vacantes as $vacante)
        <li class="vacante">
            <h3>{{$vacante->nombre}} / {{$vacante->categoria}}</h3>
            <div>
                <h5>{{$vacante->ubicacion}}</h5>
            </div>
            <h4>{!!$vacante->nombre_empresa!!}</h4>
            <a href="{{route('vacante.show',['id'=>$vacante->id])}}" class="btn-publicar">Ver más</a>
        </li>
    @endforeach
</ul>

{{ $vacantes->links() }}

<script>
    let select=document.querySelector("select");

    select.onchange=(e)=>{
        document.querySelector("#form").submit();
    }
</script>
@endsection
