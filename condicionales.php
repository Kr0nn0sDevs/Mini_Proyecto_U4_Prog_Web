<?php $titulo = "Condicionales"; require 'includes/header.php'; require 'includes/menu.php';
$calificacion = 85;
$dia = (int) date('N'); // 1=lunes ... 7=domingo
$edades = ['Luis' => 17, 'Marta' => 25];
?>
<section class="tarjeta">
<h2>if, elseif y else</h2>
<p>Permiten tomar decisiones: se ejecuta el primer bloque cuya condición sea verdadera.</p>
<p>Calificación: <?php echo $calificacion; ?> →
<?php
if ($calificacion >= 90) { echo "Excelente"; }
elseif ($calificacion >= 70) { echo "Aprobado"; }
else { echo "Reprobado"; }
?></p>
<h3>Evaluando un arreglo</h3>
<?php foreach ($edades as $n => $e) {
  if ($e >= 18) { echo "<p>$n ($e): mayor de edad</p>"; }
  else { echo "<p>$n ($e): menor de edad</p>"; }
} ?>
</section>
<section class="tarjeta">
<h2>switch</h2>
<p>Compara una variable contra varios casos posibles. Hoy es el día número <?php echo $dia; ?>:
<?php
switch ($dia) {
  case 1: echo "Lunes"; break;
  case 2: echo "Martes"; break;
  case 3: echo "Miércoles"; break;
  case 4: echo "Jueves"; break;
  case 5: echo "Viernes"; break;
  case 6: echo "Sábado"; break;
  default: echo "Domingo";
}
?></p>
</section>
<?php require 'includes/footer.php'; ?>
