<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = "Order:\n";
    $data .= "Name: " . $_POST['name'] . "\n";
    $data .= "Phone: " . $_POST['phone'] . "\n";
    $data .= "Email: " . $_POST['email'] . "\n";
    $data .= "Address: " . $_POST['address'] . "\n";
    $data .= "City: " . $_POST['city'] . "\n";
    $data .= "Product ID: " . $_POST['product_id'] . "\n";
    $data .= "Landmark: " . $_POST['landmark'] . "\n";
    $data .= "Alt Phone: " . $_POST['alt_phone'] . "\n";
    $data .= "-----------------------------\n";

    file_put_contents("orders.txt", $data, FILE_APPEND);
    echo "<h3>Order submitted successfully!</h3>";
}
?>