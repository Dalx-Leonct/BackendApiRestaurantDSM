<!DOCTYPE html> 
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    <!-- Javascript JQuery -->
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

    <!-- Tabla de datos principal -->
    <div class="container-lg">
        <div>
           <h3 class="tittleHome"> Listado de pedidos </h3> 
        </div>
        <div>
            <!-- Tabla de datos principal -->
            <table class="table">
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
                    <!-- Se recorre tabla de ordenes -->
                    @foreach ($orders as $order)
                        <tr>
                            <th>{{$order->tables_id}}</th>
                            <td>{{$order->codeOrder}}</td>
                            <td>{{$order->total}}</td>
                            <td class="orderId" style="display: none;">{{$order->id}}</td>
                            <!-- Hacer un if si tiempo no esta definido mostrar este boton de lo contrario ... -->
                            <td><button type="button" class="modal1 btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ModalTime">Definir</button></td>
                            <!-- Mostrar este otro boton ... -->
                            <!--<td></td>-->
                            <!-- Boton trigger modal detalle de la orden -->
                            <td><button type="button" class="modal2 btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDetailOrder" >Ver</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
                    <h1 class="orderIdHidden" style="display: none"></h1>
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ingrese el tiempo de espera: </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group input-group-sm mb-3 has-validation">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Minutos:</span>
                        <input id="waitTime1" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <div class="invalid-feedback"> 
                            Ingrese solo numeros.
                        </div> 
                    </div>
                    <div class="input-group input-group-sm mb-3 has-validation">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Segundos:</span>
                        <input id="waitTime2" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <div class="invalid-feedback"> 
                            Ingrese solo numeros.
                        </div> 
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="guardarCambios btn btn-primary" data-bs-dismiss="modal">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Script manipulacion de datos -->
<script type="text/javascript">
                
    // Script para abrir modal de ingreso de tiempo
    $(".modal1").click(function(){
        document.querySelector("#waitTime1").value ="";
        document.querySelector("#waitTime2").value ="";
        var id = $(this).parents("tr").find(".orderId").text();
        $(".orderIdHidden").empty();
        $(".orderIdHidden").append(id);
    });

    // Script para enviar datos desde el modal de tiempo
    $(".guardarCambios").click(function(){
        var min = document.querySelector("#waitTime1").value;
        var seg = document.querySelector("#waitTime2").value;
        var id= document.querySelector(".orderIdHidden").textContent;

        let data = {
            id: id,
            minutes: min,
            seconds: seg
            }
        let request = new Request('http://127.0.0.1:8000/orderUpdateTime', {
            method: 'POST',
            body: JSON.stringify(data),
            headers: new Headers({
                'Content-Type': 'application/json; charset=UTF-8',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            })
        })

        fetch(request)
        .then(function(){
            console.log(response.json())
        })

    })


    // Script para modal que lista el detalle de las ordenes

    $(".modal2").click(function(){

        $(".modalTable").empty()

        var id = $(this).parents("tr").find(".orderId").text();
        const tbl = document.querySelector(".modalTable");
        fetch('http://127.0.0.1:8000/orderDetail/'+id)
            .then((response)=>{
                return response.json();
            })
            .then(data=> {
                console.log(data);

                data.map(function(data){
                    
                    let row1 = tbl.insertRow();
                    fetch('http://127.0.0.1:8000/product/'+data.product_id)
                    .then((response)=>{
                        return response.json()
                    })
                    .then(data2 => {
                    
                    
                        data2.map(function(data2){
                            let cell1 = row1.insertCell();
                            let text1 = document.createTextNode(data2.codProduct);
                            cell1.appendChild(text1);

                            let cell2 = row1.insertCell();
                            let text2 = document.createTextNode(data2.name);
                            cell2.appendChild(text2);
                        })
                        // Dato desde la tabla product
                        
                    })
                    
                    let cell3 = row1.insertCell();
                    let text3 = document.createTextNode(data.quantity);
                    cell3.appendChild(text3);
                })

            });
        let thead = tbl.createTHead();
        let row = thead.insertRow();
        for(let key of Object.keys({Cantidad: "", Codigo:"", Nombre:""})){
            let th = document.createElement("th");
            let text = document.createTextNode(key);
            th.appendChild(text);
            row.appendChild(th);
        }
    });
</script>

</html>