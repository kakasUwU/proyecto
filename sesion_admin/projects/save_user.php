<?php
	require '../config/database.php';
    require '../config/config.php';
    include '../includes/validar_sesion.php';
    $db = new Database();
    $con = $db->conectar();


if (isset($_POST['save'])) 
{
    if (empty($_POST['document']) || empty($_POST['names']) || empty($_POST['phone']) || empty($_POST['profesion']) 
    || empty($_POST['email']) || empty($_POST['desc_perfil'])) 
    {

		echo"<script>alert('Existen Datos vacios.')</script>";
		echo"<script>window.location='registrar_usuario.php'</script>";
	} 
        $document       = $_POST['document'];
        $names          = $_POST['names'];
        $phone          = $_POST['phone'];
        $email          = $_POST['email'];
        $profesion      = $_POST['profesion'];
        $desc_perfil    = $_POST['desc_perfil'];
    
        $sql = $con->prepare("SELECT * FROM user WHERE document = $document");
        $sql->execute();
        $resul = $sql->fetch(PDO::FETCH_ASSOC);
          
        if ($resul['document'] == $document) 
        {
             echo "<script>alert('Ya existe este usuario.')</script>";
             echo "<script>window.location='registrar_usuario.php'</script>";
        }
        else
        {
            $id_user = 2;
            $rutaEnServidor='../img/proyectos/user';
            $rutaTemporal=$_FILES['imagen']['tmp_name'];
            $nombreImagen=$_FILES['imagen']['name'];
            $rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
            move_uploaded_file($rutaTemporal,$rutaDestino);
   
            $insert = $con->prepare( "INSERT INTO user(document, names, phone,  email, image, id_tip_user, profesion, desc_perfil)
             values (?,?,?,?,?,?,?,?)");
            $insert->execute([$document,  $names, $phone, $email, $nombreImagen, $id_user, $profesion, $desc_perfil]);       
            $id = $con->lastInsertId();
            echo"<script>alert('Se agrego correctamente')</script>";
            echo"<script>window.location='registrar_usuario.php'</script>";
        }
    
	}
?>