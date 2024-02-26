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

$sql = $con->prepare("SELECT count(id_pago) FROM pago_suscr LEFT OUTER JOIN user ON pago_suscr.documento = user.document WHERE user.activo ='Activo' AND pago_suscr.documento = $documento ");
$sql->execute();
if ($sql->fetchColumn() <= 0) 
{
    echo "<script>alert('SUSCRIPCION VENCIDA, RENUEVE SU PAGO')</script>";
    echo "<script>window.location='pago_suscripcion.php'</script>";
    exit;
    

    } else 
    {

        $sql = $con->prepare("SELECT * FROM pago_suscr LEFT OUTER JOIN user ON pago_suscr.documento = user.document WHERE user.activo ='Activo' AND pago_suscr.documento = $documento ");
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        $fv = strtotime($row['fecha_venc']);
        $fh = strtotime(date("Y-m-d"));
        
        if ($fv < $fh) 
        {
    
            echo "<script>alert('Por favor realizar el login y pagar la suscripción anual')</script>";
            echo "<script>window.location='b_empleo.php'</script>";    
        


    }
}
?>
<?php
$ids = isset($_GET['ids']) ? $_GET['ids'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

if($ids == '' || $token == '')
{
    echo 'Error al procesar la petición';
    exit;
}
else
{

   



    $token_tmp = hash_hmac('sha1', $ids, KEY_TOKEN);
    if($token == $token_tmp)
    {
        $sql = $con->prepare("SELECT count(id_oferta) FROM oferta LEFT OUTER JOIN municipios ON oferta.id_ciu = municipios.id_municipio 
        LEFT OUTER JOIN depar ON municipios.departamento_id = depar.id_depart WHERE oferta.estado_empleo = 'Activo'AND id_oferta=? ORDER BY cargo ");
        
        $sql->execute([$ids]);
        if($sql->fetchColumn() > 0)
        {
            $sql = $con->prepare("SELECT * FROM oferta LEFT OUTER JOIN municipios ON oferta.id_ciu = municipios.id_municipio 
            LEFT OUTER JOIN depar ON municipios.departamento_id = depar.id_depart WHERE oferta.estado_empleo = 'Activo'AND id_oferta=? ORDER BY cargo ");
            $sql->execute([$ids]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            
            $id_oferta = $row['id_oferta'];
            $cod_oferta = $row['cod_oferta'];
            $cargo = $row['cargo'];
            $area = $row['area'];
            $date_publi = $row['date_publi'];
            $id_ciu = $row['id_ciu'];
            $sal_min = $row['sal_min'];
            $sal_max = $row['sal_max'];
            $educacion = $row['educacion'];
            $anio_exper = $row['anio_exper'];
            $competencias = $row['competencias'];
            $mail_empre = $row['mail_empre'];
            $tel_empresa = $row['tel_empresa'];
            $nom_empresa = $row['nom_empresa'];
            $tip_cotra = $row['tip_cotra'];
            $jornada = $row['jornada'];
            $funciones = $row['funciones'];
            $img_empr = $row['img_empr'];
            $estado_empleo = $row['estado_empleo'];
            $municipio = $row['municipio'];
            $depart = $row['depart'];
            $profesion = $row['profesion'];
            
        }
        else
        {
            echo 'Error al procesar la petición';
            exit;
        }
    }
    else
    {
        echo 'Error al procesar la petición';
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Detalle de oferta de empleo, constructor en ibague tolima</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/LOGO.ico" rel="icon">

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
                    <a class="btn btn-link text-light" href="https://api.whatsapp.com/send?phone=3112228877" target="_blank" ><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href="https://www.instagram.com/friendconstructorsas/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
                <span  class="btn btn-link text-light">Bienvenido <?php echo $row_user['names'];?></span>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">  
                    <!-- <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Comunicate:</span>
                    <span class="fs-5 fw-bold">+57 311 2228877</span> -->
                    
           
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
               
    </nav>
    <!-- Navbar End -->


    <!-- Service Start -->
    

    <div class="full-box bg-white">
        <div class="container container-web-page"><br>
            <h3 class="font-weight-bold poppins-regular text-uppercase"><?php echo "Código de Oferta" . " ". $cod_oferta; ?>  </h3>
            <hr>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <figure class="full-box">
                                <img class="img-fluid" src="../../img/proyectos/empleos/<?php echo $img_empr; ?>" alt="imagen">
                                <p class="text text-primary1" style="padding: 40px 0;">
                                
                                <a title="Postular a este cargo" href="active.php?ids=<?php echo $id_oferta ?>&token=<?php echo hash_hmac('sha1', $id_oferta, KEY_TOKEN); ?>" class="fs-5 fw-bold me-2 text-secondary" )" ><i class="btn btn-danger">Postularme</i></a>
                                
                            </figure>
                        </div>
                       
                    <div class="col-16 col-lg-8">
                        <h4 class="font-weight-bold poppins-regular tittle-details"><?php echo "EMPRESA ". $nom_empresa ?> </h4>
                        <div class="container-fluid" style="padding-top: 50px;">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-4">
                                    <strong class="text-uppercase"><i class="fas fa-user-graduate"></i> Cargo </strong> &nbsp: <?php echo $cargo; ?> 
                                </div>
                                <div class="col-12 col-md-6 mb-4"">
                                    <strong class="text-uppercase"><i class="fas fa-calendar"></i> </strong>Área &nbsp: <?php echo $area; ?>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <strong class="text-uppercase"><i class="fas fa-hand-holding-usd"></i> Salario Minimo:</strong> &nbsp: <?php echo $sal_min; ?>
                                </div>
                                <div class="col-12 col-md-6 mb-4"">
                                <strong class="text-uppercase"><i class="fas fa-hand-holding-usd"></i> Salario Máximo:</strong> &nbsp: <?php echo $sal_max; ?>
                                </div>
                                <div class="col-12 col-md-6 mb-4"">
                                    <strong class="text-uppercase"><i class="fas fa-graduation-cap"></i> Años Experiencia:</strong> &nbsp: <?php echo $anio_exper; ?>
                                </div>
                                <div class="col-12 col-md-6 mb-4"">
                                    <strong class="text-uppercase"><i class="fas fa-landmark"></i> Ciudad:</strong> &nbsp: <?php echo $municipio; ?> &nbsp <?php echo $depart; ?>
                                </div>
                                <div class="col-12 col-md-6 mb-4"">
                                    <strong class="text-uppercase"><i class="fas fa-pallet fa-fw"></i> Educación:</strong> &nbsp: <?php echo $educacion; ?>
                                </div>
                                <div class="col-12 col-md-6 mb-4"">
                                    <strong class="text-uppercase"><i class="fas fa-file-alt"></i> Tipo Contrato:</strong> &nbsp: <?php echo $tip_cotra; ?> 
                                </div>
                                
                                <div class="col-12 col-md-6 mb-4">
                                    <strong class="text-uppercase"><i class="fas fa-stopwatch"></i> Jornada </strong> &nbsp: <?php echo $jornada; ?> 
                                </div>
                                <div class="col-12 col-md-6 mb-4"">
                                    <strong class="text-uppercase"><i class="fas fa-envelope-open"></i> </strong> Email Empresa &nbsp: <?php echo $mail_empre; ?>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <strong class="text-uppercase"><i class="fas fa-phone"></i> Tel Empresa:</strong> &nbsp: <?php echo $tel_empresa; ?>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <strong class="text-uppercase"><i class="fas fa-user-graduate"></i> Profesión:</strong> &nbsp: <?php echo $profesion; ?>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <strong class="text-uppercase"><i class="fas fa-id-card"></i> Competencias:</strong> &nbsp: <?php echo $competencias; ?>
                                </div>
                                <div>    
                                    <p class="text-justify lead" style="padding: 40px 0;">
                                    <i class="fas fa-id-card"></i> <span class="lead text-uppercase font-weight-bold">Funciones:</span><br>
                                    <?php echo $funciones ?>
                                </div>
                                
                            </div>
              
                        </div>
                 </div>
                </div>
                <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                    <a href="javascript:history.back(-1);"><h4><strong>REGRESAR</strong></h4></a>
                </div>
            </hr>
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
