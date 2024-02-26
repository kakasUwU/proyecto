<?php
require '../config/config.php';
if (isset($_POST['ids'])) {
    $id = $_POST['ids'];
    $token = $_POST['token'];
    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);
    if ($token == $token_tmp) {
        if (isset($_SESSION['carrito']['productos'][$id])) {
            //recibe las cantidad que va a comprar
            $_SESSION['carrito']['productos'][$id] += 1;
        } else {
            $_SESSION['carrito']['productos'][$id] = 1;
        }
        $datos['numero'] = count($_SESSION['carrito']['productos']);
        $datos['ok'] = true;
    } else {
        $datos['ok'] = false;
    }
    echo json_encode($datos);
}
?>