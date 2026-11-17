<?php
// ESPECIFICACIÓN 8  — Uso de arreglos (indexado y asociativo)
// ESPECIFICACIÓN 9  — Uso de arreglo multidimensional
$titulo = "Arreglos";
require 'includes/header.php';
require 'includes/menu.php';

// Arreglo indexado
$colores = ["Rojo", "Verde", "Azul", "Amarillo", "Naranja"];

// Arreglo asociativo
$alumno = [
    "nombre"  => "Ana García",
    "edad"    => 21,
    "carrera" => "Ingeniería en Sistemas",
    "semestre"=> 4,
    "activo"  => true,
];

// Arreglo multidimensional
$grupo = [
    ["nombre" => "Ana",   "nota" => 95, "materia" => "PHP"],
    ["nombre" => "Luis",  "nota" => 68, "materia" => "Redes"],
    ["nombre" => "Eva",   "nota" => 82, "materia" => "BD"],
    ["nombre" => "Pedro", "nota" => 55, "materia" => "PHP"],
    ["nombre" => "Karla", "nota" => 91, "materia" => "Redes"],
];
?>

<section class="tarjeta">
  <h2>¿Qué es un arreglo (array)?</h2>
  <p>Un arreglo es una variable que almacena <strong>múltiples valores</strong> bajo un solo nombre.
  Permite manipular colecciones de datos de forma eficiente: recorrerlos, buscar, ordenar o
  calcular sobre ellos. PHP ofrece tres tipos: indexado, asociativo y multidimensional.</p>
</section>

<!-- ESPECIFICACIÓN 8a — Arreglo indexado -->
<section class="tarjeta">
  <h2>Arreglo indexado</h2>
  <p>Los elementos se acceden por posición numérica (0, 1, 2…). Se usa para listas simples.</p>
  <p>Total de colores: <strong><?php echo count($colores); ?></strong></p>
  <ul>
    <?php foreach ($colores as $i => $c): ?>
    <li>[$<?php echo $i; ?>] <?php echo $c; ?></li>
    <?php endforeach; ?>
  </ul>

  <h3>Funciones de manipulación</h3>
  <table>
    <tr><th>Función</th><th>Resultado</th><th>Descripción</th></tr>
    <tr>
      <td><code>array_push($colores, "Morado")</code></td>
      <td><?php array_push($colores, "Morado"); echo implode(", ", $colores); ?></td>
      <td>Agrega un elemento al final</td>
    </tr>
    <tr>
      <td><code>sort($colores)</code></td>
      <td><?php sort($colores); echo implode(", ", $colores); ?></td>
      <td>Ordena alfabéticamente</td>
    </tr>
    <tr>
      <td><code>in_array("Rojo", $colores)</code></td>
      <td><?php echo in_array("Rojo", $colores) ? "true — encontrado ✅" : "false — no encontrado"; ?></td>
      <td>Busca si un valor existe</td>
    </tr>
    <tr>
      <td><code>count($colores)</code></td>
      <td><?php echo count($colores); ?></td>
      <td>Cuenta los elementos</td>
    </tr>
  </table>
</section>

<!-- ESPECIFICACIÓN 8b — Arreglo asociativo -->
<section class="tarjeta">
  <h2>Arreglo asociativo</h2>
  <p>Usa <strong>claves con nombre</strong> en lugar de índices numéricos. Ideal para
  representar un registro con campos significativos (como los datos de un alumno).</p>
  <table>
    <tr><th>Clave</th><th>Valor</th><th>Tipo</th></tr>
    <?php foreach ($alumno as $clave => $valor): ?>
    <tr>
      <td><code><?php echo $clave; ?></code></td>
      <td><?php echo is_bool($valor) ? ($valor ? "true" : "false") : $valor; ?></td>
      <td><?php echo gettype($valor); ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
  <p>Acceso directo: <code>$alumno['nombre']</code> → <strong><?php echo $alumno['nombre']; ?></strong></p>
</section>

<!-- ESPECIFICACIÓN 9 — Arreglo multidimensional -->
<section class="tarjeta">
  <h2>Arreglo multidimensional</h2>
  <p>Es un arreglo cuyos elementos son a su vez arreglos. Permite representar
  <strong>tablas de datos</strong>. Se recorre con <code>foreach</code> y dentro
  se usa un <code>if</code> para clasificar cada registro.</p>
  <table>
    <tr><th>#</th><th>Nombre</th><th>Materia</th><th>Nota</th><th>Estado</th></tr>
    <?php foreach ($grupo as $i => $a): ?>
    <tr>
      <td><?php echo $i + 1; ?></td>
      <td><?php echo $a['nombre']; ?></td>
      <td><?php echo $a['materia']; ?></td>
      <td><?php echo $a['nota']; ?></td>
      <td><?php if ($a['nota'] >= 70) {
                  echo "<span style='color:green'>✅ Aprobado</span>";
              } else {
                  echo "<span style='color:red'>❌ Reprobado</span>";
              } ?></td>
    </tr>
    <?php endforeach; ?>
  </table>

  <h3>Cálculos con array_sum y array_column</h3>
  <?php
  $notas    = array_column($grupo, 'nota');
  $promedio = array_sum($notas) / count($notas);
  $maxNota  = max($notas);
  $minNota  = min($notas);
  ?>
  <p>Promedio del grupo: <strong><?php echo round($promedio, 2); ?></strong></p>
  <p>Nota más alta: <strong><?php echo $maxNota; ?></strong> &nbsp;|&nbsp;
     Nota más baja: <strong><?php echo $minNota; ?></strong></p>
  <p><code>array_column()</code> extrae una columna completa del arreglo multidimensional.
     <code>array_sum()</code> suma todos los valores. <code>max()</code> y <code>min()</code>
     devuelven el mayor y el menor.</p>
</section>

<?php require 'includes/footer.php'; ?>
