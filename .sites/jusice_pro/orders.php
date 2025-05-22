<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $address = htmlspecialchars($_POST["address"]);
    $variety = htmlspecialchars($_POST["variety"]);
    $quantity = intval($_POST["quantity"]);

    $entry = "Name: $name\nAddress: $address\nVariety: $variety\nQuantity: $quantity kg\n---\n";

    // Store order in a file (safe for demos, use a database for real projects)
    file_put_contents("orders.txt", $entry, FILE_APPEND);

    echo "<h2 style='font-family:Arial;'>Thank you, $name! Your order for $quantity kg of $variety mangoes has been placed.</h2>";
} else {
    echo "Invalid request.";
}
?>
