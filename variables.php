<?php
// ESPECIFICACIÓN 1 — Uso de variables
// ESPECIFICACIÓN 2 — Tipos de datos
$titulo = "Variables";
require 'includes/header.php';
require 'includes/menu.php';

// --- Declaración de variables con distintos tipos de datos ---
$nombre   = "Ana García";   // string  — cadena de texto
$edad     = 21;             // int     — número entero
$promedio = 9.35;           // float   — número decimal
$activo   = true;           // boolean — verdadero/falso
$materias = ["PHP", "Redes", "Bases de Datos", "Inglés"]; // array

// Funciones útiles aplicadas a las variables
$longitud      = strlen($nombre);           // longitud del string
$promedioRound = round($promedio, 1);       // redondea float
$totalMaterias = count($materias);          // cuenta elementos del array
$fechaHoy      = date('d/m/Y H:i:s');       // fecha/hora actual
?>

<section class="tarjeta">
  <h2>¿Qué es una variable en PHP?</h2>
  <p>Una variable se declara con el símbolo <code>$</code> seguido del nombre, y se le asigna
  un valor con <code>=</code>. PHP es de tipado dinámico: no se declara el tipo, el
  intérprete lo detecta automáticamente. Sirven para almacenar datos y reutilizarlos
  a lo largo del script.</p>
  <p>Ejemplo: <code>$nombre = "Ana García";</code> crea la variable y le asigna un string.</p>
</section>

<section class="tarjeta">
  <h2>Tipos de datos y sus valores</h2>
  <table>
    <tr><th>Variable</th><th>Valor</th><th>Tipo (gettype)</th><th>Descripción</th></tr>
    <tr>
      <td><code>$nombre</code></td>
      <td><?php echo $nombre; ?></td>
      <td><?php echo gettype($nombre); ?></td>
      <td>String: texto entre comillas</td>
    </tr>
    <tr>
      <td><code>$edad</code></td>
      <td><?php echo $edad; ?></td>
      <td><?php echo gettype($edad); ?></td>
      <td>Int: número entero sin decimales</td>
    </tr>
    <tr>
      <td><code>$promedio</code></td>
      <td><?php echo $promedio; ?></td>
      <td><?php echo gettype($promedio); ?></td>
      <td>Float: número con parte decimal</td>
    </tr>
    <tr>
      <td><code>$activo</code></td>
      <td><?php echo $activo ? 'true' : 'false'; ?></td>
      <td><?php echo gettype($activo); ?></td>
      <td>Boolean: solo puede ser true o false</td>
    </tr>
    <tr>
      <td><code>$materias</code></td>
      <td><?php echo implode(", ", $materias); ?></td>
      <td><?php echo gettype($materias); ?></td>
      <td>Array: colección de valores</td>
    </tr>
  </table>
</section>

<section class="tarjeta">
  <h2>echo y funciones integradas</h2>
  <p><code>echo</code> imprime en pantalla. Se pueden interpolar variables dentro de comillas dobles:</p>
  <p>→ <?php echo "Hola $nombre, tienes $edad años y tu promedio es $promedio."; ?></p>

  <table>
    <tr><th>Función</th><th>Resultado</th><th>¿Para qué sirve?</th></tr>
    <tr><td><code>strlen($nombre)</code></td>
        <td><?php echo $longitud; ?></td>
        <td>Longitud de un string en caracteres</td></tr>
    <tr><td><code>round($promedio, 1)</code></td>
        <td><?php echo $promedioRound; ?></td>
        <td>Redondea un float a N decimales</td></tr>
    <tr><td><code>count($materias)</code></td>
        <td><?php echo $totalMaterias; ?></td>
        <td>Número de elementos de un array</td></tr>
    <tr><td><code>date('d/m/Y H:i:s')</code></td>
        <td><?php echo $fechaHoy; ?></td>
        <td>Fecha y hora actual del servidor</td></tr>
    <tr><td><code>gettype($activo)</code></td>
        <td><?php echo gettype($activo); ?></td>
        <td>Devuelve el tipo de dato de una variable</td></tr>
    <tr><td><code>var_dump($activo)</code></td>
        <td><?php ob_start(); var_dump($activo); echo htmlspecialchars(ob_get_clean()); ?></td>
        <td>Muestra tipo y valor detallado (útil para depuración)</td></tr>
  </table>
</section>

<?php require 'includes/footer.php'; ?>
