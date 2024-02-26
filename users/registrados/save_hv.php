<?php
	require '../../config/database.php';
    require '../../config/config.php';
    include '../includes/validar_sesion.php';
    $db = new Database();
    $con = $db->conectar();
    

if (isset($_POST['save'])) 
{
    if (empty($_POST['document']) || empty($_POST['names']) || empty($_POST['phone']) || empty($_POST['profesion']) 
    || empty($_POST['email']) || empty($_POST['desc_perfil']) ) 
    {

		echo"<script>alert('Existen Datos vacios.')</script>";
		echo"<script>window.location='hoja_vida.php'</script>";
	} 
        
        $phone          = $_POST['phone'];
        $email          = $_POST['email'];
        $profesion      = $_POST['profesion'];
        $desc_perfil    = $_POST['desc_perfil'];
        
       
            $rutaEnServidor='../../img/proyectos/user';
            $rutaTemporal=$_FILES['imagen']['tmp_name'];
            $nombreImagen=$_FILES['imagen']['name'];
            $rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
            move_uploaded_file($rutaTemporal,$rutaDestino);

             //subir la hv
             $rutaEnServidorB='../hv/';
             $rutaTemporaB=$_FILES['hv']['tmp_name'];
             $nombreImagenB=$_FILES['hv']['name'];
             $rutaDestinoB=$rutaEnServidorB.'/'.$nombreImagenB;
             move_uploaded_file($rutaTemporaB,$rutaDestinoB);
   
             $insert = $con->prepare( "UPDATE user SET phone=?, email=?, image=?, profesion=?, desc_perfil=?, hv=? WHERE document = '".$_SESSION['usuario']."'");
             $insert->execute([$phone, $email, $nombreImagen, $profesion, $desc_perfil, $nombreImagenB]);       
             
            echo"<script>alert('Actualización de Datos y Cargue de Hoja de Vida Correcto')</script>";
            echo"<script>window.location='b_empleo.php'</script>";
        
    
	}
?>