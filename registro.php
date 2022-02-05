<?php 
include "php/bd.php";
if(isset($_POST["enviar"])){
    $bd=new BD("mysql:dbname=papas;host=localhost", "root", "");
    $bd->loadBD();
    $bd->addUser($_POST["mail"],$_POST["pass"],$_POST["repass"],$_POST["nombre"],$_POST["ape"],$_POST["nac"],$_POST["sexo"],0);
    $bd->closeBD();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro usuario</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="styles/index/styles.css">
</head>
<body>    
    <header class="cabecera">
        <nav>
            <div id="logo"><img src="img/logo2.png" alt="logo"></div>
            <div class="enlace"><a href="index.html">Inicio</a></div>
            <div class="enlace"><a href="nosotros.html">Sobre nosotros</a></div>
            <div class="enlace"><a href="carta.html">Carta</a></div>
            <div class="enlace"><a href="contacto.html">Contacto</a></div>
            <div class="enlace"><a href="iniciarsesion.html">Iniciar sesión</a></div>
            <div class="enlace"><a href="registro.html">Registrarse</a></div>
        </nav>
    </header>
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
            <label>Email:</label><input type="email" name="mail">
            <label>Contraseña:</label><input type="password" name="pass">
            <label>Confirmar Contraseña:</label><input type="password" name="repass">
            <label>Nombre:</label><input type="text" name="nombre">
            <label>Apellido(s):</label><input type="text" name="ape">
            <label>Fecha de Nacimiento:</label><input type="date" name="nac">
            <label>Sexo:</label>
            <label>Hombre</label><input type="radio" name="sexo" value="H">
            <label>Mujer</label><input type="radio" name="sexo" value="M">
            <label>Otro</label><input type="radio" name="sexo">
            <input type="submit" value="enviar" name="enviar">
        </form>
    </main>
</body>
</html>