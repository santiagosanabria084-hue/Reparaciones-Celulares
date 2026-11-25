@extends('layouts.app')

@section('content')
<h1>Editar Reparacion</h1>

<form action="{{ route ('reparaciones.update', $reparacion->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p>
        Cliente:
        <input type="text"
            name="cliente"
            value="{{ $reparacion->cliente }}">
    </p>

    <p>
        Marca:
        <input type="text"
            name="marca"
            value="{{ $reparacion->marca }}">
    </p>

    <p>
        Modelo:
        <input type="text"
            name="modelo"
            value="{{ $reparacion->modelo }}">
    </p>

    <p>
        Falla:
        <textarea name="falla">{{ $reparacion->falla }}</textarea>
    </p>

    <p>
        Fecha:
        <input type="date"
            name="fecha_ingreso"
            value="{{ $reparacion->fecha_ingreso }}">
    </p>

    <p>
        Estado:
        <select name="estado">
            <option value="Ingresado">Ingresado</option>
            <option value="En reparacion">En reparacion</option>
            <option value="Reparado">Reparado</option>
            <option value="Entregado">Entregado</option>
        </select>
    </p>

    <button type="submit">
        Actualizar
    </button>
</form>
@endsection