<?php $titulo = "Sesiones"; require 'includes/header.php'; require 'includes/menu.php'; ?>
<section class="tarjeta">
<h2>Manejo de sesiones</h2>
<p>Una sesión guarda datos en el servidor y los mantiene entre páginas sin base de datos. Se activa con <code>session_start()</code> y se usa el arreglo <code>$_SESSION</code>. Aquí sirve para saber cuándo inició el usuario y calcular su tiempo activo (hora actual - <code>time()</code> inicial).</p>
<p>Se destruye con <code>session_destroy()</code> al regresar al index mediante "Reiniciar sesión".</p>
</section>
<section class="tarjeta">
<h2>Contenido actual de $_SESSION</h2>
<table><tr><th>Clave</th><th>Valor</th></tr>
<?php foreach ($_SESSION as $k => $v) {
  $mostrar = ($k === 'inicio') ? "$v (" . date('H:i:s', $v) . ")" : $v;
  echo "<tr><td>$k</td><td>$mostrar</td></tr>";
} ?>
</table>
<p>Páginas cargadas en esta sesión: <strong><?php echo $_SESSION['visitas']; ?></strong></p>
</section>
<?php require 'includes/footer.php'; ?>
