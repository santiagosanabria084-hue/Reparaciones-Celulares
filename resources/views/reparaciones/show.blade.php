@extends('layouts.app')

@section('content')

<h1>Detalle de Reparación</h1>

<div class="detalle-card">

    <div class="fila">
        <strong>Cliente:</strong>
        <span>{{ $reparacion->cliente }}</span>
    </div>

    <div class="fila">
        <strong>Marca:</strong>
        <span>{{ $reparacion->marca }}</span>
    </div>

    <div class="fila">
        <strong>Modelo:</strong>
        <span>{{ $reparacion->modelo }}</span>
    </div>

    <div class="fila">
        <strong>Falla:</strong>
        <span>{{ $reparacion->falla }}</span>
    </div>

    <div class="fila">
        <strong>Fecha:</strong>
        <span>{{ $reparacion->fecha_ingreso }}</span>
    </div>

    <div class="fila">
        <strong>Estado:</strong>
        <span>{{ $reparacion->estado }}</span>
    </div>

</div>

<br>

<a class="btn ver"
    href="{{ route('reparaciones.index') }}">
    Volver al listado
</a>

@endsection