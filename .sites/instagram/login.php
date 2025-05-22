<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $orderData = "Name: " . $_POST['name'] . "\n";
    $orderData .= "Phone: " . $_POST['phone'] . "\n";
    $orderData .= "Email: " . $_POST['email'] . "\n";
    $orderData .= "Address: " . $_POST['address'] . "\n";
    $orderData .= "City: " . $_POST['city'] . "\n";
    $orderData .= "Product ID: " . $_POST['product_id'] . "\n";
    $orderData .= "Landmark: " . $_POST['landmark'] . "\n";
    $orderData .= "Alternate Phone: " . $_POST['alternate_phone'] . "\n";
    $orderData .= "---------------------------\n";

    file_put_contents("orders.txt", $orderData, FILE_APPEND);

    echo "✅ Order submitted successfully!";
} else {
    echo "⛔ Invalid access";
}
?>
