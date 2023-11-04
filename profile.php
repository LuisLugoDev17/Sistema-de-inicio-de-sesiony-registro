<!DOCTYPE html>
<?php 
// SESSION START
error_reporting(0);
session_start();

$id = $_SESSION['id'];
$idCard = $_SESSION['id_card'];
$name = $_SESSION['name'];
$lastName = $_SESSION['last_name'];
$birthdate = $_SESSION['birthdate'];
$user = $_SESSION['username'];
$registrationDate = $_SESSION['registration_date'];
if($user == null || $user == ''){
    echo '<b>Tienes que <a href="index.php">iniciar sesion.</a></b>';
    die();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <h1>Bienvenido, <?php echo $name . ' ' . $lastName; ?></h1>
            <div class="data">
                <h3>Datos:</h3>
                <ul>
                    <li><b>ID: </b><?php echo $id ?></li>
                    <li><b>Cedula: </b><?php echo $idCard ?></li>
                    <li><b>Nombre: </b><?php echo $name ?></li>
                    <li><b>Apellido: </b><?php echo $lastName ?></li>
                    <li><b>Usuario: </b><?php echo $user ?></li>
                    <li><b>Fecha de registro: </b><?php echo $registrationDate ?></li>
                </ul>
            </div>
            <button><a href="validaciones/closeSession.php">Salir</a></button>
        </div>
    </main>
</body>
</html>