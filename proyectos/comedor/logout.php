<?php
    session_start(); //mantiene activa la sesion
    session_destroy(); //destruye la sesion iniciada
    header('Location: login.php '); //posicionamos la cabecera
    exit(0); //salida
?>