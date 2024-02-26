
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
    <title>PAGO DE SUSCRIPCION DE EMPLEO ></title>
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
                    <a class="btn btn-link text-light" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href="#" target="_blank" ><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
                <span  class="btn btn-link text-light"><?php echo $row_user['names'];?></span>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Comunicate:</span>
                    <span class="fs-5 fw-bold">311 2228 877</span> 
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
     <!-- Navbar Start -->
     <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="b_empleo.php" class="navbar-brand ps-5 me-0">
        <img src="../../img/logo3.png">
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
               
                <a href="b_empleo.php" class="nav-item nav-link ">Empleo</a>
                <a href="postulaciones.php" class="nav-item nav-link">Mis Postulaciones</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active " data-bs-toggle="dropdown">Servicios</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="pago_suscripcion.php" class="dropdown-item ">Suscripción</a>
                        <a href="hv.php" class="dropdown-item ">Hoja de Vida</a>
                        <a href="entrevista.php" class="dropdown-item active">Entrevista</a>
                        <a href="pruebas.php" class="dropdown-item">Pruebas</a>
                    </div>
                </div>
            </div>
            
        </a>
            
            
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header End -->
        <div class="container ">
            
            <div class="row gy-5 gx-5 "  >
            
                           
                        <div class="col " >
                            <div class="card shadow-sm ">
                            <button type="button" class="btn btn-secondary"><p>Pago Suscripción Mentorias</p></button><br>
                               
                                
                                <img src="../../img/SERVICIO2.png" width="397" height="510" class="rounded mx-auto d-block"></img>
                                
                                <div class="card-body">
                                <h5 class="card-title">
                                    <p class="text-center">Obtenga acceso a Mentorias para Entrevista de Trabajo pagando una suscripción anual por $49.999 </p></h5>
                                    
                                        </div>
                                       



                                    </div>
                                </div>
                            </div>
                        </div>
               
            </div>    

            <div class="container">
           <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Documento</th>
                            <th>Precio</th>
                            <th>Detalle</th>
                            <th>Fecha Pago</th>
                            <th>Fecha Vencimiento</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $documento;
                            $detalle = "Pago Suscripcion entrevista Trabajo";
                            $precio = 49999;
                            $fecha_pago = date("Y-m-d");
                            $fa =date(strtotime("Y-m-d"));
                            $fecha_venc =date(strtotime("Y-m-d",strtotime ($fa."+ 1 year")));

                        ?>
                                    <tr>
                                        <td><?php echo $documento ?></td>
                                        <td><?php echo moneda . number_format($precio, 2, '.', ',' );  ?></td>
                                        <td><?php echo $detalle ?></td>
                                        <td><?php echo $fecha_pago  ?></td>
                                        <td><?php $date = date("Y-m-d");
                                                //Incrementando 2 años
                                                $mod_date = strtotime($date."+ 1 years");
                                                echo date("Y-m-d",$mod_date) . "\n";?></td>
                                        
                                    </tr>
                                
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="2">
                                        <p class="h3" id="total"><?php echo moneda . number_format($precio, 2, '.', ',' ); ?></p>
                                    </td>

                                </tr>
                    </tbody>
                    
                </table>
           </div>
           <form method="post" action="pago_paypal_entrevista.php">
                <label for="condiciones">Acepta los <a href="" onclick ="window.open('pagina_condiciones.php','','width= 890,height=800, toolbar=NO');void(null);">Terminos y Condiciones</a> </label><input type="checkbox" name="condiciones" required />
                <div class="row">
                        <div class="col-md-5 offset-md-7 d-grid gap-2">
                            <input type="submit" name="enviar" value="Realizar pago" class="btn btn-danger btn-lg">
                            
                        </div>
                </div>
            </form>
        </div>



            </div>
        </div>
    </div>

      
        
    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center">
            <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="#">Expertobra S.A.S</a>, All Right Reserved.
            </p>
            <p class="mb-0">Designed By <a class="fw-semi-bold" href="">HTML Codex</a> Distributed
                By: <a href="https://www.facebook.com/Esquivel7809" target="_blank">Esquivel-Ingeniero</a> </p>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


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
        function addProducto(ids, token){
            let url = '../clases/carrito.php'
            let formData = new FormData()
            formData.append('ids', ids)
            formData.append('token', token)
            fetch(url, {
                method: 'POST',
                body: formData,
                mode: 'cors'
                }).then(response => response.json())
                .then(data => {
                    if(data.ok){
                        let elemento = document.getElementById("num_cart")
                        elemento.innerHTML = data.numero
                    }
                })
        }

    </script>
</body>

</html>
