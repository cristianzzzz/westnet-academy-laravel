@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                          
                                <div class="row">
                                    <div class="col-md-4 col-xl-4">

                                    {{-- DASHBOARD MAIN --}}

                                    {{-- ADMIN --}}
                                    @role('Administrador') 
                                    {{-- Tarjeta de Usuarios --}}
                                    <div class="card bg-c-blue order-card">
                                            <div class="card-block">
                                            <h5>Usuarios</h5>                                               
                                                <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/users" class="text-white">Ver más</a></p>
                                            </div>                                            
                                        </div>                                    
                                    </div>

                                    {{-- Tarjeta de Roles --}}
                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-green order-card">
                                            <div class="card-block">
                                            <h5>Roles</h5>                                               
                                                <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span>{{$cant_roles}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/roles" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>                        
                                    
                                    {{-- Tarjeta de Cursos --}}
                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Cursos</h5>                                               
                                                <h2 class="text-right"><i class="fa fa-book f-left"></i><span>{{ $cant_cursos }}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/courses" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    {{-- Tarjeta de Pagos --}}
                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-warning">
                                            <div class="card-block">
                                                <h5>Pagos</h5>                                               
                                                <h2 class="text-right"><i class="fa fa-money-bill-alt f-left"></i><span>{{$cant_cursos}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/courses" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    @endrole

                                    {{-- ADMIN --}}
                                    @role('Profesor') 
                                    {{-- Tarjeta de Usuarios --}}
                                    <div class="card bg-c-blue order-card">
                                            <div class="card-block">
                                            <h5>Usuarios</h5>                                               
                                                <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/users" class="text-white">Ver más</a></p>
                                            </div>                                            
                                        </div>                                    
                                    </div>
                                    
                                    {{-- Tarjeta de Cursos --}}
                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Cursos</h5>                                               
                                                <h2 class="text-right"><i class="fa fa-book f-left"></i><span>{{ $cant_cursos }}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/courses" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    {{-- Tarjeta de Pagos --}}
                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-warning">
                                            <div class="card-block">
                                                <h5>Pagos</h5>                                               
                                                <h2 class="text-right"><i class="fa fa-money-bill-alt f-left"></i><span>{{$cant_cursos}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/courses" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    @endrole

                                    {{-- ADMIN --}}
                                    @role('Estudiante') 

                                    {{-- Tarjeta de Cursos --}}
                                    <div class="col-md-12 col-xl-12">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Cursos</h5>                                               
                                                <h2 class="text-right"><i class="fa fa-book f-left"></i><span>{{ $cant_cursos }}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/courses" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    {{-- Tarjeta de Pagos --}}
                                    <div class="col-md-12 col-xl-12">
                                        <div class="card bg-warning">
                                            <div class="card-block">
                                                <h5>Pagos</h5>                                               
                                                <h2 class="text-right"><i class="fa fa-money-bill-alt f-left"></i><span>{{$cant_cursos}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/courses" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    @endrole

                                </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
