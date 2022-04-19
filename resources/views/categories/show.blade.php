@extends('app')
@section('content')
    <div class="container w-25 border p-4 mt-4">
        <form action="{{ route('categories.update', ['category' => $category->id]) }}" method="POST">
            @method('PATCH')
            @csrf

            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            @error('name')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            <div class="mb-3">
                <label for="name" class="form-label">Categoría</label>
                <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                <label for="color" class="form-label">Color de la categoría</label>
                <input type="color" name="color" class="form-control" id="color" value="{{ $category->color }}">

            </div>
            <button type="submit" class="btn btn-primary">Actualizar Categoría</button>
        </form>
        <div>
            @if ($category->todos->count() > 0)
                @foreach ($category->todos as $todo)
                    <div class="col-md-9 d-flex align-items-center">
                        <a href="{{ route('todos-edit', ['id'=>$todo->id]) }}">{{ $todo->title }}</a>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end">
                        <form action="{{ route('todos-destroy', [$todo->id]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                @endforeach
            @else

            <span class="">No hay tareas en esta categoría</span>
                
            @endif
        </div>

    </div>
@endsection
