<link rel="stylesheet" href="views/css/users.css">
<?php

require_once "controller/controller.php";

//si no existe una variable sesion o no es correcta
if(!isset($_SESSION["tmp_login"]) || $_SESSION["tmp_login"] != "ok" ){

    header("Location: index.php" );
    return;

}
else{

    $data = new controllerForm();
    $pdata= $data -> personal_data();

    $cdata= $data -> car_data();

    //print_r($_SESSION["tmp_login"]);

    //$pdata= array(0=>0);

    /*foreach($pdata as $u){

        echo $u.' ';

        
    }*/

    //var_dump($pdata);
    
    //$pdata["nombre"];

}

?>

<main>
        <h3 class="client_title">Clientes</h3>
        <hr color="red" size="3%" width="80%" style="margin-left: 10%;">
    <div class="data_container">
        <div class="person_data">
            <div><p>Nombre: </p><p class="data_next"><?php echo $pdata["nombre"];?></p></div>
            <div><p>Apellido: </p><p class="data_next"><?php echo $pdata["apellido"];?></p></div>
            <div><p>Documento: </p><p class="data_next"><?php echo $pdata["documento"];?></p></div>
            <div><p>Fecha de Nacimiento: </p><p class="data_next"><?php echo $pdata["nacimiento"];?></p></div>
            <div><p>Genero: </p><p class="data_next"><?php echo $pdata["genero"];?></p></div>
            <div><p>Telefono: </p><p class="data_next"><?php echo $pdata["telefono"];?></p></div>
            <div><p>Mail: </p><p class="data_next"><?php echo $pdata["mail"];?></p></div>
        </div>
        <div class="car_data">
            <p class="car_name"><?php echo $cdata["vehiculo"];?></p>
            <div class="img_container"><img src="img_cars/<?php echo $cdata["vehiculo"];?>.png" alt=""></div>
            <div class="p_container"><p>Valor Movil Del Vehiculo: </p><p class="data_next"><?php echo $cdata["valor_movil"];?></p></div>
            <div class="p_container"><p>Valor De La Cuota Pura: </p><p class="data_next"><?php echo $cdata["valor_cuota"];?></p></div>
            <div class="p_container"><p>Valor De La Adjudicación: </p><p class="data_next"><?php echo $cdata["costo_adjudicacion"];?></p></div>
        </div>
    </div>
</main>

