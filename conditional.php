<?php
$pastry = "Gingerbread";

// IF statement
if ($pastry == "Gingerbread") {
    $ifMessage = "Gingerbread is available! 🎄";
} elseif ($pastry == "Fruitcake") {
    $ifMessage = "Fruitcake is available! 🍰";
} else {
    $ifMessage = "Sorry, we don't have that Christmas pastry.";
}

// SWITCH statement
switch ($pastry) {
    case "Gingerbread": $switchPrice = 50; break;
    case "Fruitcake": $switchPrice = 120; break;
    case "Sugar Cookies": $switchPrice = 40; break;
    default: $switchPrice = 0; break;
}

// MATCH expression (PHP 8+)
$matchMessage = match ($pastry) {
    "Gingerbread" => "Perfect choice for cold December nights! ❄️",
    "Fruitcake" => "A classic holiday treat! 🎁",
    "Sugar Cookies" => "Kids love them during Christmas! ⭐",
    default => "We hope you find something you like!",
};
?>
<!DOCTYPE html>
<html>
<head>
    <title>Conditional Examples</title>
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

<h2>🎄 Bakie Treats Bakery – Conditionals</h2>

<p><strong>Selected Pastry:</strong> <?= $pastry ?></p>

<h3>IF Statement Result:</h3>
<p><?= $ifMessage ?></p>

<h3>SWITCH Result (Price):</h3>
<p><?= $switchPrice == 0 ? "Pastry not found" : "Price: PHP $switchPrice" ?></p>

<h3>MATCH Expression Result:</h3>
<p><?= $matchMessage ?></p>

</body>
</html>


<?php include('footer.php'); ?>
