<?php

include('connection.php');
error_reporting(0);


// INPUTS VALUES
$idCard = $_POST['id_card'];
$name = $_POST['name'];
$lastName = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];

// QUERY TO INSERT DATA INTO THE DATABASE
$sql = "INSERT INTO user(id_card, name, last_name, username, password) VALUES ('$idCard','$name','$lastName','$username','$password')";

// VALIDATION OF ID CARD
$val_id = mysqli_query($conn, "SELECT * FROM user WHERE id_card = '$idCard'");

if(mysqli_num_rows($val_id) > 0){
    echo '
        <script>
            alert("Esta cedula ya esta registrada, intenta registrar otra persona.");
            window.location = "../index.php";
        </script>
    ';
}else{
    // CONNECTION OF THE QUERY WITH THE DATABASE
    $query = mysqli_query($conn, $sql);

    if($query){
        echo '
            <script>
                alert("Registrado correctamente");
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("No registrado correctamente");
                window.location = "../index.php";
            </script>
        ';
    }
}
mysqli_close($conn);
?>