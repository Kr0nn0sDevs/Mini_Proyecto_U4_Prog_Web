<?php

date_default_timezone_set('America/Mexico_City');

session_start();

$esIndex = true;
$iniciada = false;

/* Reiniciar sesión */
if(isset($_GET['accion']) && $_GET['accion'] == 'reiniciar')
{
    $_SESSION = [];
    session_destroy();

    session_start();
}

/* Iniciar sesión */
if(isset($_GET['accion']) && $_GET['accion'] == 'iniciar')
{
    $_SESSION['inicio'] = time();
    $iniciada = true;
}

$titulo = "Inicio";

require 'includes/header.php';
require 'includes/menu.php';

?>
