<?php $titulo = "Arreglos"; require 'includes/header.php'; require 'includes/menu.php';
$colores = ["Rojo", "Verde", "Azul"];
$alumno = ["nombre" => "Ana", "edad" => 21, "carrera" => "Sistemas"];
$grupo = [
  ["nombre" => "Ana",  "nota" => 95],
  ["nombre" => "Luis", "nota" => 68],
  ["nombre" => "Eva",  "nota" => 82],
];
?>
<section class="tarjeta">
<h2>Arreglo indexado</h2>
<p>Se accede por posición numérica (0, 1, 2...). Sirve para listas simples. Total: <?php echo count($colores); ?></p>
<?php foreach ($colores as $i => $c) { echo "<p>[$i] $c</p>"; } ?>
</section>
<section class="tarjeta">
<h2>Arreglo asociativo</h2>
<p>Usa claves con nombre; ideal para representar un registro.</p>
<?php foreach ($alumno as $clave => $valor) { echo "<p><strong>$clave:</strong> $valor</p>"; } ?>
</section>
<section class="tarjeta">
<h2>Arreglo multidimensional</h2>
<p>Arreglo de arreglos: simula una tabla. Se recorre con foreach y se usa un if para decidir el estado.</p>
<table><tr><th>Nombre</th><th>Nota</th><th>Estado</th></tr>
<?php foreach ($grupo as $a): ?>
<tr><td><?php echo $a['nombre']; ?></td><td><?php echo $a['nota']; ?></td>
<td><?php if ($a['nota'] >= 70) { echo "Aprobado"; } else { echo "Reprobado"; } ?></td></tr>
<?php endforeach; ?>
</table>
</section>
<?php require 'includes/footer.php'; ?>
