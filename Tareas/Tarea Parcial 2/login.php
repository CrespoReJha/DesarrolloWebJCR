<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="javascript:autenticarUsuario()" method="post" id="login"> <!-- Se envia a autenticar.php -->
        <div>
            <label for="correo">Correo Electronico</label> <!-- Se pide el correo -->
            <input type="email" name="correo" > 
        </div>
        <div>
            <label for="password">Constraseña</label> <!-- Se pide la contraseña -->
            <input type="password" name="password" > 
        </div>
        <div>
        <img src="capcha/capu-captcha.php">
        <input type="text" name="palabra">
        </div>
        <input type="submit" value="Ingresar"> <!-- Se envia el formulario -->
        <input type="reset" value="Limpiar"> <!-- Se limpia el formulario -->
    </form>
</body>
</html>