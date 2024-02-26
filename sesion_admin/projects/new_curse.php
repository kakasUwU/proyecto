<?php
require '../../config/database.php';
require '../../config/config.php';
include '../includes/validar_sesion.php';
$db = new Database();
$con = $db->conectar();

?>


<head>
    <meta charset="utf-8">
    <title>Crear Curso</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../../img/LOGO.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">

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
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Cursos</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="new_curse.php" class="dropdown-item active">Crear Cursos</a>
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
                    <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Empleo</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="nuevo_empleo.php" class="dropdown-item ">Crear Empleo</a>
                        <a href="editar_empleo.php" class="dropdown-item ">Editar Empleo</a>
                        <a href="postulaciones.php" class="dropdown-item ">Postulaciones Empleos</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Reporte</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="reporte_cursos.php" class="dropdown-item ">Pago Cursos</a>
                        <a href="reporte_suscripciones.php" class="dropdown-item  ">Pago Suscripciones</a>
                        <a href="#" class="dropdown-item "></a>
                    </div>
                </div>
            </div>
            <a href="../includes/salir.php" class="btn btn-primary px-3 d-none d-lg-block">Cerrar Sesión</a>
    </nav>
    <!-- Navbar End -->

    <body>

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container-fluid" style="border-top: 1px solid #E1E1E1; padding: 20px; ">
                <div class="row gy-5 gx-4">

                </div>
            </div>
        </div>
        <div class="container">

            <form class="dashboard-container FormularioAjax" method="POST" data-form="save" data-lang="es" autocomplete="off" action="save_curse.php" enctype="multipart/form-data">
                <input type="hidden" name="modulo_producto" value="registro">
                <fieldset class="mb-4">
                    <legend><i class="fas fa-box"></i> &nbsp; Información del Curso</legend>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-outline mb-4">
                                    <label for="nom_cur" class="nav-link"><strong>Nombre del Curso</strong></label>
                                    <input type="text" onkeyup="mayus(this);" value="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().!#$%&’*+/=?^_`{|}~-].,\s ]{4,520}" class="form-control" name="nom_cur" id="nom_cur" maxlength="90" placeholder="Obligatorio" text-transform="capitalize" required>

                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="mb-4">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="col-12 col-md-6">
                                    <div class="form-outline mb-4">
                                        <div class="mb-4">
                                        <label for="id_mod" class="nav-link"><strong>Modalidad</strong></label>
                                            <select class="form-control" name="id_mod" id="id_mod">
                                                <option value="" selected="">** Seleccione Modalidad **</option>
                                                <?php
                                                /*Consulta para mostrar las opciones en el select */
                                                $statement = $con->prepare('SELECT * from modalidad order by modalidad');
                                                $statement->execute();
                                                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                                                    echo "<option value=" . $row['id_mod'] . ">" . $row['modalidad'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="mb-4">
                                            <label for="intens_cur" class="nav-link"><strong>Intensidad Horaria </strong></label>
                                            <input type="text" pattern="[0-9]{2,3}" class="form-control" name="intens_cur" id="intens_cur" maxlength="3" placeholder="Obligatorio" required>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 col-md-6">
                                <div class="form-outline mb-4">
                                    <div class="mb-4">
                                        <label for="ide_area_esp" class="nav-link"><strong>Área</strong></label>
                                        <select class="form-control" name="id_area_esp" id="id_area_esp" required>
                                            <option value="" selected="">** Seleccione Área **</option>
                                            <?php
                                            /*Consulta para mostrar las opciones en el select */
                                            $statement = $con->prepare('SELECT * from area_esp order by area_esp');
                                            $statement->execute();
                                            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                                                echo "<option value=" . $row['id_area_esp'] . ">" . $row['area_esp'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                    <label for="certi" class="nav-link"><strong>Certificado</strong></label>
                                        <select class="form-control" name="certi" id="certi" required>
                                            <option value="" selected="">** Seleccione Certificación **</option>
                                            <option value="Certificado">Certificado</option>
                                            <option value="No Certificado" >No Certificado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-outline mb-4">
                                    <label for="fecha_i_cur" class="nav-link"><strong>Fecha de Inicio </strong></label>
                                    <input type="date" value="<?php $hoy = date("Y-m-d");
                                                                echo $hoy; ?>" class="form-control" name="fecha_i_cur" id="fecha_i_cur" placeholder="Obligatorio" required>

                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-outline mb-4">
                                    <label for="fecha_f_cur" class="nav-link"><strong>Fecha Terminación </strong></label>
                                    <input type="date" value="<?php $hoy = date("Y-m-d");
                                                                echo $hoy; ?>" class="form-control" name="fecha_f_cur" id="fecha_f_cur" placeholder="Obligatorio" required>

                                </div>
                            </div>


                        </div>

                </fieldset>
                <fieldset class="mb-4">
                    <legend><i class="fas fa-parachute-box"></i> &nbsp; Precios y Cupos del Curso</legend>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="mb-4">
                                    <label for="prec_cur" class="nav-link"><strong>Precio Curso $ </strong></label>
                                    <input type="text" pattern="[0-9]{5,10}" class="form-control" name="prec_cur" id="prec_cur" maxlength="7" placeholder="Obligatorio" required>

                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-4">
                                    <label for="cup_cur" class="nav-link"><strong>Cupos </strong></label>
                                    <input type="text" pattern="[0-9]{1,4}" class="form-control" name="cup_cur" id="cup_cur" maxlength="3" placeholder="Obligatorio" required>

                                </div>
                            </div>
                </fieldset>
                <fieldset class="mb-4">
                    <legend><i class="far fa-comment-dots"></i> &nbsp; Descripción del Curso </legend>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-outline mb-4">
                                    <textarea pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\s ]{30,920}" class="form-control" name="desc_cur" id="desc_cur" maxlength="920" rows="5" placeholder="Indique los días que se tomara el curso" required></textarea>

                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>


                <fieldset class="mb-4">
                    <legend><i class="fas fa-parachute-box"></i> &nbsp; Documentos del Curso</legend>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="mb-4">
                                <label for="imag_cur" class="nav-link"><strong>Imagen Curso </strong></label>
                                <label for="imag_cur" class="form-label">Imagen Curso. Archivos Tipo Jpg, png.</label>
                                <input class="form-control form-control-sm" id="imag_cur" name="imagen" type="file" required />

                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-4">
                                <label for="brochure" class="nav-link"><strong>Contenido Curso </strong></label>
                                <label for="brochure" class="form-label">Tipos de archivos permitidos: Solo PDF</label>
                            <input class="form-control form-control-sm" id="brochure" name="brochure" type="file" required />
                                </div>
                            </div>
                </fieldset>





                <p class="text-center" style="margin-top: 40px;">
                    <button type="submit" class="btn btn-primary" name="save"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                </p>
                <p class="text-center">
                    <small>Los campos marcados con * son obligatorios</small>
                </p>
            </form>
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
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


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
        <script>
        function mayus(e) {
        e.value = e.value.toUpperCase();
        }

        function minus(e) {
        e.value = e.value.toLowerCase();
        }
    </script>
    </body>

    </html>