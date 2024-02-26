
<?php
require '../../config/database.php';
require '../../config/config.php';
include '../includes/validar_sesion.php';
$db = new Database();
$con = $db->conectar();

$query_usuarios=$con->prepare ("SELECT * FROM user, tip_user WHERE document = '".$_SESSION['usuario']."' AND user.id_tip_user = tip_user.id_tip_user");
$query_usuarios->execute();
$row_user = $query_usuarios->fetch(PDO::FETCH_ASSOC);
$documento = $row_user['document'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PAGO DE SUSCRIPCION DE EMPLEO FRIEND CONSTRUCTOR?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../../img/LOGO.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-white">
                    <span>Nuestras Redes:</span>
                    <a class="btn btn-link text-light" href="https://www.facebook.com/profile.php?id=100088458352909" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href="https://api.whatsapp.com/send?phone=3118830638" target="_blank" ><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href="https://www.instagram.com/friendconstructorsas/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
                <span  class="btn btn-link text-light"><?php echo $row_user['names'];?></span>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Comunicate:</span>
                    <span class="fs-5 fw-bold">311 8830 638</span> 
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
     <!-- Navbar Start -->
     <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="b_empleo.php" class="navbar-brand ps-5 me-0">
            <h1 class="text-white m-0">Friend Constructor</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
               
            <a href="b_empleo.php" class="nav-item nav-link ">Empleo</a>
                <a href="postulaciones.php" class="nav-item nav-link active">Mis Postulaciones</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Servicios</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="pago_suscripcion.php" class="dropdown-item">Suscripción</a>
                        <a href="hv.php" class="dropdown-item ">Hoja de Vida</a>
                        <a href="entrevista.php" class="dropdown-item">Entrevista</a>
                        <a href="pruebas.php" class="dropdown-item">Pruebas</a>
                    </div>
                </div>
            </div>
            <a href="../includes/salir.php" class="nav-item nav-link active">Cerrar Sesión</a>
        </a>
            
            
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    


    <!-- Service Start -->
    

    <div class="full-box bg-white">
        <div class="container container-web-page">
        <main>
        <div class="container">
           <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>DETALLE</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if($lista_carrito == null)
                            {
                                echo '<tr><td colspan="5" class="text-center"><b>Lista Vacia</b></td></tr>';
                            }
                            else
                            {
                                $total = 0;
                                foreach($lista_carrito as $producto)
                                {
                                    
                                    $precio = 19999;
                                    $fecha_pago = strtotime(date("Y-m-d"));
                                    $fecha_venc = $fecha + 6;

                            
                        ?>
                                    <tr>
                                        <td><?php echo $nombre ?></td>
                                        <td><?php echo moneda . number_format($precio, 2, '.', ',' );  ?></td>
                                        <td>
                                            <input type="number" min="1" max="10" step="1" value="<?php echo $cantidad ?>" size="5" id="cantidad_<?php echo $_id; ?>" onchange="actualizaCantidad(this.value, <?php echo $_id;?>)">
                                        </td>
                                        <td>
                                            <div id="subtotal_<?php echo $_id; ?>" name="subtotal[]"><?php echo moneda . number_format($subtotal, 2, '.', ',' );  ?></div>
                                        </td>
                                        <td><a href="#" id="eliminar" class="btn btn-warning btn-sm" data-bs-id="<?php echo $_id;?>" data-bs-toggle="modal" data-bs-target="#eliminaModal">Eliminar</a></td>
                                        
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="2">
                                        <p class="h3" id="total"><?php echo moneda . number_format($total, 2, '.', ',' ); ?></p>
                                    </td>

                                </tr>
                    </tbody>
                    <?php } ?>
                </table>
           </div>
           <?php if($lista_carrito != null){?>
           <div class="row">
                <div class="col-md-5 offset-md-7 d-grid gap-2">
                    <a href="pago_curso_on.php" class="btn btn-danger btn-lg">Realizar Pago</a>
                </div>
           </div>
           <?php } ?>
        </div>
    </main>
        
           
        <!-- Modal -->
    <div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="eliminaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="eliminaModalLabel">Alerta</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ¿Desea Eliminar el producto de la compra?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" id="btn-elimina" class="btn btn-danger" onclick="eliminar()">Eliminar</button>
        </div>
        </div>
    </div>
    </div>
    <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                    <a href="javascript:history.back(-1);"><h4><strong>REGRESAR</strong></h4></a>
                </div>
</div>
  

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/wow/wow.min.js"></script>
    <script src="../../lib/easing/easing.min.js"></script>
    <script src="../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../js/main.js"></script>



    
    <!-- Script para el carrito-->

    <script>
        let eliminaModal = document.getElementById('eliminaModal')
            eliminaModal.addEventListener('show.bs.modal', function(event){
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')
            let buttonElimina = eliminaModal.querySelector('.modal-footer #btn-elimina')
            buttonElimina.value = id 
        })

  

        function actualizaCantidad(cantidad, id){
            let url = '../clases/actualizar_carrito.php'
            let formData = new FormData()
            formData.append('action', 'agregar')
            formData.append('id', id)
            formData.append('cantidad', cantidad)
            fetch(url, {
                method: 'POST',
                body: formData,
                mode: 'cors'
                }).then(response => response.json())
                .then(data => {
                    if(data.ok){
                        let divsubtotal = document.getElementById("subtotal_" + id)
                        divsubtotal.innerHTML = data.sub

                        let total = 0.00
                        let list = document.getElementsByName('subtotal[]')

                        for(let i = 0; i < list.length; i++)
                        {
                            total += parseFloat(list[i].innerHTML.replace(/[$,]/g, ''))
                        }
                        total = new Intl.NumberFormat('en-US', {
                            minimumFractionDigits: 2
                            }).format(total)
                            document.getElementById('total').innerHTML = '<?php echo moneda;?>' + total
                        }
                })
        }

        function eliminar()
        {
          
            let botonElimina = document.getElementById('btn-elimina')
            let id = botonElimina.value
            let url = '../clases/actualizar_carrito.php'
            let formData = new FormData()
            formData.append('action', 'eliminar')
            formData.append('id', id)
            
            fetch(url, 
            {
                method: 'POST',
                body: formData,
                mode: 'cors'
                }).then(response => response.json())
                .then(data => 
                {
                    if(data.ok)
                    {
                       location.reload()
                    }
                })
        }
        </script>
</body>

</html>
