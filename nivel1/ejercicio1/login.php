<?php

session_start();

//Verificamos si los datos llegaron a través del método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $userName = $_POST['username'];
    $email = $_POST['email'];

    
    echo "<h2>Datos recibidos del formulario:</h2>";
    echo "El nombre de usuario recibido es: " . $userName . "<br>";
    echo "El correo electrónico recibido es: " . $email. "<br><br>";

    //Registramos el nombre de usuario dentro de las variables de sesión
    $_SESSION['userSession'] = $userName;
    
    echo "El usuario " . $_SESSION['userSession'] . " ha sido iniciado en la sesión.";

} else {
    
    echo "Los datos no pueden estar en blanco.";
}

