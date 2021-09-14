<link rel="stylesheet" href="views/css/contact.css">

<main>

<div class="box-content1">
    <h3>Contacto</h3>
    <p>Si tienes alguna duda o consulta puedes contactarnos por medio de cualquiera de nuestros medios oficiales. <br>
    Recuerda que Gewinn Gruppe nunca solicitara tu usuario, contraseña o datos personales para ni se comunicara con usted por cualquier otro medio no autorizado. <br>
    Los unicos medios para el contacto con la administración son los mencionados en este formulario.
    </p>

    <hr color="red" width="100%" size="3%">

    <div class="contact_box">

       
        <p class="link_s">
            <b>Gewinn Gruppe S.R.L</b><br><br>
                ​

            Email:<br> 
            
            <b>info@gewinngruppe.com.ar</b><br><br><br>

                ​

            Facebook:<br> 

            <a href="https://www.facebook.com/gewinngruppe">https://www.facebook.com/gewinngruppe</a><br><br><br>

                ​

            Instagram:<br> 

            <a href="https://www.instagram.com/gewinngruppe">https://www.instagram.com/gewinngruppe</a><br><br><br>

                ​

            Twitter:<br>

            <a href="https://twitter.com/GruppeGewinn">https://twitter.com/GruppeGewinn</a><br><br>

                ​

            Tel:<br>
            
            <b>0800-999-2266</b><br>
        </p>
        
            
        <form class="contact_form" action="#" method="post">

            <div class="input_send">
            <input type="text" placeholder=" Nombre" name="name1">
            <input type="text" placeholder=" Asunto" name="car">
            <input type="email" placeholder=" E-mail" name="email1">
            <input type="number" placeholder=" Tel" name="phone1">
            </div>

            <div class="text_send">
            <textarea placeholder=" Mensaje" name="message" id="" cols="30" rows="10" style="width: 100%; outline:none; margin: 2% 0"></textarea>
            <div class="input_sub"><input type="submit" value="Enviar" name="sendmesagge"></div>
            </div>

            <p class="mail_status2"><?php  $mvc2 = new sendMessage(); $mvc2 -> message(); ?></p>
        </form>
    </div>

</div>

</main>

<div class="foot">
    <div>
        <p>© 2021 Gewinn Gruppe S.R.L. - Argentina</p>
        <a href="">No compartiremos su información. Leé nuestros términos y condiciones.</a>
    </div>
</div> 