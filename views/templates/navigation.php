<?php

//SESIONES ABIERTAS O NO?

//en las plantillas obtendremos el codigo HTML
//para trabajar con variables sesion es nesesario pornerlas antes de iniciar las vistas
session_start();

//$usuarios= controllerForm::select_register();
//echo"<pre>";print_r($usuarios);echo"</pre>";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="views/css/login.css">
    <script src="https://kit.fontawesome.com/73dbc2a14d.js" crossorigin="anonymous"></script>
    <script src="funciones.js"></script>
    <script src="views/javascript/login.js"></script>
    <title>0Km Adjudicados | Multimarca | Argentina | GewinnGruppe</title>
</head>

<header class="Container_1">
        <div class="Box_1">
            <div>
            <a href="">Acerca de Nosotros</a>
            <strong><a href="#" id="user_login">Clientes<i class="fas fa-user-edit"></i> </a></strong> <!--Usuarios-->
            </div>
        </div>

        

<!--Loguearse------------------------------------------------------------->

<?php
//validar login
$login = new controllerForm();
$login -> login();

if(isset($_GET["action"]) != "users"){
    
    $_SESSION["tmp_login"]=null;
}

?>

<div class="box-container-log">
    <input type="button" class="closed-box" value="X">
    <p class="client_title">INGRESA COMO CLIENTE</p>
    <p>¡Consulta tus cuotas y el estado de tu adjudicación de manera online!</p>
    <img class="logo_login" src="img/gewinn_logo.jpg" alt="">
    <form class="entry" action="index.php?action=users" method="post">
        <label for="EMAIL"></label>
        <input type="email" id="EMAIL" placeholder="Email" name="i_mail">
        <label for="PASSWORD"></label>
        <input type="password" id="PASSWORD" placeholder="Contraseña" name="i_pass">
        <input type="submit" value="Ingresar" >
    </form>
    <p>¿aún no se encuentra registrado? <a href="index.php?action=register">Haga clic aquí</a></p>
    <p><a id="get_pass" href="#">¿Olvido su contraseña?</a></p>
</div>


<div class="box-container-rec">
    <input type="button" class="closed-box" id="closed-box" value="X">
    <p class="client_title">¿Olvido Su Contraseña?</p>
    <p>¡Enviaremos un correo de recuperacion al mail registrado!</p>
    <img class="logo_login" src="img/gewinn_logo.jpg" alt="">
    <form class="entry" action=" " method="post">
        <input type="email" placeholder="Email" name="r_mail">
        <input type="submit" value="Enviar" >
    </form>
    <p>¿aún no se encuentra registrado?<a href="index.php?action=register">Haga clic aquí</a></p>
</div>






    <!--Logotipos Redirecionadores------------------------------------------->

    <div class="Box_2">
            <img src="img/gewinn_logo.jpg" alt="GewinnGruppe_logo">
        <div class="title">
            <h1>¡Vehículos Adjudicados!</h1>
            <h2>¡Retiros Con Integración Mínima, Financiaciones Personalizadas, Todas las Marcas!</h2>
        </div>
            <div class="social_icons">
                <a href="https://www.facebook.com/gewinngruppe/"><img src="img/Face_icon.png" alt="Face_icon"></a>
                <a href="https://www.instagram.com/gewinngruppe/?hl=en"><img src="img/Insta_icon.png" alt="Insta_icon"></a>
                <a href="https://twitter.com/GruppeGewinn"><img src="img/Twit_icon.png" alt="Twit_icon"></a>
            </div>
    </div>
    <nav>
        <a href="index.php?action=home">inicio</a>
        <a href="index.php?action=trademarks">Marcas Comercializadas</a>
        <a href="index.php?action=deliveredcars">Autos Entregados</a>
        <a href="index.php?action=contact">Contacto</a>
        <a href="index.php?action=payments">Medios de Pago</a>
    </nav>
</header>