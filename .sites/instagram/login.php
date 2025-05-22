<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];

    $log = "Product: $product | Quantity: $quantity" . PHP_EOL;

    // Save to a file
    file_put_contents("orders.txt", $log, FILE_APPEND);

    echo "Order received!";
} else {
    echo "Invalid access.";
}
?>
