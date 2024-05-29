@extends('app')

<!-- Acá hacemos referencia a la sección 'content' del archivo 'app' que definimos arriba  -->
@section('content')
    <div class="container w-25 border p-4 mt-4">
        <form>
            <div class="mb-3">
                <label for="title" class="form-label">Título de la tarea</label>
                <input type="text" class="form-control" name="title">
            </div>            
            <button type="submit" class="btn btn-primary">Crear nueva tarea</button>
        </form>
    </div>
@endsection