@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Cursos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
            
                        @can('crear-curso')
                        <a class="btn btn-warning" href="{{ route('courses.create') }}">Nuevo</a>
                        @endcan
            
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Título</th></th>
                                    <th style="color:#fff;">Contenido</th>
                                    <th style="color:#fff;">Precio $</th>                                   
                                    <th style="color:#fff;">Acciones</th>                                                                   
                                </thead>
                            <tbody>
                            @foreach ($courses as $course)
                            <tr>
                                <td style="display: none;">{{ $course->id }}</td>                                
                                <td>{{ $course->titulo }}</td>
                                <td>{{ Str::limit($course->contenido,50) }}</td>
                                <td>{{ $course->precio }}</td>
                                <td>
                                    <form action="{{ route('courses.destroy',$course->id) }}" method="POST">    
                                        @role('Administrador|Profesor')
                                        @can('editar-curso')
                                        <a class="btn btn-info" href="{{ route('courses.edit',$course->id) }}">Editar</a>
                                        @endcan
                                        @endrole
                                        @role('Administrador')
                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-curso')
                                        @endrole
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $courses->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection