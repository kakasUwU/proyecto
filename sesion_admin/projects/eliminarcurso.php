<?php
	require '../../config/database.php';
    require '../../config/config.php';
    include '../includes/validar_sesion.php';
    $db = new Database();
    $con = $db->conectar();

    $ids = isset($_GET['ids']) ? $_GET['ids'] : '';
    $token = isset($_GET['token']) ? $_GET['token'] : '';
    if($ids == '' || $token == '')
    {
        echo 'Error al procesar la petición';
        exit;
    }
    else{
      
    $delete = $con->prepare( "DELETE FROM curso WHERE id_cur = '$ids'");       
    $delete->execute();        
            echo"<script>alert('Se elimino correctamente el Curso')</script>";
            echo"<script>window.location='edit_curse.php'</script>";
        }
        
    
	

?>