<?php
$pastries = ["Gingerbread", "Fruitcake", "Sugar Cookies", "Cinnamon Stars"];

// WHILE loop
$counter = 1;
$whileOutput = "";
while ($counter <= 5) {
    $whileOutput .= "Customer $counter entered the bakery. 🎅<br>";
    $counter++;
}

// FOR loop
$forOutput = "";
for ($i = 1; $i <= 5; $i++) {
    $forOutput .= "Holiday Discount $i: " . (5 * $i) . "% off! 🎄<br>";
}

// FOREACH loop
$foreachOutput = "";
foreach ($pastries as $item) {
    $foreachOutput .= "We sell: $item ✨<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Loop Examples</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVIGATION BAR -->
<nav class="navbar">
    <a href="index.php">🏠 Home</a> |
    <a href="bake.php">🍪 Treats</a> |
    <a href="conditional.php">🧩 Conditionals</a> |
    <a href="loop.php">🔁 Loops</a> |
    <a href="stock.php">📦 Stock</a>
</nav>

<h2>🎄 Bakie Treats Bakery – Loops</h2>

<h3>WHILE Loop</h3>
<p><?= $whileOutput ?></p>

<h3>FOR Loop</h3>
<p><?= $forOutput ?></p>

<h3>FOREACH Loop</h3>
<p><?= $foreachOutput ?></p>

</body>
</html>



<?php include('footer.php'); ?>
