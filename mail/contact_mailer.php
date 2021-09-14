<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//controlador de envio de mensajes (consultas a mail oficial de la pagina)

class sendMessage{

public function message(){
    
    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

try {

    if(isset($_POST["name1"])){
            
        if(!empty($_POST["name1"]) &&
            !empty($_POST["car"]) &&
            !empty($_POST["email1"]) &&
            !empty($_POST["phone1"]) &&
            !empty($_POST["message"])){

            $name= $_POST["name1"];
            $car= $_POST["car"];
            $email= $_POST["email1"];
            $phone= $_POST["phone1"];
            $message= $_POST["message"];

            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output (SERVER/OFF)
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'your email';                     //SMTP username
            $mail->Password   = 'your password.';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('your email', 'No-reply(Consultas)');   //desde donde se envia el email
            $mail->addAddress('you email', 'No-reply(Consultas)');     //el destino donde llega el email


            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //archivos e imagenes adjuntos
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //archivos e imagenes adjuntos

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $car;      //Asunto
            $mail->Body    = $message.'<br>'.'<br>'.'<br>'.
                             'Nombre: '.$name.'<br>'.
                             'Email: '.$email.'<br>'.
                             'Telefono: '.$phone.'<br>'.
                             'Auto: '.$car.'<br>';  //se pueden agregar etiquetas HTML, aqui va tu mensaje

            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; //mensaje alternativo

            $mail->send();

            echo "El mensaje ha sido enviado correctamente";
                       
        }
        else{
            
            echo "Complete todos los campos para enviar el mensaje";
            
        }

    }

} catch (Exception $e) {
    echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
}

}

}