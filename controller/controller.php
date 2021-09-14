<?php


//Controlador de paginas (dinamicas)----------------------------------------------->
class MvcController{

    public function plantilla(){
        
        include "views/templates/inicio.php"; //include: sirve para incluir rutas de otros archivos
    }

    #interaccion con el usuario: mostrar la vista de las Paginas segun selecciona (Header)
    public function enlacesPaginasController(){

        if(isset($_GET["action"]))
        {
            $enlace = $_GET["action"];
        }
        else{
            $enlace = "index";
        }
        
        $respuesta= EnlacesPaginas::enlacesPaginasModel($enlace);
        
        include $respuesta;
    }
    

}

//Controlador de formulario (registro) ---------------------------------------------------------->
class controllerForm{

    //Registrarse
    public function register(){

        if(!empty($respuesta)){

            echo "<script>
            
            if(window.history.replaceState){
                window.history.replaceState( null, null, window.location.href ); 
            }
            </script>";
        }

        if(isset($_POST["send"])){

            $tabla= "usuarios";
            $tabla1= "permisos_usuarios";
            $tabla2= "datos_clientes";
            $email= "mail";
            $valor= $_POST["email"];

            $respuesta= EnlacesPaginas::data_register($tabla,$email,$valor); //$data

            //en caso de que algun dato no coincida (no enviar)-------------------------------------------------->

            if($_POST["email"]!=$_POST["emailcheck"]){

                echo'<script> document.querySelector(".error_mail").style.display="block"; </script>';

            }

            if($_POST["password"]!=$_POST["checkpassword"]){

                echo'<script> document.querySelector(".error_password").style.display="block"; </script>';
                
            }

            if(!isset($_POST["genre"]) || $_POST["genre"]==null){

                echo'<script> document.querySelector(".error_genre").style.display="block"; </script>';
                
            }

            if(!isset($_POST["conditions"]) || $_POST["conditions"]==null){

                echo '<script> document.querySelector(".error_conditions").style.display="block"; </script>';
            }

            if(!isset($_POST["personaldata"]) || $_POST["personaldata"]==null){

                echo '<script> document.querySelector(".error_conditions").style.display="block"; </script>';
            }
    
            //si el mail coincide con el de la base de datos salir y devolver respuesta------------------------->
            else if (!empty($respuesta["mail"]) && $respuesta["mail"]  == $_POST["email"]){
        
            $entry= "El mail ingresado ya se encuentra registrado";

            echo'<script> document.querySelector(".alert_mail").style.background="red"; </script>';
            echo'<script> document.querySelector(".alert_container").style.display="flex"; </script>';
            
            return $entry;
        
            }           

            // caso de que todo coincida (enviar)
            else if($_POST["name"]!=null&&
                    $_POST["surname"]!=null&&
                    $_POST["dni"]!=null&&
                    $_POST["birthdate"]!=null&&
                    isset($_POST["genre"])&&
                    $_POST["phone"]!=null&&
                    $_POST["email"]!=null&&
                    $_POST["password"]!=null&&
                    isset($_POST["conditions"])&&
                    isset($_POST["personaldata"])
                    ){

                $datos = array("nombre"=> $_POST["name"],
                "apellido"=> $_POST["surname"],
                "documento"=> $_POST["dni"],
                "nacimiento"=> $_POST["birthdate"],
                "genero"=> $_POST["genre"],
                "telefono"=> $_POST["phone"],
                "mail"=> $_POST["email"],
                "contrasena"=> password_hash($_POST["password"], PASSWORD_DEFAULT, ["cost" => 10]) );
                

                //terminos y condiciones del servicio SI/NO
                if(!isset($_POST["communication"]) || $_POST["communication"]==null){

                    $_POST["communication"]="no";
                    
                }

                $datos1 = array("terminos_condiciones"=> $_POST["conditions"],
                "compartir_datos"=> $_POST["personaldata"],
                "comunicaciones_email"=> $_POST["communication"],
                "mail"=> $_POST["email"]);

                $datos2 = array("id_usuario"=>'',"mail"=> $_POST["email"],
                "vehiculo"=>'', "valor_movil"=>'',
                "valor_cuota"=> '', "costo_adjudicacion"=>'');

                $respuesta1= EnlacesPaginas::user_register($tabla,$datos);
                $respuesta2= EnlacesPaginas::user_permissions($tabla1,$datos1);
                $respuesta3= enlacesPaginas::user_data_client($tabla2,$datos2);
                
                echo'<script> document.querySelector(".alert_mail").style.background="green"; </script>';
                echo'<script> document.querySelector(".alert_container").style.display="flex"; </script>';

                return $respuesta1;


            }
    

    
        }


    }

    //Loguearse -------------------------------------------------------------------->

    public function login(){

        if(!empty($_POST["i_mail"]) || !empty($_POST["i_pass"])){

            $tabla= "usuarios";
            $email= "mail";
            $valor= $_POST["i_mail"];

            $respuesta = EnlacesPaginas::view_select_register($tabla,$email,$valor);


            //vaciar cache de "tmp_login
            if(empty($_SESSION["tmp_login"])){
                session_destroy();
            }


            if ($respuesta["mail"] == $_POST["i_mail"] && password_verify($_POST["i_pass"],$respuesta["contrasena"])){

                //en caso de que coindidan email= email-baseDeDatos y password= password-baseDeDatos entonces
                //creamos una sesion para el usuario (utilizando las variables de sesion de templates session_start();)

                $_SESSION["tmp_login"]= "ok";

                echo "<script>
                if(window.history.replaceState){
                    window.history.replaceState( null, null, window.location.href ); 
                }
                </script>";

            }
            else{
                
                //echo 'El usuario no esta registrado';

                $_SESSION["tmp_login"]= "no_entry";

                echo "<script>
                if(window.history.replaceState){
                    window.history.replaceState( null, null, window.location.href ); 
                }
                </script>";
                
            }

            
        }

    }

    //traer datos de tablas (Clientes) ---------------------------------------------------->

    public function personal_data(){

        if(isset($_POST["i_mail"])){

            $tabla= "usuarios";
            $email= "mail";
            $valor= $_POST["i_mail"];

            $respuesta = EnlacesPaginas::view_personal_data($tabla,$email,$valor);

            //si el usuario y la contraseña coinciden imprimir datos
            if ($respuesta["mail"] == $_POST["i_mail"] && password_verify($_POST["i_pass"],$respuesta["contrasena"])){

                //echo"<pre>";print_r($respuesta);echo"</pre>";

                return $respuesta;

            }
    

        }

    }

    //traer datos de tablas (vehiculo adjudicado)---------------------------------------------------------------->

    public function car_data(){

        if(isset($_POST["i_mail"])){

            $tabla= "datos_clientes";
            $email= "mail";
            $valor= $_POST["i_mail"];

            $respuesta = EnlacesPaginas::view_personal_data($tabla,$email,$valor);

            //si el usuario y la contraseña coinciden imprimir datos

            return $respuesta;
    
        }

    }












}





?>