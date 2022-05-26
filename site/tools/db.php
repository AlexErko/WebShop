<?php
$host="localhost"; 
$userDB="root"; 
$pass="root"; 
$db="shop";
$mysql = new mysqli($host,$userDB,$pass,$db);
if ($mysql->connect_error) {
    die("Помилка сервера, спробуйте пізніше.");
}
?>
