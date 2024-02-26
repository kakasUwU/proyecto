<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Clinica Veterinaria Del Norte</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/coco.jpg.jpg" rel="icon">

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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!--topbar start-->
    <?php include("topbar.php"); ?>
    <!--topbar end-->

    <!-- Navbar Start -->
    <?php include ("nav.php");?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    
            
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/da.jpg" class="d-block w-100" alt="Image">
            <div class="carousel-caption d-none d-md-block">
                
                <h5>Clinica veterinaria del norte</h5>
                <p>Porque cada pata merece cuidados excepcionales.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/ni.jpg" class="d-block w-100" alt="image">
            <div class="carousel-caption d-none d-md-block">
                <h5>Clinica veterinaria del norte</h5>
                <p>Porque cada pata merece cuidados excepcionales.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/lo.jpg" class="d-block w-100" alt="image">
            <div class="carousel-caption d-none d-md-block">
                <h5>Clinica veterinaria del norte</h5>
                <p>Porque cada pata merece cuidados excepcionales.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/50 Cats Acting So Cute, People Just Had To Stop And Snap A Picture.jpg">
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/Los nombres de mascotas más populares.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Sobre nosotros</p>
                    <!-- <h1 class="display-5 mb-4">Expertobra S.A.S </h1> -->
                    <img src="img/coco.jpg.jpg" width="420">
                    <p class="mb-4" align="justify">

                        En la Clínica Veterinaria del Norte, nos dedicamos a proporcionar atención veterinaria de calidad y compasiva para sus mascotas. Con un equipo de profesionales apasionados, ofrecemos una amplia gama de servicios que van desde exámenes preventivos hasta cirugía especializada. Nuestra misión es promover la salud y el bienestar animal, brindando atención personalizada y de confianza a cada paciente que atendemos. Confíe en nosotros para cuidar a su amigo peludo como si fuera parte de nuestra propia familia. ¡Bienvenido a nuestro hogar veterinario!</p>
                    <div class="d-flex align-items-center mb-4">
                        
                        <!--<div class="flex-shrink-0 bg-primary p-4">
                            <h1 class="display-2"> 2 años</h1>
                            <h5 class="text-white">de experiencia</h5>
                            <h5 class="text-white">Experience</h5>
                        </div>
                        <div class="ms-4">
                            <p><i class="fa fa-check text-primary me-2"></i>TOPOGRAFIA</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Ingenieria civil</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Derecho Inmobiliario</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Arquitectura</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-2"></i>Consultorias</p>
                        </div>-->
                    </div>
                    
                    <div class="row pt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0">324 6767435</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md" id="email">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-envelope-open text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0">clinicaveterinariadelnorte1@gmail.com</h5>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    


    <!-- Features Start
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="img/feature.jpg" alt="">
                        <span
                            class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block"
                            style="width: 120px; height: 120px;"></span>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Proyectos</p>
                    <h1 class="display-5 mb-4"></h1>
                    <p class="mb-4">servicios 24/7
                    </p>
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>videos instructivo</h4>
                                    <span>Disponibles en nuestra tienda online.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>cursos</h4>
                                    <span>•	NOMBRE DE CURSO
•	FECHA DE PUBLICACION
•	FECHA TERMINACION
•	INTENSIDAD HORARIA
•	MODALIDAD (PRESENCIAL, VIRTUAL)
•	AREA ESPECIALIZADA
•	PRECIOS DESDE
•	CUPOS
</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>bolsa de empleo</h4>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Features End-->


    <!-- Video Modal Start -->
   <!-- <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    16:9 aspect ratio 
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Video Modal End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2"></p>
                <h1 class="display-5 mb-4">Ofrecemos estos servicios: </h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/spa.jpg" alt="" id="servicios">
                        <div class="service-img">
                            <img class="img-fluid" src="img/spa.jpg" alt="" id="servicios2">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Corte de uñas</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">siempre cuida a tu mascota</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="c_topografia.html">Ver mas</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/baño.jpg" alt="" id="servicios">
                        <div class="service-img">
                            <img class="img-fluid" src="img/baño.jpg" alt="" id="servicios2">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Baños medicados </h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Cuidado de su pelo en nuestras manos</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="c_ingenieria.html">Ver mas</a>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/cepillado.jpg" alt="" id="servicios">
                        <div class="service-img">
                            <img class="img-fluid" src="img/cepillado.jpg" alt="" id="servicios2">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Cepillado de dientes </h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Su salud, lo más importante</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="c_arquitectura.html">Ver mas</a>
                    </div>
                </div>





                <!--
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/medi.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/medi.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Cepillado de dientes </h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Su salud, lo más importante </p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="c_arquitectura.html">Ver mas</a>
                    </div>
                    
                -->
                </div>
            </div>
        </div>
   
    </div>

    <!-- Service End -->


    


   
    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2"></p>
                <h1 class="display-5 mb-5">Pauta con Nosotros</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <!--<div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-2.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>-->
                    <div class="testimonial-text text-center rounded p-4">
                        <img src="img/pau1.jpg">
                       
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <!--<div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-2.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>-->
                    <div class="testimonial-text text-center rounded p-4">
                        <img src="img/pau2.jpg">
                       
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <!--<div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-2.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>-->
                    <div class="testimonial-text text-center rounded p-4">
                        <img src="img/pau3r.jpg">
                       
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <!--<div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-2.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>-->
                    <div class="testimonial-text text-center rounded p-4">
                        <img src="img/pau4.jpg">
                       
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <!--<div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-2.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>-->
                    <div class="testimonial-text text-center rounded p-4">
                        <img src="img/pau5.jpg">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <p class="fw-medium text-uppercase text-primary mb-2"></p>
        <h1 class="display-5 mb-5">Nuestros asociados</h1>
    </div>
    <div class="mio">         
        <img src="img/asociado.jpg" alt="Logo de Central de Urgencias Veterinarias">
    </div>
    <div style="margin-top: 20px;"></div> <!-- Espacio entre el logo y los íconos -->
    
    <div class="redes-sociales text-center" style="font-size: 24px;">
        <a href="https://www.facebook.com/CentraldeUrgenciasVeterinariasIbague/?locale=es_LA" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://youtube.com/channel/UCF1hgth7MeY4H0pBJmp1v6A" target="_blank"><i class="fab fa-youtube"></i></a>
        <a href="mailto:Cuv.2009@hotmail.com"><i class="fas fa-envelope"></i></a>
    </div>
    


   <!-- Footer Start -->
 <?php  include("footer.php"); ?>
<!-- Footer End -->

<!-- Copyright Start -->
<?php  include("copyright.php"); ?>

<!-- Copyright End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
