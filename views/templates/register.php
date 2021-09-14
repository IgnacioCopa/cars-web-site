<link rel="stylesheet" href="views/css/register.css">

<!-----PHP-------->
<div class="alert_container" style="display: none;
    justify-content: center;
    margin-top: 6%;
    font-size: unset;
    ">

<p class="alert_mail" style="box-shadow: 0px 0px 6px 3px;
    padding: 1% 6%;
    border-radius: 10px;
    opacity: 0.5;
    color: white;">
    <?php
    $register = new controllerForm();
    $resp=$register -> register();
    echo $resp;
?></p>
</div>


<div class="register_box">
    <form class="register_form" action="#" method="post">

    <div class="user-box">
        <div class="box">
        <label for="EMAIL">Email</label>
        <input type="email" id="EMAIL" name="email">
        <p class="error_mail">El email no coincide</p>
        </div>

        <div class="box">
        <label for="EMAIL_CHECK">Confirmar Email</label>
        <input type="email" id="EMAIL_CHECK" name="emailcheck">
        <p class="error_mail">El email no coincide</p>
        </div>
    </div>

        <!-------------------------------------------------->

    <div class="user-box">
        <div class="box">
        <label for="NAME">Nombre</label>
        <input type="text" id="NAME" name="name">
        </div>

        <div class="box">
        <label for="SURNAME">Apellido</label>
        <input type="text" id="SURNAME" name="surname">
        </div>
    </div>
        <!-------------------------------------------------->

    <div class="user-box">
        <div class="box">
        <label for="BIRTH_DATE">Fecha De Nacimiento</label>
        <input type="date" id="BIRTH_DATE" name="birthdate">
        </div>

        <div class="box">
        <label for="DNI">Numero De Documento</label>
        <input type="number" id="DNI" placeholder="Sin puntos" name="dni">
        </div>
    </div>
        <!-------------------------------------------------->

    <div class="user-box">
        <div class="box">

        <p>Genero</p>
        <div class="genre-box">
        <label for="MALE">Masculino</label>
        <input type="checkbox" id="MALE" value="masculino" name="genre" >
        </div>

        <div class="genre-box">
        <label for="FEMALE">Femenino</label>
        <input type="checkbox" id="FEMALE" value="femenino" name="genre" >
        </div>

        <p class="error_genre">Debe seleccionar un genero</p> <!--error genre-->

        </div>

        <div class="box">
        <label for="PHONE">Telefono</label>
        <div class="phone-box">
        <input class="phone-area" type="number" id="PHONE_AREA" placeholder="Sin 0">
        <input class="phone-number" type="number" id="PHONE" placeholder="Sin puntos" name="phone">
        </div>
        </div>
    </div>
        
        <!-------------------------------------------------->
    <div class="user-box">
        <div class="box">
        <label for="PASSWORD">Contraseña</label>
        <input type="password" id="PASSWORD" name="password">
        <p class="error_password">Las contraseñas no coinciden</p>
        </div>

        <div class="box">
        <label for="CHECK_PASSWORD">Confirmar Contraseña</label>
        <input type="password" id="CHECK_PASSWORD" name="checkpassword">
        </div>
    </div>
    
        <!--Terminos y condiciones de uso de la plataforma-->
        <div class="user-box-conditions">
        <div class="conditions-box">
        <input class="check-box" type="checkbox" id="CONDITIONS" value="si" name="conditions">
        <p> Acepto Términos y condiciones de uso y política de privacidad de Gewinn Gruppe (obligatorio)</p>
        </div>

        <div class="conditions-box">
        <input class="check-box" type="checkbox" id="PERSONAL_DATA" value="si" name="personaldata">
        <p>Acepto compartir mis datos con Gewinn Gruppe (obligatorio)</p>
        </div>

        <div class="conditions-box">
        <input class="check-box" type="checkbox" id="COMMUNICATION" value="si" name="communication">
        <p>Acepto recibir comunicaciones de Gewinn Gruppe (opcional)</p>
        </div>

        <p class="error_conditions">Debe seleccionar los campos obligatorios</p>
        </div>

        <div class="register">
        <input type="submit" id="REGISTRAR" value="Registrar" name="send">
        </div>

    </form>

<script>

    //solo se puede seleccionar una opcion (genero)

    document.getElementById("MALE").addEventListener("click",change_s);
    document.getElementById("FEMALE").addEventListener("click",change_s);
    
    function change_s(){

        let male= document.getElementById("MALE").checked;
        let female= document.getElementById("FEMALE").checked;
        

        if(male){
            female=document.getElementById("FEMALE").checked=false;
            
        }

        else{
            female=document.getElementById("FEMALE").checked=false;
            male=document.getElementById("FEMALE").checked=true;
        }

    }

</script>
 
</div>