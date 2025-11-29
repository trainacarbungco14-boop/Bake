<?php
// ARRAY of bakery items
$products = [
    ["name" => "Chocolate Croissant", "price" => 85],
    ["name" => "Blueberry Muffin",   "price" => 75],
    ["name" => "Sourdough Bread",    "price" => 120],
    ["name" => "Cinnamon Roll",      "price" => 90],
    ["name" => "Banana Loaf",        "price" => 110]
];

// VARIABLE – customer money
$customerMoney = 200;

// OPERATORS + EXPRESSIONS
$selectedItem = $products[0];
$canBuy = $customerMoney >= $selectedItem["price"];
$change = $customerMoney - $selectedItem["price"];

// TYPE JUGGLING
$priceString = "100"; 
$total = $priceString + 50; // converts "100" to int
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bakie Treats Bakery - Christmas Special</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>🎄 Bakie Treats Bakery 🎅</h1>

<div class="container">
    <h2>Christmas Menu ✨</h2>

    <!-- PRODUCT TABLE -->
    <table>
        <tr>
            <th>Product</th>
            <th>Price (PHP)</th>
        </tr>

        <?php foreach ($products as $item): ?>
            <tr>
                <td><?= $item["name"] ?></td>
                <td><?= $item["price"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="result-box">
        <h3>Computation</h3>

        <p><strong>Selected Item:</strong> <?= $selectedItem["name"] ?></p>
        <p><strong>Price:</strong> <?= $selectedItem["price"] ?></p>
        <p><strong>Customer Money:</strong> <?= $customerMoney ?></p>
        <p><strong>Can Buy?</strong> <?= $canBuy ? "Yes 🎁" : "No 😢" ?></p>
        <p><strong>Change:</strong> <?= $change ?></p>
    </div>

    <div class="result-box">
        <h3>PHP Type Juggling Example</h3>
        <p><strong>Original Value (string):</strong> <?= $priceString ?></p>
        <p><strong>Computation (string + int):</strong> <?= $total ?></p>
        <p><em>PHP converted "100" (string) into an integer automatically.</em></p>
    </div>

</div>

</body>
</html>


<?php include('footer.php'); ?>
