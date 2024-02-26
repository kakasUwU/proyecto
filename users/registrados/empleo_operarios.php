
<?php
require '../../config/database.php';
require '../../config/config.php';
include '../includes/validar_sesion.php';
$db = new Database();
$con = $db->conectar();


// $sql = $con->prepare("SELECT * FROM projects, municipios WHERE projects.id_ciu = municipios.id_municipio AND tip_projec = 'Casas'");
// $sql->execute();
// $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);


//destruir la sesion y borrar todo lo que haya en la pagina

//session_destroy();


//codigo php para la paginación
$por_pagina = 9;
if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];

}
else
{
    $pagina = 1;
}
$empieza = ($pagina - 1) * $por_pagina;
$sql1 = $con->prepare("SELECT * FROM oferta LEFT OUTER JOIN municipios ON oferta.id_ciu = municipios.id_municipio LEFT OUTER JOIN depar ON municipios.departamento_id = depar.id_depart WHERE oferta.estado_empleo = 'Activo' AND oferta.cargo = 'Operario' ORDER BY cargo LIMIT $empieza, $por_pagina");
$sql1->execute();
$resultado1 = $sql1->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bolsa de Empleo ibague tolima</title>
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
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="b_empleo.php" class="navbar-brand ps-5 me-0">
        <img src="../../img/logo3.png">

        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
               
                <a href="b_empleo.php" class="nav-item nav-link active">Empleo</a>
                <a href="postulaciones.php" class="nav-item nav-link">Mis Postulaciones</a>
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


    <!-- Page Header Start -->
    <div data-wow-delay="0.1s">

    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
    <div class="container-fluid" style="border-top: 1px solid #E1E1E1; padding: 20px; ">
                <div class="row gy-5 gx-4">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                        
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Fecha </a>
                                <div class="dropdown-menu bg-light m-0">
                                    <a href="empleo_actual.php" class="dropdown-item ">Hoy</a>
                                    <a href="empleo_semana.php" class="dropdown-item">Hace 1 Semana</a>
                                    <a href="empleo_mes.php" class="dropdown-item">Menos de 1 Mes</a>
                                    <a href="emplo_mmes.php" class="dropdown-item">Más 1 Mes</a>
                                    
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="fas fa-user-tie" >&nbsp;</i>Cargo</a>
                                <div class="dropdown-menu bg-light m-0">
                                <a href="empleo_directivo.php" class="dropdown-item ">Gerencia General</a>
                                    <a href="empleo_obra.php" class="dropdown-item">Oficial de Obra</a>
                                    <a href="empleo_ejecucion.php" class="dropdown-item">Direccion de Obra</a>
                                    <a href="empleo_mandos.php" class="dropdown-item ">Publicidad y Ventas</a>
                                    <a href="empleo_mandosad.php" class="dropdown-item ">Ayudante y Obrero</a>
                                    <a href="empleo_operarios.php" class="dropdown-item">Operador de Equipo</a>
                                    <a href="empleo_ventas.php" class="dropdown-item">Técnico en Construcción</a>
                                    <a href="empleo_software.php" class="dropdown-item">Administrativo y Financiero</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Áreas</a>
                                <div class="dropdown-menu bg-light m-0">
                                    <a href="empleo_acueducto.php" class="dropdown-item ">Acueductos</a>
                                    <a href="empleo_alcantarillado.php" class="dropdown-item">Alcantarillados</a>
                                    <a href="empleo_construccion.php" class="dropdown-item">Construcción</a>
                                    <a href="empleo_diseno.php" class="dropdown-item ">Diseño</a>
                                    <a href="empleo_estructura.php" class="dropdown-item">Estucturas</a>
                                    <a href="empleo_gestion.php" class="dropdown-item">Gestión</a>
                                    <a href="empleo_geotecnia.php" class="dropdown-item ">Geotecnia</a>
                                    <a href="empleo_ambiente.php" class="dropdown-item">Medio Ambiente</a>
                                    <a href="empleo_topografia.php" class="dropdown-item">Topografía</a>
                                    <a href="empleo_vias.php" class="dropdown-item">Vías y Transporte</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Experiencia</a>
                                <div class="dropdown-menu bg-light m-0">
                                    <a href="empleo_sexperiencia.php" class="dropdown-item ">Sin Experiencia</a>
                                    <a href="empleo_expu.php" class="dropdown-item">Menos de 1 año</a>
                                    <a href="empleo_expt.php" class="dropdown-item">De 1 a 3 años</a>
                                    <a href="empleo_expc.php" class="dropdown-item">De 3 a 5 años</a>
                                    <a href="empleo_expmc.php" class="dropdown-item">Mas de 5 años</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Tipo Contrato</a>
                                <div class="dropdown-menu bg-light m-0">
                                    <a href="empleo_tfijo.php" class="dropdown-item ">Termino Fijo</a>
                                    <a href="empleo_ti.php" class="dropdown-item">Termino Indefinido</a>
                                    <a href="empleo_pservicio.php" class="dropdown-item">Prestación Servicios</a>
                                    <a href="empleo_lectsena.php" class="dropdown-item ">Etapa Lectiva SENA</a>
                                    <a href="empleo_prodsena.php" class="dropdown-item">Etapa Productiva SENA</a>
                                    <a href="empleo_pracprofes.php" class="dropdown-item">Practica Profesional</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Rango Salarial</a>
                                <div class="dropdown-menu bg-light m-0">
                                    <a href="empleo_rangou.php" class="dropdown-item ">$1M - $3M</a>
                                    <a href="empleo_rangoc.php" class="dropdown-item">$3M - $5M</a>
                                    <a href="empleo_rangomc.php" class="dropdown-item">Mas de $5M</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Estudios Requeridos</a>
                                <div class="dropdown-menu bg-light m-0">
                                    <a href="empleo_sestudio.php" class="dropdown-item ">Sin Estudios</a>
                                    <a href="empleo_tencios.php" class="dropdown-item">Técnico</a>
                                    <a href="empleo_tecnologo.php" class="dropdown-item">Tecnologo</a>
                                    <a href="empleo_profesional.php" class="dropdown-item">Profesional</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="container">


            
            <div class="row gy-5 gx-4">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <?php foreach($resultado1 as $row) {?>             
                        <div class="col">
                            <div class="card shadow-sm">
                                <h5 class="btn btn-secondary">Código Oferta <?php echo $row['cod_oferta'] ?></h5>
                                <?php $id = $row['id_oferta'];?>
                                
                                <img src="../../img/proyectos/empleos/<?php echo $row['img_empr']; ?>" height="210" alt="Imagen Empresa"></img>
                                
                                <div class="card-body">
                                    <h3 class="card-title"><?php echo strtoupper($row['nom_empresa']) ?></h3>
                                    <h5 class="card-title"><i class="fas fa-user-tie"></i> &nbsp;<?php echo $row['profesion'] ?><br></h5>
                                    <i class="fas fa-map-marker-alt"></i> &nbsp;<?php echo ($row['municipio']);?>  <?php echo " --  " ?><?php echo ($row['depart']);?><br>
                                    <?php echo moneda . number_format($row['sal_min']);?> <?php echo " --  " ?><?php echo moneda . number_format($row['sal_max']);?><br>
                                    <?php echo 'Requisitos'. '  '. ($row['anio_exper']);?> años de experiencia <br><br><br>
                                    
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="detail_empleo.php?ids=<?php echo $row['id_oferta']; ?>&token=<?php echo hash_hmac('sha1', $row['id_oferta'], KEY_TOKEN); ?>" class="btn btn-primary" >Ver Empleo</a>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
               <?php } ?>
            </div>    
           </div>
        </div>
    </div><br>

      <!--paGINACION-->
    <br>
      <div>
                <?php  
                    $sql = $con->prepare("SELECT COUNT(*) FROM oferta LEFT OUTER JOIN municipios ON oferta.id_ciu = municipios.id_municipio LEFT OUTER JOIN depar ON municipios.departamento_id = depar.id_depart WHERE oferta.estado_empleo = 'Activo' AND oferta.cargo = 'Operario' ORDER BY cargo");
                    $sql->execute();
                    $resul = $sql->fetchColumn();
                    $total_paginas = ceil($resul / $por_pagina);
                    if ($total_paginas == 0)
                    {
                        echo "<center>".'Lista Vacia'."</center>";
                    } else 
                    {
                        echo "<center><a href='empleo_operarios.php?pagina=1'>" . "<i class='fa fa-arrow-left'></i>" . "</a>";
                        for ($i = 1; $i <= $total_paginas; $i++) 
                        {
                            echo "<a href='empleo_operarios.php?pagina=" . $i . "'> " . $i . " </a>";
                        }
                        echo "<a href='empleo_operarios.php?pagina=$total_paginas'>" . "<i class='fa fa-arrow-right'></i>" . "</a></center>";
                    }
                ?>


            </div>
                   
    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Nuestra oficina</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Ibague Tolima Colombia </p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>311 8830-638</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>friendconstructor@gmail.com</p>
                    <div class="d-flex pt-3">
                        <a target="_blank" class="btn btn-square btn-primary rounded-circle me-2" href="https://www.instagram.com/friendconstructorsas/"><i
                                class="fab fa-instagram"></i></a>
                        <a target="_blank" class="btn btn-square btn-primary rounded-circle me-2" href="https://www.facebook.com/profile.php?id=100088458352909"><i
                                class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle me-2" href="https://api.whatsapp.com/send?phone=3118830638" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Links</h5>
                    <a class="btn btn-link" href="https://www.sena.edu.co/es-co/Paginas/default.aspx" target="_blank">SENA</a>
                    <a class="btn btn-link" href="https://ucc.edu.co/" target="_blank">Universidad Cooperativa</a>
                    <a class="btn btn-link" href="https://ibague.gov.co/portal/index.php#gsc.tab=0" target="_blank">Alcaldia de Ibagué</a>
                    <a class="btn btn-link" href="https://www.tolima.gov.co/" target="_blank">Gobernación de Tolima</a>
                    <a class="btn btn-link" href="https://ibague.gov.co/portal/seccion/contenido/index.php?type=2&cnt=129#gsc.tab=0" target="_blank">Ibagué Vibra</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Hora de trabajo</h5>
                    <p class="mb-1">lunes - viernes</p>
                    <h6 class="text-light">08:00 am - 12:00 m <br>02:00 pm - 06:00 pm</h6>
                    <p class="mb-1">Sabados</p>
                    <h6 class="text-light">08:00 am - 12:00 m</h6>
                    <p class="mb-1">domingo</p>
                    <h6 class="text-light">Cerrado</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Información Legal</h5>
                    <p class="mb-2"><i class="fa fa-file-contract"></i> Términos y condiciones </p>
                    <p class="mb-2"><i class="fa fa-file-archive"></i> Politica de datos</p>
                    <p class="mb-2"><i class="fas fa-copyright"></i> Copyright friendconstructor 2023</p>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center">
            <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="#">Friend Constructora</a>, All Right Reserved.
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
</body>

</html>
