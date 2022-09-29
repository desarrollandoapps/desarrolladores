@extends('layouts.main')

@section('titulo', 'Editar desarrollador')

@section('content')
    <form action="{{ route('desarrolladores.update', $desarrollador->id) }}" method="post" class="needs-validation" novalidate>
        @method('PUT')
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{ $desarrollador->nombre }}" required>
            <label for="nombre">Nombre</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="apellido" value="{{ $desarrollador->apellido }}" required>
            <label for="apellido">Apellido</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="{{ $desarrollador->telefono }}" required>
            <label for="telefono">Teléfono</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion" value="{{ $desarrollador->direccion }}" required>
            <label for="direccion">Dirección</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="proyecto_id" name="proyecto_id" aria-label="Proyecto" required>
              <option value="" disabled>Seleccione...</option>
              @foreach ($proyectos as $item)
                  <option value="{{ $item->id }}" @if($item->id == $desarrollador->proyecto_id) selected @endif>{{ $item->nombre }}</option>
              @endforeach
            </select>
            <label for="proyecto_id">Proyecto</label>
        </div>
        <button type="submit" class="btn btn-secondary">Guardar</button>
    </form>
@endsection

@section('scripts')
    <script>
        (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>
@endsection