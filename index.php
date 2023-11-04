<!DOCTYPE html>
<?php error_reporting(0) ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio</title>
</head>
<body>
    <main>
        <div class="container">
            <!-- LOGIN AND REGISTRATION FORM -->
            <div class="backContainer">
                <div class="backContainer_login">
                    <h3>Ya tienes cuenta?</h3>
                    <p>Inicia sesion para entrar a la pagina.</p>
                    <button id="btn_login">Iniciar sesion</button>
                </div>
                <div class="backContainer_register">
                    <h3>Aun no tienes cuenta?</h3>
                    <p>Registrate para entrar a la pagina.</p>
                    <button id="btn_register">Registrar</button>
                </div>
            </div>

            <div class="frontContainer">
                <!-- LOGIN FORM -->
                <form action="validaciones/logVal.php" method="POST" class="form_login">
                    <h2>Inicio de sesion</h2>

                    <input type="text" name="username" id="" placeholder="Usuario:"><br>

                    <input type="password" name="password" id="" placeholder="Contraseña:"><br>

                    <button type="submit">Iniciar sesión</button>

                </form>

                <!-- REGISTRATION FORM -->
                <form action="validaciones/regVal.php" method="POST" class="form_register">

                <h2>Registro de usuario</h2>

                <input type="text" name="id_card" id="" placeholder="Cedula:"><br>

                <input type="text" name="name" placeholder="Nombre:">

                <input type="text" name="last_name" placeholder="Apellido:"><br>

                <input type="text" name="username" id="" placeholder="Usuario:"><br>

                <input type="password" name="password" placeholder="Contraseña:"><br>

                <button>Registrarte</button>

            </form>
            </div>

        </div>
    </main>
    <script src="js/main.js"></script>
</body>
</html>