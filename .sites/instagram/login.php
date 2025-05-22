<?php

// Collect data
$name = $_POST['name'] ?? '';
$address = $_POST['address'] ?? '';
$phone = $_POST['phone'] ?? '';
$variety = $_POST['variety'] ?? '';
$quantity = $_POST['quantity'] ?? '';

// Format the order details
$order = "Name: $name\nAddress: $address\nPhone: $phone\nVariety: $variety\nQuantity: $quantity kg\n---\n";

// Append to order file
file_put_contents("orders.txt", $order, FILE_APPEND);

// Redirect to thank you page or external site
header('Location: thankyou.html');
exit();
?>
