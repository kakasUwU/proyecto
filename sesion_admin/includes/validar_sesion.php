<?php

    
    if (!isset($_SESSION['usuario']) || !isset($_SESSION['tipo'])) {
        

        unset($_SESSION['usuario']);
        unset($_SESSION['tipo']);
        $_SESSION = array();
        session_destroy();
        session_write_close();
        echo "<script>alert('Valide Credenciales')</script>";
        echo "<script>window.location='../login.php'</script>";
        exit;

}   



?>