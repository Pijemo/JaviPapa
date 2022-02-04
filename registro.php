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
        <form action="" method="POST">
            <label>Email:</label><input type="email">
            <label>Contraseña:</label><input type="password">
            <label>Confirmar Contraseña:</label><input type="password">
            <label>Nombre:</label><input type="text">
            <label>Apellido(s):</label><input type="text">
            <label>Fecha de Nacimiento:</label><input type="date">
            <label>Sexo:</label>
            <label>Hombre</label><input type="radio" name="sexo">
            <label>Mujer</label><input type="radio" name="sexo">
            <label>Otro:</label><input type="text" name="sexo">
            <input type="submit" value="enviar">
        </form>
    </main>
</body>
</html>