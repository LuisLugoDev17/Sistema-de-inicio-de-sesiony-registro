<?php

$servername = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'system';

$conn = new mysqli ($servername, $user, $pass, $dbname);

if($conn -> connect_error){
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}else{
    // echo '<script>console.log("Conectado")</script>';
}

?>