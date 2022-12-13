<!DOCTYPE html> 
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="{{ asset('css/dataorder.css') }}" rel="stylesheet">
</head>

<!-- Barra de navegacion -->
<header>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src={{URL::asset('https://www.iconpacks.net/icons/2/free-restaurant-icon-1886-thumb.png')}} alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Web - App Restaurant
            </a>
        </div>
    </nav>
</header>

<body>
    <div class="container-fluid">
        <h3 class="tittleHome"> Detalle de la orden </h3> 
        <div class="listData">
            <ul class="list-group">
                <li class="list-group-item">N°Mesa: </li>
                <li class="list-group-item">Codigo de orden: </li>
                <li class="list-group-item">Total: </li>
                <li class="list-group-item">Tiempo de espera: </li>
            </ul>
        </div>

        <div>
            <table class="table">
                <thead>
                  <tr class="table-dark">
                    <th scope="col">Codigo</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
                  </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>fj24Eilla</td>
                        <td>Coquita</td>
                        <td>4</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

@php
    //print_r($orders)
@endphp

@php
    //print_r($orderDetails)
@endphp