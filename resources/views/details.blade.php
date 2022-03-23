@extends('layouts.layout')

@section('title')
{{$vacante->nombre}} | Bolsa de empleo RD
@endsection

@section('main')

<section class="primary">
    @if($vacante->img_ref)
        <div class="cont-img">
            <img src="{{asset($vacante->img_ref)}}">
        </div>
    @endif
    <ul>
        <h2>{{$vacante->nombre}}</h2>
        <li>
            <i class="fas fa-map-marker-alt"></i>
            <h5>{{$vacante->ubicacion}}</h5>
        </li>
        <li>
            <i class="fas fa-clock"></i>
            <h5>{{$vacante->horario}}</h5>
        </li>
        <li>
            <i class="fas fa-hand-holding-usd"></i>
            <h5>RD$ {{$vacante->salario}}</h5>
        </li>
        <li>
            <i class="fas fa-building"></i>
            @if($vacante->nombre_empresa)
                <h5>{{$vacante->nombre_empresa}}</h5>
            @else
                <h5>Confidencial</h5>
            @endif
        </li>
        <li>
            <h5>Publicado el 20 de octubre del 2021</h5>
        </li>
        <h4 class="resaltar">Beneficios</h4>
        {!!$vacante->beneficios!!}
    </ul>
</section>

<section class="mas-detalles">
    <h3 class="resaltar">Descripción</h3>
    <h4>
        {!!$vacante->descripcion!!}
    </h4>
    <h3 class="resaltar">Requisitos</h3>
    <h4>
        {!!$vacante->requisitos!!}
    </h4>

    <h4>Envía tu curriculum indicando el puesto en el asunto: <a href="mailto:{{$vacante->email}}">{{$vacante->email}}</a></h4>
    <br>
    <h4 class="btn-report">
        <i class="fas fa-flag"></i>
        Reportar vacante
    </h4>
</section>
@endsection
