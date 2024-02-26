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
        echo"<script>alert('Datos Vacios')</script>";
	    echo"<script>window.location='../login.php'</script>";
    }
    else
    {
        $sql = $con->prepare("SELECT * FROM tm_usuario LEFT OUTER JOIN tr_tipo_usuario ON tm_usuario.ID_tip_usu = tr_tipo_usuario.ID_tip_usu WHERE tm_usuario.cc_usu = $usuario AND tm_usuario.contraseña_usu = '$clave' ");
        $sql->execute();
        $fila = $sql->fetch();
        
        if ($fila) {
            $_SESSION['usuario'] = $fila['cc_usu'];
            $_SESSION['tipo'] = $fila['ID_tip_usu'];
            $_SESSION['estado'] = $fila['activo'];
            if ($_SESSION['tipo'] == 2) {
                header("Location: ../registrados/b_empleo.php");
                exit();
            }
            if ($_SESSION['tipo'] == 1) {
                header("Location: ../../sesion_admin/projects/index.php");
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