<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions

if(isset($_POST['submit'])){

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'example.com';                     //SMTP username
        $mail->Password   = 'secret';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom($_POST['email']);
        $mail->addAddress('halimwuw0@gmail.com');     //Add a recipient
               
        $mail->addReplyTo($_POST['email']);
      
      
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $_POST['name'];
        $mail->Body    = $_POST['message'];
       
        
        $mail->send();
        echo "<script>
        document.location.href = 'index.php'
        alert('message has sent succesfully');
      
        </script>
    
        ";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    

}

