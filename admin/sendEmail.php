<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (isset($_POST["submit"])) {
   $mail = new PHPMailer(true);

   $mail->isSMTP();
   $mail->Host = "smtp.gmail.com";
   $mail->SMTPAuth =true;
   $mail->Username = 'useremailhere@gmail.com';
   $mail->Password = 'userpasswordhere';
   $mail->SMTPSecure = 'ssl';
   $mail->Port = 465;
    $mail->setFrom($email, $name);
    $mail->addAddress('useremailhere@gmail.com', $name);     //Add a recipient
    $mail->addAddress('useremailhere@gmail.com');               //Name is optional
    $mail->addReplyTo('useremailhere@gmail.com', 'Information');
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
   $mail->send();

   echo "
   <script> 
      alert('Message Sent Successfully');
      document.location.href = 'admin_contact.php';
   </script>
   ";

}
