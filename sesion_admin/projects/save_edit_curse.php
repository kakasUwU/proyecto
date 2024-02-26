<?php
	require '../../config/database.php';
    require '../../config/config.php';
    include '../includes/validar_sesion.php';
    $db = new Database();
    $con = $db->conectar();


    if (isset($_POST['save']))
     {
            $id_cur         = $_POST['id_cur'];
            $nom_cur        = $_POST['nom_cur'];
            $id_mod         = $_POST['id_mod'];
            $intens_cur     = $_POST['intens_cur'];
            $id_area_esp    = $_POST['id_area_esp'];
            $fecha_i_cur    = $_POST['fecha_i_cur'];
            $fecha_f_cur    = $_POST['fecha_f_cur'];
            $prec_cur       = $_POST['prec_cur'];
            $cup_cur        = $_POST['cup_cur'];
            $desc_cur       = $_POST['desc_cur'];
            $imag_cur       = $_POST['imag_cur'];
            $certi          = $_POST['certi'];
            $brochure       = $_POST['brochure'];
           
                $rutaEnServidor='../../img/proyectos/curse';
                $rutaTemporal=$_FILES['imagen']['tmp_name'];
                $nombreImagen=$_FILES['imagen']['name'];
                $rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
                move_uploaded_file($rutaTemporal,$rutaDestino);

    
            $rutaEnServidorB='../../img/proyectos/brochure';
            $rutaTemporaB=$_FILES['brochure']['tmp_name'];
            $nombreImagenB=$_FILES['brochure']['name'];
            $rutaDestinoB=$rutaEnServidorB.'/'.$nombreImagenB;
            move_uploaded_file($rutaTemporaB,$rutaDestinoB);

            $insert = $con->prepare( "UPDATE curso SET nom_cur=?, imag_cur=?, fecha_i_cur=?, fecha_f_cur=?, intens_cur=?, id_mod=?, 
            id_area_esp=?, prec_cur=?, cup_cur=?,certi=?, desc_cur=?, brochur=? WHERE id_cur = $id_cur");
            $insert->execute([$nom_cur, $nombreImagen, $fecha_i_cur, $fecha_f_cur, $intens_cur, $id_mod, $id_area_esp, $prec_cur, $cup_cur, $certi, 
            $desc_cur, $nombreImagenB]);       
            
            echo"<script>alert('Se edito correctamente el Curso')</script>";
            echo"<script>window.location='edit_curse.php'</script>";
        
     }
	

?>