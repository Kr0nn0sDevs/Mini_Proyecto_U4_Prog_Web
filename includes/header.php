<?php
// Zona horaria México (necesaria en el hosting para mostrar hora correcta, no UTC)
date_default_timezone_set('America/Mexico_City');

// Inicia o recupera la sesión en cada página
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Si no hay sesión activa y no es el index, redirige al inicio
if (!isset($_SESSION['inicio']) && empty($esIndex)) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($titulo); ?> | Proyecto PHP</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header class="encabezado">
  <h1>Proyecto PHP: Fundamentos</h1>
  <div class="sesion">
  <?php if (isset($_SESSION['inicio'])):
      $inicio = $_SESSION['inicio'];
      $ahora  = time();
      $dif    = $ahora - $inicio;
      $min    = intdiv($dif, 60);
      $seg    = $dif % 60;
  ?>
    <p>Hora inicio sesión: <strong><?php echo date('H:i:s', $inicio); ?></strong></p>
    <p>Hora actual:        <strong><?php echo date('H:i:s', $ahora);  ?></strong></p>
    <p>Tiempo activo:      <strong><?php echo "{$min} minutos {$seg} segundos"; ?></strong></p>
  <?php else: ?>
    <p>Sin sesión activa. <a href="index.php" style="color:#fde68a">Inicia sesión</a>.</p>
  <?php endif; ?>
  </div>
</header>
