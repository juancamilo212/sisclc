<?php

class send_email
{

    public function envioCorreo($tipo, $correo,$password)
    {
        $hostmail = 'smtp.gmail.com:587';
        $usermail = 'corpo.nasakiwe@gmail.com';
        $passmail = 'diwkgiqzffxiobaf';
        $portmail = 465;           //587 tsl y 465 para ssl
        $instmail = 'corpo.nasakiwe@gmail.com';
        $nommail = 'NASA KIWE';
        //$tipo = 1 // envio masivo de correos
        //$tipo = 2 // Activar usuario

        // require __DIR__ . "/../../reportes/mailer/PHPMailerAutoload.php";
        require "../../extensiones/mailer/PHPMailerAutoload.php";
        //require 'PHPMailerAutoload.php';
        $mail = new PHPMailer(true);

        $mail->SMTPDebug = 0;                             // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        //$mail->isMail();
        $mail->Host = 'smtp.gmail.com';               // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = $usermail;        // SMTP username
        $mail->Password = $passmail;   // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = $portmail;                 // TCP port to connect to

        $mail->From = $instmail;
        $mail->FromName = $nommail;

        
      $mail->addAddress($correo, "Señor Usuario");                // Add a recipient

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->CharSet = "UTF-8";
        if ($tipo == 1) {
            $asunto = "Nasa Kiwe";
            $asunto = "=?UTF-8?B?" . base64_encode("Recuperación de contraseña Nasa Kiwe") . "=?=";
            $mail->Subject = utf8_encode($asunto);
            $mail->Body = "<html xmlns=\"http://www.w3.org/1999/xhtml\">
               <head>
               <meta name=\"viewport\" content=\"width=device-width\" />
               <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
               <title>Eliteadmin Responsive web app kit</title>
               </head>
               <body style=\"margin:0px; background: #f8f8f8; \">
               <div width=\"100%\" style=\"background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;\">
               <div style=\"max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px\">
               <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%; margin-bottom: 20px\">
               <tbody>
               <tr>
               <td style=\"vertical-align: top; padding-bottom:30px;\" align=\"center\"><a target=\"_blank\"><img src=\"https://www.nasakiwe.gov.co/wp-content/uploads/nasakiwe-logo.png\" alt=\"NasaKiwe\" style=\"border:none\"><br/>
               </a> </td>
               </tr>
               </tbody>
               </table>
               <div style=\"padding: 40px; background: #fff;\">
               <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\">
               <tbody>
               <tr>
               <td>
               <p>Su nueva contraseña para ingresar al sistema Nasa Kiwe es <strong>{$password}</strong>, lo invitamos a actualizarla una vez ingrese al sistema.</p>
               <p>Nasa Kiwe, estamos trabajando para mejorar. </p>
               <b>- Gracias</b> </td>
               </tr>
               </tbody>
               </table>
               </div>
               <div style=\"text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px\">
               <p> Powered by Nasa Kiwe  <br>info@nasakiwe.gov.co

               </p>
               </div>
               </div>
               </div>
               </body>
               </html>";
        }
        if (!$mail->send()) {
            echo "Message could not be sent.";
            echo "Mailer Error: " .$mail->ErrorInfo;
        }
    }
}