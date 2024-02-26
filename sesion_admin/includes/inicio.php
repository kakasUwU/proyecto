<?php 
require '../../config/database.php';
require '../../config/config.php';
$db = new Database();
$con = $db->conectar();

if($_POST["inicio"])
{
    
    $usuario = $_POST["usuario"];
	$clave = $_POST["clave"];
    if ($usuario == "" || $clave == "")
    {
        echo"<script>alert('Ingrese usuario y Contraseña Validos')</script>";
	    echo"<script>window.location='../login.php'</script>";
    }
    else
    {
        $sql = $con->prepare("SELECT * FROM user LEFT OUTER JOIN tip_user ON user.id_tip_user = tip_user.id_tip_user WHERE user.document = $usuario AND user.contra = $clave AND user.activo = 'Activo' AND user.id_tip_user = 1 ");
        $sql->execute();
        $fila = $sql->fetch();
        
        if ($fila) {
            $_SESSION['usuario'] = $fila['document'];
            $_SESSION['tipo'] = $fila['id_tip_user'];
            $_SESSION['estado'] = $fila['activo'];
            if ($_SESSION['tipo'] == 1) {
                header("Location: ../projects/index.php");
                exit();
            }
        }
        else
        {
            echo"<script>alert('Credenciales invalidas o usuario inactivo.')</script>";
            echo"<script>window.location='../login.php'</script>";
            exit();
        }
}
}	
?>