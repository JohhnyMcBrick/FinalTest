<php?
@extends('layouts.app')

@section('content')
    <h1>Lista de Asignaturas</h1>
    <a href="{{ route('asignaturas.create') }}">Crear Asignatura</a>
    
    <ul>
        @foreach($asignaturas as $asignatura)
            <li>{{ $asignatura->nombre }}</li>
            <a href="{{ route('asignaturas.edit', $asignatura) }}">Editar</a>
            <form action="{{ route('asignaturas.destroy', $asignatura) }}" method="GET">
                @csrf
                @method('DELETE')
                <button type="submit">Borrar</button>
            </form>
        @endforeach
    </ul>
@endsection 
