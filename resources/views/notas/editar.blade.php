@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1>Editar Nota</h1>

                        <form action="{{ route('notas.update', $nota) }}" method="POST">
                                @method('PUT')
                                @csrf

                                <input type="text"
                                name="nombre" 
                                placeholder="Nombre" 
                                class="form-control mb-2" 
                                value="{{ $nota->nombre }}">

                                <input type="text" 
                                name="descripcion" 
                                placeholder="Descripcion" 
                                class="form-control mb-2" 
                                value="{{ $nota->descripcion }}">

                                <button class="btn btn-warning text-light" type="submit">Guardar</button>
                                <a class="btn btn-danger" href="{{ route('notas.index') }}">Cancelar</a>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
  

@endsection
