<?php
require 'config/database.php';
require 'config/config.php';
$db = new Database();
$con = $db->conectar();

//destruir la sesion y borrar todo lo que haya en la pagina

//session_destroy();
$por_pagina = 10;
if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];

}
else
{
    $pagina = 1;
}
$empieza = ($pagina - 1) * $por_pagina;
$sql = $con->prepare("SELECT * FROM tipo_usuario LIMIT $empieza, $por_pagina");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Consultoria Arquitectura Friend Constructor</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/LOGO.ico" rel="icon">

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

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr>
        <?php
            foreach($resultado as $row){
                
       
        ?>
        <tr>
            <td><?php echo $row['id_tipo_usu']  ?></td>
            <td><?php echo $row['tipo_usu']  ?></td>
            <td><?php echo $row['id_tipo_usu']  ?></td>
            <td><?php echo $row['tipo_usu']  ?></td>
            <td><?php echo $row['id_tipo_usu']  ?></td>

        </tr>
        <?php } ?>


    </table>
<!--paGINACION-->

            <div>
                <?php  
                    $sql = $con->prepare("SELECT COUNT(*) FROM tipo_usuario ");
                    $sql->execute();
                    $resul = $sql->fetchColumn();
                    $total_paginas = ceil($resul / $por_pagina);
                    echo "<center><a href='pagina.php?pagina=1'>" .'Anterior'. "</a>";
                    for($i=1; $i<=$total_paginas; $i++)
                    {
                        echo "<a href='pagina.php?pagina=".$i."'> ".$i." </a>";
                    }
                    echo "<a href='pagina.php?pagina=$total_paginas'>" .'Siguiente'. "</a></center>";
                
                ?>


            </div>

</body>
</html>