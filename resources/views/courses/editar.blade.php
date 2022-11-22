@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Curso</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                            

                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif


                    <form action="{{ route('courses.update',$course->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            {{-- Titutlo --}}
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="titulo">Título</label>
                                    <input type="text" name="titulo" class="form-control" value="{{ $course->titulo }}">
                                </div>
                            </div>
                            {{-- Contenido --}}
                            <div class="col-xs-12 col-sm-12 col-md-12">             
                                <div class="form-floating">
                                    <label for="contenido">Contenido</label>
                                    <textarea class="form-control" name="contenido" style="height: 100px">{{ $course->contenido }}</textarea>
                                </div>
                            </div>
                            {{-- Precio --}}
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="precio">Precio</label>
                                    <input type="text" name="precio" class="form-control" value="{{ $course->precio }}">
                                </div>
                            </div>
                            <br>
                            {{-- Boton de Guardar y Cancelar --}}
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <button type="cancel" onclick="window.location='{{ route('courses.index') }}';return false;" class="btn btn-danger">Cancelar</button>  
                            </div>              
                        </div>
                    </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection