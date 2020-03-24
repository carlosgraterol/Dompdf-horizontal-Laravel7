@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('decargarPDF') }}" target="_blank" class="btn btn-sm btn-primary">Imprimir PDF</a>
                    <a href="{{ route('decargarPDFProductos') }}" class="btn btn-sm btn-success">Imprimir PDF Productos</a>
                    <a href="{{ route('decargarPDFProductosHorizontal') }}" target="_blank" class="btn btn-sm btn-danger">Imprimir PDF Productos Horizontal </a>
                    <a href="{{ route('guardarpdf') }}" class="btn btn-sm btn-dark">Guardar PDF </a>
                    <hr>
                    <h5 style="text-align: center"><strong>TABLA DE PRODUCTOS</strong></h5>
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Existencia</th>
                                <th scope="col">Lote</th>
                                <th scope="col">Fecha de compra</th>
                            </tr>
                        </thead>
                       <tbody>
                        @foreach($productos as $producto)
                            <tr>
                                <th scope="row">{{ $producto->id }}</th>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->descripcion }}</td>
                                <td>{{ $producto->existencia }}</td>
                                <td>{{ $producto->lote }}</td>
                                <td>{{ $producto->fecha_de_compra }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $productos->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
