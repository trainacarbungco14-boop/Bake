<?php
declare(strict_types=1);

$bakeryStock = [
    "Chocolate Croissant"  => ["price" => 85.0, "stock" => 12],
    "Blueberry Muffin"     => ["price" => 75.0, "stock" => 8],
    "Gingerbread Cookies" => ["price" => 60.0, "stock" => 5],
    "Cinnamon Roll"       => ["price" => 90.0, "stock" => 15],
    "Banana Loaf"          => ["price" => 110.0, "stock" => 9],
    "Cheese Bread"        => ["price" => 70.0, "stock" => 14],
    "Chocolate Cake Slice"=> ["price" => 95.0, "stock" => 6],
    "Apple pie"         => ["price" => 50.0, "stock" => 20]
];


$taxRate = 12;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax = 0): float {
    $totalValue = $price * $quantity;
    return $totalValue * ($tax / 100);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bakie Treats Bakery - Stock Control</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
    <a href="index.php">🏠 Home</a> |
    <a href="bake.php">🍪 Treats</a> |
    <a href="conditional.php">🧩 Conditionals</a> |
    <a href="loop.php">🔁 Loops</a> |
    <a href="stock.php">📦 Stock</a>
</nav>

<div class="container">
    <h2>📦 Bakery Stock Control</h2>

    <table>
        <tr>
            <th>Product Name</th>
            <th>Stock Level</th>
            <th>Reorder?</th>
            <th>Total Value (PHP)</th>
            <th>Tax Due (PHP)</th>
        </tr>

        <?php
        
        foreach ($bakeryStock as $product_name => $data) {

            echo "<tr>";
            echo "<td>$product_name</td>";
            
            $stock = $data["stock"];
            $price = $data["price"];
            echo "<td>$stock</td>";

            echo "<td>" . get_reorder_message($stock) . "</td>";

            echo "<td>₱" . number_format(get_total_value($price, $stock), 2) . "</td>";
            echo "<td>₱" . number_format(get_tax_due($price, $stock, $taxRate), 2) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>

<?php include('footer.php'); ?>
