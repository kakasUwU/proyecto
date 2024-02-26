<?php
session_start();
define("KEY_TOKEN", "ABCsasd-/1*Q2");
define('moneda', '$');
define('dolar', 'US');
define("CLIENTE_ID", "ATYN3Oz5lkvdlR1XWJY7WAJgbtoIuTLitGeWJhtUbYp3cnJ2_SHBFpC6dedyvCr5HmdNULYUKxiqs94q");
define("CURRENCY", "USD");

// clave pruebas : AQETqdEpJTjSPEBu4xxNX6b36X29AU90wC9tGkj2t32LRfs58CPqusmkdPLFN_KvWjiioyRUuLi-QrJD

$num_cart = 0;
if(isset($_SESSION['carrito']['productos'])){
    $num_cart = count($_SESSION['carrito']['productos']);
}






?>