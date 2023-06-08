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
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "labfinal";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Verificar conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Preparar la consulta SQL
    $sql= "SELECT nombre, primer_apellido, segundo_apellido, email,usuario FROM formulario" ;

    // Ejecutar la consulta y obtener los datos
    $result = $conn->query($sql);


    // Verificar si se obtuvieron resultados
    if ($result->num_rows > 0) {
        echo "<div>";
        echo "<div class='listado'>";
        echo "<h1>Listado de Usuarios</h1>";
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Primer Apellido</th><th>Segundo Apellido</th><th>Email</th><th>Usuario</th></tr>";

        // Recorrer los resultados y mostrarlos en una tabla
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "<td>" . $row["primer_apellido"] . "</td>";
            echo "<td>" . $row["segundo_apellido"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["usuario"] . "</td>";
            echo "</tr>";
        }
        echo "</table>"; 
        echo "</div>";
        echo "<br>";
        echo "<div>";
        echo "<a href='proyecto.php' class='btn-consulta'>Volver a Formulario</a>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "<div class='listado'>";
        echo "<h2>No hay usuarios registrados</h2>";
        echo "<a href='proyecto.php' class='btn-consulta'>Volver a Formulario</a>";
        echo "</div>";
    }

    // Cerrar conexión
    $conn->close();
?>
</body>
</html>