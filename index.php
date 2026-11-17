<?php
// Zona horaria México
date_default_timezone_set('America/Mexico_City');

// Al cargar index se destruye cualquier sesión previa para poder iniciar de nuevo.
session_start();
$_SESSION = [];
session_destroy();

$esIndex  = true;
$iniciada = false;

if (isset($_GET['accion']) && $_GET['accion'] === 'iniciar') {
    session_start();
    $_SESSION['inicio'] = time();   // guarda la hora de inicio con time()
    $iniciada = true;
}

$titulo = "Inicio";
require 'includes/header.php';
require 'includes/menu.php';
?>
<section class="tarjeta">
  <h2>Bienvenido al Proyecto PHP</h2>
  <?php if ($iniciada): ?>
    <p>✅ Sesión iniciada correctamente. Se guardó la hora de inicio con
    <code>time()</code> en <code>$_SESSION['inicio']</code>.</p>
    <p>Navega por el sitio usando el menú superior. Para demostrar
    <code>session_destroy()</code> usa <strong>Reiniciar sesión</strong> en el menú.</p>
  <?php else: ?>
    <p>Al cargar esta página cualquier sesión previa se destruye con
    <code>session_destroy()</code>. Haz clic para iniciar una nueva sesión.</p>
    <p><a class="boton" href="index.php?accion=iniciar">▶ INICIAR SESIÓN</a></p>
  <?php endif; ?>
</section>
<?php require 'includes/footer.php'; ?>
