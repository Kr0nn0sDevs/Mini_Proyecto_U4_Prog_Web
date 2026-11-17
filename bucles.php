<?php
// ESPECIFICACIÓN 5 — Uso de for
// ESPECIFICACIÓN 6 — Uso de while
// ESPECIFICACIÓN 7 — Uso de foreach
$titulo = "Bucles";
require 'includes/header.php';
require 'includes/menu.php';

$frutas    = ["Manzana", "Pera", "Uva", "Mango", "Naranja"];
$alumnos   = [
  ["nombre" => "Ana",   "nota" => 95],
  ["nombre" => "Luis",  "nota" => 68],
  ["nombre" => "Eva",   "nota" => 82],
  ["nombre" => "Pedro", "nota" => 55],
];
?>

<section class="tarjeta">
  <h2>¿Qué son los bucles?</h2>
  <p>Los bucles (ciclos) permiten <strong>repetir</strong> un bloque de código varias veces sin
  escribirlo manualmente. Se usan para recorrer listas, generar tablas o ejecutar
  operaciones repetitivas. PHP ofrece <code>for</code>, <code>while</code> y <code>foreach</code>.</p>
</section>

<!-- ESPECIFICACIÓN 5 — for -->
<section class="tarjeta">
  <h2>for — tabla de multiplicar del 7</h2>
  <p><code>for</code> se usa cuando se conoce de antemano el número de repeticiones.
  Tiene tres partes: <strong>inicio</strong>, <strong>condición</strong> e <strong>incremento</strong>.</p>
  <p>Sintaxis: <code>for ($i = 1; $i &lt;= 10; $i++) { ... }</code></p>
  <table>
    <tr><th>Operación</th><th>Resultado</th></tr>
    <?php for ($i = 1; $i <= 10; $i++): ?>
    <tr>
      <td>7 × <?php echo $i; ?></td>
      <td><?php echo 7 * $i; ?></td>
    </tr>
    <?php endfor; ?>
  </table>
</section>

<!-- ESPECIFICACIÓN 6 — while -->
<section class="tarjeta">
  <h2>while — cuenta regresiva</h2>
  <p><code>while</code> repite el bloque <strong>mientras la condición sea verdadera</strong>.
  Es útil cuando no se sabe cuántas veces se repetirá. Es importante actualizar la variable
  dentro del bucle (<code>$n--</code>) para evitar un ciclo infinito.</p>
  <p>Cuenta regresiva desde 10:
  <?php
  $n = 10;
  while ($n > 0) {
      echo "<span class='num-cuenta'>$n</span> ";
      $n--;
  }
  echo "<strong>🚀 ¡Despegue!</strong>";
  ?>
  </p>

  <h3>while — suma acumulativa</h3>
  <p>Suma los números del 1 al 100 usando while:</p>
  <?php
  $suma = 0;
  $i    = 1;
  while ($i <= 100) {
      $suma += $i;
      $i++;
  }
  ?>
  <p>Resultado: 1 + 2 + ... + 100 = <strong><?php echo $suma; ?></strong></p>
</section>

<!-- ESPECIFICACIÓN 7 — foreach -->
<section class="tarjeta">
  <h2>foreach — recorrido de arreglos</h2>
  <p><code>foreach</code> está diseñado para recorrer arreglos. No necesita índices ni
  condición de parada; itera automáticamente sobre cada elemento.</p>
  <p>Sintaxis: <code>foreach ($arreglo as $indice => $valor) { ... }</code></p>

  <h3>Lista de frutas</h3>
  <ul>
    <?php foreach ($frutas as $i => $f): ?>
    <li>#<?php echo $i; ?>: <?php echo $f; ?></li>
    <?php endforeach; ?>
  </ul>

  <h3>Tabla de alumnos con foreach + condicional</h3>
  <p>Se recorre el arreglo <code>$alumnos</code> y dentro del foreach se usa un
  <code>if</code> para determinar si cada alumno aprobó o no:</p>
  <table>
    <tr><th>Nombre</th><th>Nota</th><th>Estado</th></tr>
    <?php foreach ($alumnos as $a): ?>
    <tr>
      <td><?php echo $a['nombre']; ?></td>
      <td><?php echo $a['nota']; ?></td>
      <td><?php if ($a['nota'] >= 70) {
                  echo "<span style='color:green'>✅ Aprobado</span>";
              } else {
                  echo "<span style='color:red'>❌ Reprobado</span>";
              } ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</section>
<p>
Los ciclos permiten automatizar tareas repetitivas y recorrer colecciones de datos de manera eficiente.
</p>
<?php require 'includes/footer.php'; ?>
