
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
    <title>Consultoria Arquitectura </title>
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
    <script src="https://www.paypal.com/sdk/js?client-id=<?php echo CLIENTE_ID?>"></script>
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
                    <a class="btn btn-link text-light" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href="#" target="_blank" ><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-link text-light" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <!-- <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Comunicate:</span>
                    <span class="fs-5 fw-bold">311 8830 638</span> -->
                    
            
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


    <!-- Page Header Start -->
    


    <!-- Service Start -->
    

    <main>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4>QR PARA PAGO DE SUSCRIPCION</h4>
                    <!-- <div id="paypal-button-container"></div> --><br>
                    <div>
                        <img src="../../img/CODIGOSQR/SUSCRIPCION/QRDigital.png" height="245">
                    </div>
                </div>
               
            <div class="col-6">
            <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Valor</th>
                                <th>Detalle</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                                           $documento;
                                                           $detalle = "Pago Suscripcion Servicio Bolsa Empleo anual";
                                                           $precio = 39999;
                                                           $fecha_pago = date("Y-m-d");
                                                           $fa =date(strtotime("Y-m-d"));
                                                           $fecha_venc =date(strtotime("Y-m-d",strtotime ($fa."+ 1 year")));
                                
                            ?>
                                        <tr>
                                        <td><?php echo moneda . number_format($precio, 2, '.', ',' );  ?></td>
                                        <td><?php echo $detalle ?></td>
                                        
                                            
                                        </tr>
                                   
                                    <tr>
                                      
                                        <td colspan="2">
                                            <p class="h3 text-end" id="total"><?php echo moneda . number_format($precio, 2, '.', ',' ); ?></p>
                                        </td>

                                    </tr>
                                    <div>
                                        <p><strong>Es necesario que envie comprobante de pago al correo electrónico: expertobrapagos@gmail.com y que su referencia sea exacta al del pago realizado.</p>
                                        <br>
                                    </div>
                        </tbody>
                       
                </table>
           </div>
          
        </div>
        </div>
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                    <a href="javascript:history.back(-1);"><h4><strong>REGRESAR</strong></h4></a>
                </div>
    </main>


      <!-- Footer Start -->
      <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center">
            <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="#">Experobra S.A.S</a>, All Right Reserved.
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

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    
    <!-- Script paypal-->

    <script>
    paypal.Buttons({
        style:{
            color: 'blue',
            shape: 'pill',
            label: 'pay'
        },
      
      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: <?php echo $precio;?> // valor a pagar de la compra
            }
          }]
        });
      },
      onApprove: function(data, actions){
        
        actions.order.capture().then(function(detalles){
         console.log(detalles) 
          const transaction = detalles.purchase_units[0].payments.captures[0];
          const trans = detalles.purchase_units[0].shipping.name;
          const tran  = detalles.purchase_units[0].payee ; 
          alert(`Transacción Exitosa !!Conserve estos datos, el administrador los solicitará, ${transaction.status}: ${transaction.id} : ${transaction.amount.value} \n\n`);
          window.location.replace("b_empleo.php");
          let url = '../../clases/captura_suscrip.php'
         return fetch(url, {
            method: 'post',
            headers: {
                'content-type': 'application/json'
            },
            body: JSON.stringify({
                detalles: detalles
            })
            
         })

         
         
        });
      },
      onCancel: function(data){
        alert("Pago Cancelado")
        console.log(data);
      }
    }).render('#paypal-button-container');
  </script>
</body>

</html>
