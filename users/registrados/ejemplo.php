<?php
require '../../config/database.php';
require '../../config/config.php';
$db = new Database();
$con = $db->conectar();
$sql = $con->prepare("SELECT * FROM pago_suscr LEFT OUTER JOIN user ON pago_suscr.documento = user.document WHERE user.activo ='Activo' AND pago_suscr.documento = 40326150 ");
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        // echo $row['fecha_venc'] .'-';
        $fv = strtotime($row['fecha_venc']);
        // echo $fv .'-';
        $fd=$fv-600000;
        // echo $fd .'-';
        $ff = date("Y-m-d", $fd);
        //$fh = strtotime(date("Y-m-d"));
        // echo $ff;
        //echo $fh;
        //if ($fv < $fh) 
        //{
    
        //echo "<script>alert('Por favor realizar el login y pagar la suscripción anual')</script>";
        //     }
        $fh = date("Y-m-d");
        echo $fh .'-';
        $ahora= strtotime(date("Y-m-d"));
        // echo $ahora .'-';
        $nueva = $ahora-2650000;
        // echo $nueva .'-';
        $nueva = date("Y-m-d",$nueva);
        echo $nueva;
        if ($nueva < $ff){
                echo $nueva;
        }
        else{
                echo $ff;
        }
    ?>