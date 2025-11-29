<?php

// Bakery Introduction
$storeName = "Bakie Treats Bakery";
$greeting = "Welcome to our cozy Christmas bakery!";
$mission = "We bring joy to your holidays with freshly baked treats and festive flavors.";

// Featured Products
$featuredProducts = [
    "Chocolate Croissant" => "Flaky, buttery croissant filled with rich chocolate.",
    "Blueberry Muffin" => "Soft and fluffy muffin packed with fresh blueberries.",
    "Gingerbread Cookies" => "Classic Christmas cookies with warm spices.",
    "Cinnamon Roll" => "Sweet rolls with cinnamon sugar and icing drizzle."
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bakie Treats Bakery - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVIGATION -->
<nav class="navbar">
    <a href="index.php">🏠 Home</a> |
    <a href="bake.php">🍪 Treats</a> |
    <a href="conditional.php">🧩 Conditionals</a> |
    <a href="loop.php">🔁 Loops</a>
</nav>

<!-- HERO SECTION -->
<div class="container">
    <h1>🎄 <?= $storeName ?> 🎅</h1>
    <p style="text-align:center; font-size:18px; color:#2e8b57;">
        <?= $greeting ?><br>
        <?= $mission ?>
    </p>

    <!-- FEATURED PRODUCTS -->
    <h2 style="color:#b30000;">✨ Featured Christmas Treats ✨</h2>
    <table>
        <tr>
            <th>Product</th>
            <th>Description</th>
        </tr>
        <?php foreach($featuredProducts as $product => $description): ?>
        <tr>
            <td><?= $product ?></td>
            <td><?= $description ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- SPECIAL MESSAGE -->
    <div class="result-box" style="margin-top:30px; text-align:center;">
        <h3>🎁 Holiday Special!</h3>
        <p>Buy any 2 pastries and get a <strong>free cup of hot cocoa</strong>! ☕❄️</p>
        <p>Enjoy the warmth and sweetness of Christmas with Bakie Treats Bakery.</p>
    </div>
</div>

</body>
</html>

<?php include('footer.php'); ?>
