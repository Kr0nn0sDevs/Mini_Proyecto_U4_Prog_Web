<?php
// Inicia/recupera la sesión y muestra el encabezado común con la info de sesión.
if (session_status() === PHP_SESSION_NONE) { session_start(); }
if (!isset($_SESSION['inicio']) && empty($esIndex)) {
    header("Location: index.php"); // sin sesión iniciada, se regresa al inicio
    exit;
}
if (isset($_SESSION['inicio'])) {
    $_SESSION['visitas'] = ($_SESSION['visitas'] ?? 0) + 1;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $titulo; ?> | Proyecto PHP</title>
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
    <p>Hora actual: <strong><?php echo date('H:i:s', $ahora); ?></strong></p>
    <p>Tiempo activo: <strong><?php echo "$min minutos $seg segundos"; ?></strong></p>
  <?php else: ?>
    <p>Sin sesión activa. Inicia sesión para continuar.</p>
  <?php endif; ?>
  </div>
</header>
