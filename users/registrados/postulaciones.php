
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

$por_pagina = 7;
if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];

}
else
{
    $pagina = 1;
}
$empieza = ($pagina - 1) * $por_pagina;
$sql1 = $con->prepare("SELECT * FROM postulaciones LEFT OUTER JOIN user ON postulaciones.documento=user.document LEFT OUTER JOIN oferta ON postulaciones.id_oferta = oferta.id_oferta WHERE postulaciones.documento = $documento  ORDER BY postulaciones.fecha_post LIMIT $empieza, $por_pagina");
$sql1->execute();
$resultado1 = $sql1->fetchAll(PDO::FETCH_ASSOC);

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
        <a href="b_empleo.php" class="navbar-brand ps-5 me-0">
        <img src="../../img/logo3.png">
        </a>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Datos</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="datos.php" class="dropdown-item">Mis Datos</a>
                        <a href="hoja_vida.php" class="dropdown-item ">Actualizar Datos</a>
                        
                    </div>
                </div>
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
    </nav>
    <!-- Navbar End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container-fluid" style="border-top: 1px solid #E1E1E1; padding: 20px; ">
            <div class="row gy-5 gx-4">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        
                           
                </div>
            </div>
        </div>
    </div>  

        
    <div class="container">
   
    
        <div class="row">
            <div class="col">
               <strong> Doc</strong>
            </div>    
            <div class="col-2">
                <strong>  Nombres</strong>
            </div>  
            <div class="col">
                <strong>Profesión</strong>
            </div>    
            <div class="col">
                <strong>Estado</strong>
            </div> 
            <div class="col">
                <strong>Oferta</strong>
            </div>    
            <div class="col">
                <strong>Cargo</strong>
            </div> 
             
            <div class="col-3">
                <strong>Nombre Empresa</strong>
            </div> 
            
            
        </div>
        <div class="col">
            <?php foreach ($resultado1 as $row) { ?>
                <div class="card shadow-sm">
                    <div class="row">
                        <div class="col">                    
                            <p style="font-size: 15px">
                                <?php echo $row['document'] ?>
                            </p>
                        </div> 
                        <div class="col-2">
                            <p style="font-size: 15px">
                                <?php echo $row['names'] ?>
                            </p>
                        </div>
                        <div class="col">
                            <p style="font-size: 15px">
                                <?php echo $row['profesion'] ?>
                            </p>
                        </div> 
                        <div class="col">
                            <p style="font-size: 15px">
                                <?php echo $row['activo'] ?>
                            </p>
                        </div>
                        <div class="col">
                            <p style="font-size: 15px">
                                <?php echo $row['cod_oferta'] ?>
                            </p>
                        </div>
                        <div class="col">
                            <p style="font-size: 15px">
                                <?php echo $row['cargo'] ?>
                            </p>
                        </div> 
                        <div class="col-3">
                            <p style="font-size: 15px">
                                <?php echo $row['nom_empresa'] ?>
                            </p>
                        </div>
                        
                </div>
            <?php } ?>
        </div>
    </div>
            
    <br><br>
    
    <div>
                <?php  
                    $sql = $con->prepare("SELECT COUNT(*) FROM postulaciones LEFT OUTER JOIN user ON postulaciones.documento=user.document LEFT OUTER JOIN oferta ON postulaciones.id_oferta = oferta.id_oferta ORDER BY postulaciones.fecha_post");
                    $sql->execute();
                    $resul = $sql->fetchColumn();
                    $total_paginas = ceil($resul / $por_pagina);
                    if ($total_paginas == 0)
                    {
                        echo "<center>".'Lista Vacia'."</center>";
                    } else 
                    {
                        echo "<center><a href='postulaciones.php?pagina=1'>" . "<i class='fa fa-arrow-left'></i>" . "</a>";
                        for ($i = 1; $i <= $total_paginas; $i++) 
                        {
                            echo "<a href='postulaciones.php?pagina=" . $i . "'> " . $i . " </a>";
                        }
                        echo "<a href='postulaciones.php?pagina=$total_paginas'>" . "<i class='fa fa-arrow-right'></i>" . "</a></center>";
                    }
                ?>


            </div><br><br>


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
   
   <script type="text/javascript">
    function alerta(texto) {
       alert(texto);
    }
</script>

</body>

</html>
