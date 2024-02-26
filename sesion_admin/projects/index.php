

<?php

require '../../config/database.php';
require '../../config/config.php';
include '../includes/validar_sesion.php';
$db = new Database();
$con = $db->conectar();


$por_pagina = 9;
if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];

}
else
{
    $pagina = 1;
}
#$empieza = ($pagina - 1) * $por_pagina;
#$sql1 = $con->prepare("SELECT * FROM tr_ciudad LEFT OUTER JOIN tr_ciudad ON tr_ciudad.id_departamentos = tr_ciudad.id_departamentos LEFT OUTER JOIN tr_departamentos ON tr_ciudad.id_departamentos = tr_departamentos.id_departamentos ORDER BY cargo LIMIT $empieza, $por_pagina");
#$sql1->execute();
#$resultado1 = $sql1->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Editar Empleo</title>
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

 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="index.php" class="navbar-brand ps-5 me-0">
        <img src="../../img/logo3.png">
        </a>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Usuarios</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="activar_usuarios.php" class="dropdown-item ">Activar Usuarios</a>
                        <a href="registro_pagos.php" class="dropdown-item ">Registrar Pagos</a>
                        <a href="ver_pagos.php" class="dropdown-item ">Ver Pagos</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Cursos</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="new_curse.php" class="dropdown-item ">Crear Cursos</a>
                        <a href="edit_curse.php" class="dropdown-item">Editar Cursos</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Proyectos</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="new_projec.php" class="dropdown-item ">Crear Proyectos</a>
                        <a href="edit_projec.php" class="dropdown-item">Editar Proyectos</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Empleo</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="nuevo_empleo.php" class="dropdown-item ">Crear Empleo</a>
                        <a href="editar_empleo.php" class="dropdown-item ">Editar Empleo</a>
                        <a href="postulaciones.php" class="dropdown-item ">Postulaciones Empleos</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Reporte</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="reporte_cursos.php" class="dropdown-item ">Pago Cursos</a>
                        <a href="reporte_suscripciones.php" class="dropdown-item ">Pago Suscripciones</a>
                        <a href="#" class="dropdown-item "></a>
                    </div>
                </div>

            </div>
            <a href="../includes/salir.php" class="btn btn-primary px-3 d-none d-lg-block">Cerrar Sesión</a>
    </nav>

    <!-- Navbar End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2"></p>
                <h1 class="display-5 mb-4">BIENVENIDO </h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        
                        <div class="service-img">
                            
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                               
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0"></p>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="../../img/administrador.png" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="../../img/administrador.png" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Administador</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Administrador </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>

        
    


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
    <script src="../../js/jquery.min.js"></script>
</body>

</html>
