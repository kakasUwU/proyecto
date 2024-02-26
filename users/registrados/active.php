
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
else 
{
    $token_tmp = hash_hmac('sha1', $ids, KEY_TOKEN);
    if ($token == $token_tmp) 
    {
        
        $query_usu=$con->prepare ("SELECT * FROM user, tip_user WHERE document = '".$_SESSION['usuario']."' AND user.id_tip_user = tip_user.id_tip_user");
        $query_usu->execute();
        $row_users = $query_usu->fetch(PDO::FETCH_ASSOC);
        $documento = $row_users['document'];
        $hv = $row_users['hv'];
        if($hv == '')
        {
            echo "<script>alert('Por favor suba su Hoja de Vida al sistema e intente nuevamente')</script>";
            echo "<script>window.location='b_empleo.php'</script>";
        }
        $query_pago=$con->prepare ("SELECT * FROM postulaciones WHERE documento = '".$_SESSION['usuario']."' AND id_oferta = '$ids' ");
        $query_pago->execute();
        $row_pago = $query_pago->fetch(PDO::FETCH_ASSOC);
        
        if($row_pago){
            echo "<script>alert('Ya esta postulado a esta vacante')</script>";
            echo "<script>window.location='b_empleo.php'</script>";
        } 
        else{
            

        $query_usuarios=$con->prepare ("SELECT * FROM oferta WHERE id_oferta = $ids ");
        $query_usuarios->execute();
        $row_user = $query_usuarios->fetch(PDO::FETCH_ASSOC);

        
        

        $fecha_pago = date("Y-m-d");

      $sql = $con->prepare("INSERT INTO postulaciones (documento, id_oferta, fecha_post)VALUES (?,?,?)");
      $sql->execute([$documento, $ids, $fecha_pago]);
      $id = $con->lastInsertId();
      echo "<script>alert('Su postulación ha sido enviada al administrador pronto se cumunicarán con usted!!!')</script>";
      echo "<script>window.location='b_empleo.php'</script>";
        }
    }
}
?>