@extends('layouts.app')

@section('content')

@foreach ($users as $user)
    <div>{{ $user->name }}</div>
    <button><a>🗑</a></button>
    <button><a>🖍</a></button>

@endforeach
<button><a>Añadir Estudiante</a></button>

@endsection
