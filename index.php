<?php
// Si existe una sesión se destruye para poder iniciar de nuevo.
session_start();
$_SESSION = [];
session_destroy();

$esIndex = true;
$iniciada = false;
if (isset($_GET['accion']) && $_GET['accion'] === 'iniciar') {
    session_start();                 // nueva sesión
    $_SESSION['inicio'] = time();    // guarda la hora de inicio
    $_SESSION['visitas'] = 0;
    $iniciada = true;
}
$titulo = "Inicio";
require 'includes/header.php';
echo '<nav class="menu"><a href="index.php">Inicio</a></nav><main class="contenido">';
if ($iniciada) {
    echo '<section class="tarjeta"><h2>Sesión iniciada</h2>
    <p>Se guardó la hora de inicio con <code>time()</code> en <code>$_SESSION[\'inicio\']</code>.</p>
    <p>Navega por el sitio:</p><p>';
    foreach (['variables','condicionales','bucles','arreglos','sesiones'] as $p) {
        echo "<a class='boton' href='$p.php'>" . ucfirst($p) . "</a> ";
    }
    echo '</p><p>Para reiniciar, vuelve a este inicio con "Reiniciar sesión" (se destruye con <code>session_destroy()</code>).</p></section>';
} else {
    echo '<section class="tarjeta"><h2>Bienvenido</h2>
    <p>Al cargar esta página cualquier sesión previa se destruye con <code>session_destroy()</code>.</p>
    <p><a class="boton" href="index.php?accion=iniciar">INICIAR SESIÓN</a></p></section>';
}
?>
</main>
<footer class="pie"><p>Proyecto PHP &copy; <?php echo date('Y'); ?></p></footer>
</body></html>
