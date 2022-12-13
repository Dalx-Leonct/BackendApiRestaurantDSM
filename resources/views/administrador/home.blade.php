<!DOCTYPE html> 
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    <script src=
    "https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity=
    "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous">
    </script>
    <script src=
    "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity=
    "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous">
    </script>
    <script src=
    "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity=
    "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous">
    </script>
    <script src=
    "https://code.jquery.com/jquery-3.5.1.js"
    integrity=
    "sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous">
    </script>

</head>

<body>
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

    <!-- Tabla de datos -->
    <div class="container-lg">
        <div>
           <h3 class="tittleHome"> Listado de pedidos </h3> 
        </div>
        <div>
            <table class="table">
                <!-- Titulo columnas -->
                <thead>
                  <tr class="table-dark">
                    <th scope="col">N° Mesa</th>
                    <th scope="col">Cod Orden</th>
                    <th scope="col">Total</th>
                    <th scope="col">Tiempo</th>
                    <th scope="col">Detalle</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <th>{{$order->tables_id}}</th>
                            <td>{{$order->codeOrder}}</td>
                            <td>{{$order->total}}</td>
                            <td class="orderId" style="display: none;">{{$order->id}}</td>
                            <!-- Hacer un if si tiempo no esta definido mostrar este boton de lo contrario ... -->
                            <td><button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ModalTime">Definir</button></td>
                            <!-- Mostrar este otro boton ... -->
                            <!--<td></td>-->
                            <!-- Boton trigger modal detalle de la orden -->
                            <td><button type="button" class="modal2 btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDetailOrder" >Ver</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <script type="text/javascript">
                $(".modal2").click(function(){
                    var id = $(this).parents("tr").find(".orderId").text();
                    fetch('http://127.0.0.1:8000/orderDetail/'+id)
                        .then((response)=>{
                            return response.json();
                        })
                        .then(data=> {
                            console.log(data);

                            
                        

                            data.map(function(data){
                                const tr = document.createElement('tr');
                                
                                fetch('http://127.0.0.1:8000/product/'+data.product_id)
                                .then((response)=>{
                                    return response.json()
                                })
                                .then(data2 => {
                                    console.log(data2);
                                    
                                    data2.map(function(data2){
                                        const td2 = document.createElement('td');
                                        td2.appendChild(document.createTextNode(data2.codProduct));
                                        tr.appendChild(td2);
                                        
                                        const td3 =  document.createElement('td');
                                        td3.appendChild(document.createTextNode(data2.name));
                                        tr.appendChild(td3);
                                    })
                                    // Dato desde la tabla product
                                    
                                })

                                const td = document.createElement('td');
                                td.appendChild(document.createTextNode(data2.codProduct));
                                tr.appendChild(td);
                                tbdy.appendChild(tr);
                                tbl.appendChild(tbdy);
                            })

                        });
                    
                    $(".modalData").empty();
                    $(".modalData").append(id);
                });
            </script>
        </div>
    </div>
    
    <!-- Modal detalle de orden-->
    <div class="modal fade" id="ModalDetailOrder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Detalle del pedido</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <h1 class="modalData"></h1>
                    <div>
                        <table class="modalTable table">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal tiempo de espera -->
    <div class="modal fade" id="ModalTime" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ingrese el tiempo de espera en minutos: </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group input-group-sm mb-3 has-validation">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Minutos</span>
                        <input id="waitTime1" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <div class="invalid-feedback"> 
                            Ingrese solo numeros.
                        </div> 
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>