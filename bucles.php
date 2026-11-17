<?php $titulo = "Bucles"; require 'includes/header.php'; require 'includes/menu.php';
$frutas = ["Manzana", "Pera", "Uva", "Mango"];
?>
<section class="tarjeta">
<h2>for: tabla de multiplicar del 5</h2>
<p>Repite un bloque un número conocido de veces (inicio; condición; incremento).</p>
<table><tr><th>Operación</th><th>Resultado</th></tr>
<?php for ($i = 1; $i <= 10; $i++) { echo "<tr><td>5 x $i</td><td>" . (5 * $i) . "</td></tr>"; } ?>
</table>
</section>
<section class="tarjeta">
<h2>while: cuenta regresiva</h2>
<p>Repite mientras la condición sea verdadera.</p>
<?php $n = 5; while ($n > 0) { echo "<span>$n... </span>"; $n--; } echo "<strong>¡Listo!</strong>"; ?>
</section>
<section class="tarjeta">
<h2>foreach: lista de frutas</h2>
<p>Recorre cada elemento de un arreglo.</p>
<ul><?php foreach ($frutas as $i => $f) { echo "<li>#$i: $f</li>"; } ?></ul>
</section>
<?php require 'includes/footer.php'; ?>
