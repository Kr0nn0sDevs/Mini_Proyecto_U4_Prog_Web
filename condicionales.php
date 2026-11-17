<?php
// ESPECIFICACIÓN 3 — Uso de if / elseif / else
// ESPECIFICACIÓN 4 — Uso de switch
$titulo = "Condicionales";
require 'includes/header.php';
require 'includes/menu.php';

$calificacion = 85;
$temperatura  = 28;
$edades = ['Luis' => 17, 'Marta' => 25, 'Pedro' => 18, 'Karla' => 15];
$dia = (int) date('N');   // 1=lunes … 7=domingo
?>

<section class="tarjeta">
  <h2>¿Qué son los condicionales?</h2>
  <p>Los condicionales permiten que el programa tome <strong>decisiones</strong>: se evalúa
  una condición y, dependiendo de si es verdadera o falsa, se ejecuta un bloque de código u otro.
  En PHP los principales son <code>if / elseif / else</code> y <code>switch</code>.</p>
</section>

<!-- ESPECIFICACIÓN 3 — if / elseif / else -->
<section class="tarjeta">
  <h2>if, elseif y else</h2>
  <p>PHP evalúa cada condición de arriba hacia abajo y ejecuta el primer bloque verdadero.
  <code>elseif</code> agrega condiciones intermedias; <code>else</code> es el caso por defecto.</p>

  <h3>Ejemplo 1 — calificación (variable: <?php echo $calificacion; ?>)</h3>
  <p>Resultado:
  <?php
  if ($calificacion >= 90) {
      echo "<strong style='color:green'>Excelente</strong>";
  } elseif ($calificacion >= 70) {
      echo "<strong style='color:#4f46e5'>Aprobado</strong>";
  } else {
      echo "<strong style='color:red'>Reprobado</strong>";
  }
  ?>
  </p>

  <h3>Ejemplo 2 — temperatura (variable: <?php echo $temperatura; ?> °C)</h3>
  <p>Resultado:
  <?php
  if ($temperatura >= 35) {
      echo "Hace mucho calor 🔥";
  } elseif ($temperatura >= 25) {
      echo "Temperatura agradable ☀️";
  } elseif ($temperatura >= 15) {
      echo "Clima fresco 🌤️";
  } else {
      echo "Hace frío 🧥";
  }
  ?>
  </p>

  <h3>Ejemplo 3 — evaluando un arreglo con if</h3>
  <p>Se recorre el arreglo <code>$edades</code> y se usa <code>if</code> para clasificar a cada persona:</p>
  <table>
    <tr><th>Nombre</th><th>Edad</th><th>Clasificación</th></tr>
    <?php foreach ($edades as $nombre => $e): ?>
    <tr>
      <td><?php echo $nombre; ?></td>
      <td><?php echo $e; ?></td>
      <td><?php
        if ($e >= 18)      { echo "Mayor de edad ✅"; }
        elseif ($e >= 15)  { echo "Adolescente"; }
        else               { echo "Niño/a"; }
      ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</section>

<!-- ESPECIFICACIÓN 4 — switch -->
<section class="tarjeta">
  <h2>switch</h2>
  <p><code>switch</code> compara una sola variable contra varios valores posibles (<code>case</code>).
  Es más legible que muchos <code>elseif</code> cuando los casos son valores concretos.
  Cada <code>case</code> termina con <code>break</code> para evitar que siga ejecutando los siguientes.</p>

  <h3>Ejemplo — día de la semana (hoy: día nº <?php echo $dia; ?>)</h3>
  <p>Hoy es:
  <?php
  switch ($dia) {
    case 1: echo "<strong>Lunes</strong>";    break;
    case 2: echo "<strong>Martes</strong>";   break;
    case 3: echo "<strong>Miércoles</strong>"; break;
    case 4: echo "<strong>Jueves</strong>";   break;
    case 5: echo "<strong>Viernes</strong>";  break;
    case 6: echo "<strong>Sábado</strong>";   break;
    default: echo "<strong>Domingo</strong>";
  }
  ?>
  </p>

  <h3>Ejemplo — tipo de calificación (variable: <?php echo $calificacion; ?>)</h3>
  <?php
  $rango = intdiv($calificacion, 10); // 85 → 8
  switch ($rango) {
    case 10:
    case 9:  $etiqueta = "A — Sobresaliente"; break;
    case 8:  $etiqueta = "B — Notable";       break;
    case 7:  $etiqueta = "C — Bien";          break;
    case 6:  $etiqueta = "D — Suficiente";    break;
    default: $etiqueta = "F — Insuficiente";
  }
  ?>
  <p>Calificación <?php echo $calificacion; ?> → <strong><?php echo $etiqueta; ?></strong></p>
</section>

<?php require 'includes/footer.php'; ?>
