@extends('layouts.app')

@section('content')
<h1>Listado de Reparaciones</h1>
<a class="btn nuevo" href="{{ route ('reparaciones.create') }}">
    Nueva Reparacion
</a>

<br><br>

<table>
    <thead>
        <tr>
            <th>Cliente</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>

    </thead>

    <tbody>

        @foreach($reparaciones as $r)
    </tbody>
    <tr>
        <td>{{ $r->cliente }}</td>
        <td>{{ $r->marca }}</td>
        <td>{{ $r->modelo }}</td>
        <td>{{ $r->estado }}</td>

        <td>
            <a class="btn ver" href="{{ route ('reparaciones.show', $r->id) }}">
                Ver
            </a>

            <br>

            <a class="btn editar" href="{{ route ('reparaciones.edit', $r->id) }}">
                Editar
            </a>

            <form action="{{ route ('reparaciones.destroy', $r->id) }}" method="POST" style="display:inline;" >

                @csrf
                @method('DELETE')

                <button class="btn eliminar" type="submit">
                    Eliminar
                </button>
            </form>

        </td>
    </tr>


    @endforeach
</table>
@endsection