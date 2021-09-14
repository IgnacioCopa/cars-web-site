<main>
      <div class="Box_3">
          <input id="back" type="button" value="<">
          <img alt="" id="image" alt="slider_image" width="100%" >
          <input id="next" type="button" value=">">
      </div>
      <div class="Populares">
        <p>Mas Populares</p>
        <hr color="red" size="3%" width="100%">
      </div>
      <div class="Box_4">

            <section class="Populares_img" id="P_click">
              <div class="Car_1">
                <img src="img/hilux.png" alt="" >
                <p>hilux</p>
                <!--<p></p>-->
                <p>El vehículo Pick Up Toyota Hilux lidera el ranking de los vehículos más vendidos del Año 2021.</p>
                <p>Cuotas desde:</p>
                <!--<p></p>-->
              </div>

              <div class="Car_2">
                <img src="img/renault kangoo.png" alt="" >
                <p>hilux</p>
                <!--<p></p>-->
                <p>El vehículo Pick Up Toyota Hilux lidera el ranking de los vehículos más vendidos del Año 2021.</p>
                <p>Cuotas desde:</p>
                <!--<p></p>-->
              </div>
              
              <div class="Car_3">
                <img src="img/Focus.png" alt="" >
                <p>hilux</p>
                <!--<p></p>-->
                <p>El vehículo Pick Up Toyota Hilux lidera el ranking de los vehículos más vendidos del Año 2021.</p>
                <p>Cuotas desde:</p>
                <!--<p></p>-->
              </div>  
            </section> 

      </div>
</main>
<footer>
        <div class="Box_5">
            <img src="img/Banner_0km.PNG" alt="" width="100%">
            <div class="Help_us">
                <p>¿En que podemos ayudarte?</p>
                <form action="#" method="post">
                    <input type="text" placeholder=" Nombre" name="name1">
                    <input type="text" placeholder=" Vehículo" name="car">
                    <input type="email" placeholder=" E-mail" name="email1">
                    <input type="number" placeholder=" Tel" name="phone1">
                    <textarea placeholder=" Mensaje" name="message" id="" cols="30" rows="10" style="width: 100%; outline:none; margin: 2% 0"></textarea>
                    <input type="submit" value="Enviar" name="sendmesagge">
                    <p class="mail_status"><?php  $mvc2 = new sendMessage(); $mvc2 -> message(); ?></p>
                </form>
            </div>

            <div class="g_logo">
                <img src="img/gewinn_logo2.png" alt="">
            </div>

            <div class="contact">
                <div class="contact_tel_mail">
                    <div class="tel"><p>Tel: 0800-999-2266</p></div>
                    <p>Email: info@gewinngruppe.com.ar</p>
                </div>
                <div class="img_contact">
                    <a href="https://www.facebook.com/gewinngruppe/"><img src="img/Face_icon.png" alt=""></a>
                    <a href="https://www.instagram.com/gewinngruppe/?hl=en"><img src="img/Insta_icon.png" alt=""></a>
                    <a href="https://twitter.com/GruppeGewinn"><img src="img/Twit_icon.png" alt=""></a>
                </div>
            </div>
            <div>
            <p class="condiciones">Este sitio web cuenta con términos y condiciones y políticas
                de privacidad, todas las imágenes son meramente ilustrativas.</p>
                <p class="condiciones">Al visitar el sitio usted acepta estos términos mencionados anteriormente.</p>
            </div>
        </div>
        <div class="foot">
            <div>
                <p>© 2021 Gewinn Gruppe S.R.L. - Argentina</p>
                <a href="">No compartiremos su información. Leé nuestros términos y condiciones.</a>
            </div>
        </div>  
</footer>