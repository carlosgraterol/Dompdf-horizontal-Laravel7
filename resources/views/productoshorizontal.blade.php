<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TABLA DE PRODUCTOS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/estilospdfhorizontal.css') }}">
</head>
<body>
	<header>
        <br>
        <p><strong>LIBRERIA DOMPDF - LARAVEL 7</strong></p>
    </header>
    <main>
        <h5 style="text-align: center"><strong>TABLA DE PRODUCTOS</strong></h5>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Existencia</th>
                    <th scope="col">Lote</th>
                    <th scope="col">Fecha</th>
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
    </main>
    <footer>
        <p><strong>SUSCRIBETE - COMENTA - COMPARTE</strong></p>
    </footer>
</body>
</html>