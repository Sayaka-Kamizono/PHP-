<?php
// var_dump($_POST);
// exit();


$name = $_POST["fullname"];
$Email = $_POST["Email"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$hobby = $_POST["hobby[]"];


$write_data = "{$name} , {$Email} , {$gender} , {$age} , {$hobby}\n";

$file = fopen("data/data.csv", "a");
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);

header("Location:input.php");