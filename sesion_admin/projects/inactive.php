
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
} else {
    $token_tmp = hash_hmac('sha1', $ids, KEY_TOKEN);
    if ($token == $token_tmp) 
    {
        $activo = 'Inactivo';
        $insert = $con->prepare("UPDATE user SET activo=? WHERE document = $ids");
        $insert->execute([$activo]);

        echo "<script>alert('USUARIO INACTIVO YA NO TENDRA ACCESO AL SISTEMA')</script>";
        echo "<script>window.location='activar_usuarios.php'</script>";
    }
}
?>