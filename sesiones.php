<?php
// ESPECIFICACIÓN 10 — Uso de sesiones PHP para controlar tiempo activo
$titulo = "Sesiones";
require 'includes/header.php';
require 'includes/menu.php';
?>

<section class="tarjeta">
  <h2>¿Qué es una sesión en PHP?</h2>
  <p>Una sesión (<em>session</em>) permite guardar datos en la <strong>memoria del servidor</strong>
  y mantenerlos disponibles entre diferentes páginas del sitio, sin usar base de datos ni archivos.
  Es útil para registrar si un usuario está activo, guardar preferencias o controlar el tiempo de uso.</p>
  <p>Se activa con <code>session_start()</code> (ya ejecutado en <code>header.php</code>),
  se usa el arreglo superglobal <code>$_SESSION</code> para leer y escribir datos, y se
  finaliza con <code>session_destroy()</code>.</p>
</section>

<!-- ESPECIFICACIÓN 10 — $_SESSION y cálculo de tiempo activo -->
<section class="tarjeta">
  <h2>Contenido de $_SESSION y tiempo activo</h2>
  <p>Al iniciar sesión en <code>index.php</code> se ejecutó:</p>
  <pre><code>session_start();
$_SESSION['inicio'] = time();   // timestamp Unix de la hora de inicio</code></pre>

  <p>En esta página y en el encabezado se calcula el tiempo activo así:</p>
  <pre><code>$inicio = $_SESSION['inicio'];   // hora de inicio guardada
$ahora  = time();                // hora actual
$dif    = $ahora - $inicio;      // diferencia en segundos
$min    = intdiv($dif, 60);      // minutos enteros
$seg    = $dif % 60;             // segundos restantes</code></pre>

  <?php
  $inicio = $_SESSION['inicio'];
  $ahora  = time();
  $dif    = $ahora - $inicio;
  $min    = intdiv($dif, 60);
  $seg    = $dif % 60;
  ?>

  <table>
    <tr><th>Dato</th><th>Valor en $_SESSION</th><th>Formato legible</th></tr>
    <tr>
      <td><code>$_SESSION['inicio']</code></td>
      <td><?php echo $inicio; ?> (timestamp Unix)</td>
      <td><?php echo date('d/m/Y H:i:s', $inicio); ?></td>
    </tr>
    <tr>
      <td><code>time()</code> ahora</td>
      <td><?php echo $ahora; ?></td>
      <td><?php echo date('d/m/Y H:i:s', $ahora); ?></td>
    </tr>
    <tr>
      <td>Diferencia</td>
      <td><?php echo $dif; ?> segundos</td>
      <td><strong><?php echo "{$min} minutos {$seg} segundos"; ?></strong></td>
    </tr>
  </table>
</section>

<section class="tarjeta">
  <h2>Todos los datos guardados en $_SESSION</h2>
  <p>El arreglo <code>$_SESSION</code> actualmente contiene:</p>
  <table>
    <tr><th>Clave</th><th>Valor</th></tr>
    <?php foreach ($_SESSION as $k => $v): ?>
    <tr>
      <td><code>$_SESSION['<?php echo htmlspecialchars($k); ?>']</code></td>
      <td>
        <?php
        if ($k === 'inicio') {
            echo "$v &nbsp;→&nbsp; " . date('H:i:s', $v);
        } else {
            echo htmlspecialchars($v);
        }
        ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</section>

<section class="tarjeta">
  <h2>¿Cómo se destruye la sesión?</h2>
  <p>Al hacer clic en <strong>Reiniciar sesión</strong> del menú, se va a <code>index.php</code>,
  donde se ejecuta:</p>
  <pre><code>session_start();
$_SESSION = [];          // vacía el arreglo de datos
session_destroy();       // elimina los datos del servidor</code></pre>
  <p>Luego se inicia una sesión nueva con un nuevo <code>time()</code>. Esto demuestra
  el ciclo completo: <strong>inicio → uso → destrucción → nuevo inicio</strong>.</p>
  <p><a class="boton" href="index.php">↩ Reiniciar sesión</a></p>
</section>

<?php require 'includes/footer.php'; ?>
