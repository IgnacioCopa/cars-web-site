<?php

//Requerimos la coneccion para utilizar la base de datos.
require_once "connection.php";

class EnlacesPaginas{

    //reutilizar plantillas (Vistas)
    public static function enlacesPaginasModel($enlaces){

        switch($enlaces){
            case "home": $module= "views/templates/".$enlaces.".php"; break;
            case "contact": $module= "views/templates/".$enlaces.".php"; break;
            case "aboutUs": $module= "views/templates/".$enlaces.".php"; break;
            case "home": $module= "views/templates/".$enlaces.".php"; break;
            case "services": $module= "views/templates/".$enlaces.".php"; break;
            case "users": $module= "views/templates/".$enlaces.".php"; break;
            case "index": $module= "views/templates/home.php"; break;
            
            default: $module= "views/templates/".$enlaces.".php"; break; //aca va el error 404
        }
        return $module;
    }

    //Formulario mostrar datos de "PRUEBAS" (registro)-------------------------------------------------------->
    public static function data_register($tabla,$email,$valor){


        //si existe un mail igual no registrar
        $stmt1 = connection::conect()->prepare("SELECT (mail) FROM $tabla WHERE $email = :$email");
        $stmt1->bindParam(":".$email,$valor,PDO::PARAM_STR);
        $stmt1 -> execute();
        $mailto= $stmt1 -> fetch();
    
        return $mailto;
        

        /*return $data= $_POST["name"]
                    ."<br>".$_POST["surname"]
                    ."<br>".$_POST["dni"]
                    ."<br>".$_POST["birthdate"]
                    //."<br>".$_POST["genre"]
                    ."<br>".$_POST["phone"]
                    ."<br>".$_POST["email"]
                    ."<br>".$_POST["password"];*/
        
    }

    //Cargar datos del formulario a (base de datos)--------------------------------------------------------------->
    public static function user_register($tabla,$datos){
        
        //prepare:

        $stmt = connection::conect()->prepare("INSERT INTO $tabla(nombre, apellido, documento, nacimiento, genero, telefono, mail, contrasena) VALUES (:nombre, :apellido, :documento, :nacimiento, :genero, :telefono, :mail, :contrasena)");
        
        //bindParam: desencripta los parametros ocultos almacenados en las arrays
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_INT);
        $stmt->bindParam(":nacimiento", $datos["nacimiento"], PDO::PARAM_STR);
        $stmt->bindParam(":genero", $datos["genero"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_INT);
        $stmt->bindParam(":mail", $datos["mail"], PDO::PARAM_STR);
        $stmt->bindParam(":contrasena", $datos["contrasena"], PDO::PARAM_STR);

        if($stmt->execute()){
    
            return "Usuario Registrado Exitosamente";
        }
        else{
    
            //si no se ejecuta imprime el error
            print_r(connection::conect()->errorInfo());

        }
    
        //cerrar y vaciar coneccion
        $stmt->close();
        $stmt=null;
        
    }


    public static function user_permissions($tabla1,$datos1){
        
        $stmt1 = connection::conect()->prepare("INSERT INTO $tabla1(terminos_condiciones, compartir_datos, comunicaciones_email, mail) VALUES (:terminos_condiciones, :compartir_datos, :comunicaciones_email, :mail)");

        $stmt1->bindParam(":terminos_condiciones", $datos1["terminos_condiciones"], PDO::PARAM_STR);
        $stmt1->bindParam(":compartir_datos", $datos1["compartir_datos"], PDO::PARAM_STR);
        $stmt1->bindParam(":comunicaciones_email", $datos1["comunicaciones_email"], PDO::PARAM_STR);
        $stmt1->bindParam(":mail", $datos1["mail"], PDO::PARAM_STR);

        if($stmt1->execute()){
    
            return "Ok";
        }
        else{
    
            //si no se ejecuta imprime el error
            print_r(connection::conect()->errorInfo());

        }
    
        //cerrar y vaciar coneccion
        $stmt1->close();
        $stmt1=null;
    }


    //Cargar datos de la compra del vehiculo a (base de datos)-------------------------------------------------------------->

    public static function user_data_client($tabla2,$datos2){
        
        $stmt1 = connection::conect()->prepare("INSERT INTO $tabla2(id_usuario, mail, vehiculo, valor_movil, valor_cuota, costo_adjudicacion) VALUES (:id_usuario, :mail, :vehiculo, :valor_movil, :valor_cuota, :costo_adjudicacion)");

        $stmt1->bindParam(":id_usuario", $datos2["id_usuario"], PDO::PARAM_STR);
        $stmt1->bindParam(":mail", $datos2["mail"], PDO::PARAM_STR);
        $stmt1->bindParam(":vehiculo", $datos2["vehiculo"], PDO::PARAM_STR);
        $stmt1->bindParam(":valor_movil", $datos2["valor_movil"], PDO::PARAM_STR);
        $stmt1->bindParam(":valor_cuota", $datos2["valor_cuota"], PDO::PARAM_STR);
        $stmt1->bindParam(":costo_adjudicacion", $datos2["costo_adjudicacion"], PDO::PARAM_STR);
        

        if($stmt1->execute()){
    
            return "Ok";
        }
        else{
    
            //si no se ejecuta imprime el error
            print_r(connection::conect()->errorInfo());

        }
    
        //cerrar y vaciar coneccion
        $stmt1->close();
        $stmt1=null;
    }


    //Seleccionar REGISTROS PARA EL LOGIN --- READ -------------------------------------------------------------->

    
        public static function view_select_register($tabla,$email,$valor){

            if($email == null && $valor== null){
    
                $stmt = connection::conect()->prepare("SELECT * FROM $tabla");
    
                $stmt -> execute();
        
                return $stmt -> fetchAll();
            }
            else{
    
                $stmt = connection::conect()->prepare("SELECT * FROM $tabla WHERE $email = :$email");
    
                $stmt->bindParam(":".$email,$valor,PDO::PARAM_STR);
                $stmt -> execute();
        
                return $stmt -> fetch();
    
            }
    
    
    
            $stmt->close();
            $stmt=null;
        }
    
    //Seleccionar REGISTROS PARA DATOS DEL CLIENTE --- READ -------------------------------------------------------------->

    public static function view_personal_data($tabla,$email,$valor){

        if($email == null && $valor== null){

            $stmt = connection::conect()->prepare("SELECT * FROM $tabla");

            $stmt -> execute();
    
            return $stmt -> fetchAll();
        }
        else{

            $stmt = connection::conect()->prepare("SELECT * FROM $tabla WHERE $email = :$email");

            $stmt->bindParam(":".$email,$valor,PDO::PARAM_STR);
            $stmt -> execute();
    
            return $stmt -> fetch();

        }



        $stmt->close();
        $stmt=null;
    }


    //Seleccionar REGISTROS PARA DATOS DEL LA COMPRA DEL CLIENTE --- READ -------------------------------------------------------------->

    public static function car_data($tabla,$email,$valor){

        if($email == null && $valor== null){
    
            $stmt = connection::conect()->prepare("SELECT * FROM $tabla");
    
            $stmt -> execute();
        
            return $stmt -> fetchAll();
        }
        else{
    
            $stmt = connection::conect()->prepare("SELECT * FROM $tabla WHERE $email = :$email");
    
            $stmt->bindParam(":".$email,$valor,PDO::PARAM_STR);
            $stmt -> execute();
        
            return $stmt -> fetch();
    
        }
    
    
    
        $stmt->close();
        $stmt=null;
    }

    

}
?>