<?php $titulo = "Variables"; require 'includes/header.php'; require 'includes/menu.php';
$nombre = "Ana";            // string
$edad = 21;                 // int
$promedio = 9.35;           // float
$activo = true;             // boolean
$materias = ["PHP", "Redes", "BD"]; // array
$tipos = [
  ['nombre', $nombre], ['edad', $edad], ['promedio', $promedio],
  ['activo', $activo], ['materias', $materias]
];
?>
<section class="tarjeta">
<h2>Variables y tipos de datos</h2>
<p>En PHP una variable se crea con <code>$</code> seguido del nombre y se le asigna un valor con <code>=</code>. No se declara el tipo; PHP lo deduce del valor. Sirven para guardar datos y reutilizarlos en el script.</p>
<table>
<tr><th>Variable</th><th>Valor</th><th>Tipo (gettype)</th></tr>
<?php foreach ($tipos as [$var, $val]): ?>
<tr><td>$<?php echo $var; ?></td>
<td><?php echo is_array($val) ? implode(", ", $val) : (is_bool($val) ? ($val ? 'true' : 'false') : $val); ?></td>
<td><?php echo gettype($val); ?></td></tr>
<?php endforeach; ?>
</table>
</section>
<section class="tarjeta">
<h2>Funciones y echo</h2>
<p><code>echo</code> imprime en pantalla: <?php echo "Hola $nombre, tienes $edad años."; ?></p>
<p><code>date()</code> da la fecha actual: <?php echo date('d/m/Y H:i:s'); ?></p>
<p><code>count()</code> cuenta elementos del arreglo $materias: <?php echo count($materias); ?></p>
</section>
<?php require 'includes/footer.php'; ?>
