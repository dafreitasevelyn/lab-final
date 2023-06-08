<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="proyecto.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="proyecto.js"></script>
</head>
<body>
    <div>
        <fieldset>
            <div class="form-container">
                <form method="post" name="myForm" action="mensaje.php" >
                    <legend>Formulario de Registro</legend>
                        <div>
                            <label for="Nombre">Nombre</label>
                            <input type="text" name="nombre" oninput=validateName() onclick=validation() required>
                            <i id="check-name"></i>
                            <span id="u_name_msj"></span>
                        </div>
                        <div>
                            <label for="Apellido">Primer Apellido</label>
                            <input type="text" name="primer_apellido" oninput=validateLastname()  required>
                            <i id="check-lastname"></i>
                            <span id="u_lastname_msj"></span>
                        </div>
                        <div>
                            <label for="SegundoApellido">Segundo Apellido</label>
                            <input type="text" name="segundo_apellido" oninput=validateSecondlastname() required>
                            <i id="check-secondlastname"></i>
                            <span id="u_secondlastname_msj"></span>
                        </div>
                        <div>
                            <label for="Email">Email</label>
                            <input type="email" name="email" oninput=validateEmail() required>
                            <i id="check-mail"></i>
                            <span id="u_mail_msj"></span>
                        </div>
                        <div>
                            <label for="usuario">Usuario</label>
                            <input type="text" name="usuario" oninput=validateUsername() required>
                            <i id="check-usuario"></i>
                            <span id="u_usuario_msj"></span>
                        </div>
                        <div>
                            <label for="Clave">Clave</label>
                            <input type="password" name= "clave"  oninput=validatePasswordLength() required>
                            <i id="check-pass"></i>
                            <span id="u_pass_msj"></span>
                        </div>
                            <input type="submit" name="u_submit" value="Registrar">
                </form>
            </div>
        </fieldset>
</div>
</body>
</html>