@extends('layouts.app')

@section('content')

<h1>Nueva Reparacion</h1>

@if ($errors->any())

<div class="error">
    Se necesita completar todos los campos.
</div>

@endif

<form action="{{ route('reparaciones.store') }}" method="POST">
    @csrf

    <p>
        Cliente:
        <input type="text" name="cliente">
    </p>
    <p>
        Marca:
        <input type="text" name="marca">
    </p>
    <p>
        Modelo:
        <input type="text" name="modelo">
    </p>
    <p>
        Falla:
        <input type="text" name="falla">
    </p>
    <p>
        Fecha de Ingreso:
        <input type="date" name="fecha_ingreso">
    </p>
    <p>
        Estado:
        <select name="estado">
            <option value="Ingresado">Ingresado</option>
            <option value="en reparacion">En reparacion</option>
            <option value="Reparado">Reparado</option>
            <option value="entregado">Entregado</option>
        </select>
    </p>

    <button type="submit">Guardar

    </button>

</form>

@endsection