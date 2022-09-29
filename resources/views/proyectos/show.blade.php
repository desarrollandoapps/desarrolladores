@extends('layouts.main')

@section('titulo', 'Detalle de proyecto')

@section('content')

    <div class="row my-3">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <table class="table table-bordered mt-3">
                <tbody>
                    <tr>
                        <td class="fw-bold">Nombre</td>
                        <td>{{ $proyecto->nombre }}</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Duración</td>
                        <td>{{ $proyecto->duracion }} meses</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Volver</a>
        </div>
        <div class="col-sm-3"></div>
    </div>
    
@endsection