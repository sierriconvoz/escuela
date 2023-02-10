@extends('layouts.app')

@section('content')

@foreach ($users as $user)
    <div>{{ $user->name }}</div>

        <form action="{{ route('deleteUser', ['id' => $user->id]) }}"method="post">
        @method('delete')
        @csrf
            <button type="submit"
                class="58326 1 position: absolute;width: 27px;height: 31px;
                    left: 65px;top: 436px;background: url(58326.png);bt-adm- m-1 d-flex"
                on click="return confirm('¿Quieres eliminar? {{ $user->name }} - ID {{ $user->id }}')">🗑
            </button>
        </form>
    </div>
    <button><a>🖍</a></button>

@endforeach
<button><a>Añadir Estudiante</a></button>

@endsection
