<?php 
include "php/bd.php";
    if(isset($_POST["enviar"])){
        $bd=new BD("mysql:dbname=papas;host=localhost", "root", "");
        $bd->loadBD();
        $bd->checkUser($_POST["mail"], $_POST["pass"]);
        $bd->closeBD();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="styles/index/styles.css">
</head>
<body>    
    <header class="cabecera">
        <script src="script.js/script.js">
            crearHeader();
        </script>
    </header>
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
            <label>Email:</label><input type="email" name="mail">
            <label>Contraseña:</label><input type="password" name="pass">
            <input type="submit" value="enviar" name="enviar">
        </form>
    </main>
</body>
</html>