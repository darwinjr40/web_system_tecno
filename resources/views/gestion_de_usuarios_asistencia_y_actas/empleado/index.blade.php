@extends('layouts.app')

@section('content')
    <div class="container justify-content-center">
        <div class="row">
            <div class="col-xs|sm|md|lg|xl-1-12">
                <div class="card" style="padding: 30px;">
                    <div class="card-header">
                        <h4 class="fw-bold">Empleados</h4>
                        <a class="btn btn-outline-success float-end" href="{{ url('/empleado/create')}}">Empleado Nuevo</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>CI</th>
                                        <th>Nombre</th>
                                        <th>Telefono</th>
                                        <th>Email</th>
                                        <th>Estado</th>
                                        <th>Direccion</th>
                                        <th>Fecha Inicio</th>
                                        <th>Fecha Fin</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empleado as $empleado)
                                        <tr>
                                            <td>{{ $empleado->ci }}</td>
                                            <td>{{ $empleado->nombre }}</td>
                                            <td>{{ $empleado->telefono }}</td>
                                            <td>{{ $empleado->email }}</td>
                                            <td>{{ $empleado->estado }}</td>
                                            <td>{{ $empleado->direccion }}</td>
                                            {{-- <td>
                                            <a href="{{url('/empleado/'.empleado->ci.'/edit')}}">
                                                Editar
                                            </a>
                                        </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection