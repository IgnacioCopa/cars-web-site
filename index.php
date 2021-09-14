<?php
//Aqui mostramos todas las vistas al usuario
//Aqui obtenemos las peticiones del usuario al controller
//mostramos al usuario la "vista principal"

require_once "controller/controller.php"; //required: sirve para traer la clase
require_once "models/model.php";
require_once "mail/contact_mailer.php";

  
$mvc = new MvcController();
$mvc -> plantilla();



?>