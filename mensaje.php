<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="proyecto.css">
</head>
<body>
<?php
        if ($_POST)
        {
            $nombre=$_POST['nombre'];
            $primer_apellido=$_POST['primer_apellido'];
            $segundo_apellido=$_POST['segundo_apellido'];
            $email=$_POST['email'];
            $usuario=$_POST['usuario'];
            $clave=$_POST['clave'];
            
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="labfinal";

            //Conexión con la base de datos

            $conn = new mysqli( $servername, $username, $password, $dbname);

            //Verificar conexión
            if ($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }

            //Consulta para buscar si ya existe email
            $sql = "SELECT * FROM formulario WHERE email='$email'";
            $result = $conn->query($sql);
            
            //Verificar si la consulta devolvió algun resultado

            if ($result->num_rows > 0) {
                echo "<div class='message1'>";
                echo "<h1>Error</h1>";
                echo "<p>Ya existe un usuario con el mismo correo electrónico  </p>";
                echo "<p class='correo'>$email </p>";
                echo "<a href='proyecto.php' class='btn-consulta'>Volver a Formulario</a>";
                echo "</div>";
            } else {
                $sql = "INSERT INTO formulario (nombre, primer_apellido, segundo_apellido, email, usuario, clave) VALUES ('$nombre', '$primer_apellido','$segundo_apellido','$email','$usuario','$clave')";
            }

            if($conn->query($sql)===TRUE){
                echo "<div class='message2'>";
                echo "<h1>Registro completado con éxito</h1>";
                echo  "<a href='consulta.php' class='btn-consulta'>Consultar</a>";
                echo "</div>";
            } 
            //Cerrar coneccion
            $conn->close();
        }


    ?>
</body>
</html>