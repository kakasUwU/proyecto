<?php
	require '../../config/database.php';
    require '../../config/config.php';
    include '../includes/validar_sesion.php';
    $db = new Database();
    $con = $db->conectar();


if (isset($_POST['save'])) {
    
    // //Código para mostrar el arreglo que envia el archivo con las imagenes o el pdf
    
    // echo '<pre>';
    // print_r($_FILES);
    // echo '</pre>';
    

    if (empty($_POST['nom_cur']) || empty($_POST['id_mod']) || empty($_POST['intens_cur']) || empty($_POST['id_area_esp']) || empty($_POST['fecha_i_cur']) || empty($_POST['fecha_f_cur']) || empty($_POST['prec_cur'])
     || empty($_POST['cup_cur']) || empty($_POST['desc_cur'])) {

		echo"<script>alert('Existen Datos vacios.')</script>";
		echo"<script>window.location='new_curse.php'</script>";
	} else {
            $nom_cur        = $_POST['nom_cur'];
            $id_mod         = $_POST['id_mod'];
            $intens_cur     = $_POST['intens_cur'];
            $id_area_esp    = $_POST['id_area_esp'];
            $fecha_i_cur    = $_POST['fecha_i_cur'];
            $fecha_f_cur    = $_POST['fecha_f_cur'];
            $prec_cur       = $_POST['prec_cur'];
            $cup_cur        = $_POST['cup_cur'];
            $desc_cur       = $_POST['desc_cur'];
            $certi          = $_POST['certi'];
            
           

        //     $sql1= "SELECT * FROM clientes WHERE id_client = :id";
        //     $resultado1= $bd->prepare($sql1);
        //     $resultado1->execute(array(":id"=>$id));
        //     $consulta=$resultado1->fetch(PDO::FETCH_ASSOC);
        // if ($consulta['id_client'] == $id) {
        //     echo "<script>alert('Ya existe este cliente.')</script>";
        //     echo "<script>window.location='panelC.php'</script>";
        
                //subir la foto
                $rutaEnServidor='../../img/proyectos/curse';
                $rutaTemporal=$_FILES['imagen']['tmp_name'];
                $nombreImagen=$_FILES['imagen']['name'];
                $rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
                move_uploaded_file($rutaTemporal,$rutaDestino);

                 //subir el brochure
                 $rutaEnServidorB='../../img/proyectos/brochure';
                 $rutaTemporaB=$_FILES['brochure']['tmp_name'];
                 $nombreImagenB=$_FILES['brochure']['name'];
                 $rutaDestinoB=$rutaEnServidorB.'/'.$nombreImagenB;
                 move_uploaded_file($rutaTemporaB,$rutaDestinoB);
                 
               
            $insert = $con->prepare( "INSERT INTO curso(nom_cur, imag_cur,  fecha_i_cur, fecha_f_cur, intens_cur, id_mod, id_area_esp, prec_cur, cup_cur, certi, desc_cur, brochur)
             values (?,?,?,?,?,?,?,?,?,?,?,?)");
            $insert->execute([$nom_cur, $nombreImagen, $fecha_i_cur, $fecha_f_cur, $intens_cur, $id_mod, $id_area_esp, $prec_cur, $cup_cur, $certi, $desc_cur, $nombreImagenB]);       
            $id = $con->lastInsertId();
            echo"<script>alert('Se agrego correctamente')</script>";
            echo"<script>window.location='new_curse.php'</script>";
        }
    
	}

?>