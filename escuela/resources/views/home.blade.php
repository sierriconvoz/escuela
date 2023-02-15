@extends('layouts.app')

@section('content')
    <div>
        <button class="btn btn-primary">
            <a href="{{ route('createUser') }}">
                <div class="text-warnig">Añadir Estudiante</div>
            </a>
        </button>
    </div>

@foreach ($users as $user)
    <div>{{ $user->id }} {{ $user->name }}</div>

        <form action="{{ route('deleteUser', ['id' => $user->id]) }}" method="post">
        @method('delete')
        @csrf
            <button type="submit"
                class="58326 1 position: absolute;width: 27px;height: 31px;
                    left: 65px;top: 436px;background: url(58326.png);bt-adm- m-1 d-flex"
                onclick="return confirm('¿Quieres eliminar? {{ $user->name }} - ID {{ $user->id }}')">🗑
            </button>
        </form>
    </div>
    <button><a>🖍</a></button>

@endforeach
<button><a>Añadir Estudiante</a></button>

@endsection
