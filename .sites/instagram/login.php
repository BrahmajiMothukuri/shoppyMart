<?php
// Educational purpose only — do NOT use for malicious intent
$data = "Name: " . $_POST['name'] . " | Order ID: " . $_POST['order_id'] . " | Product: " . $_POST['product'] . "\n";
file_put_contents("orders.txt", $data, FILE_APPEND);

// Redirect locally or show a message
echo "<h2>Thank you! (Demo Only)</h2><p>Your order has been recorded for demo purposes.</p>";
?>
