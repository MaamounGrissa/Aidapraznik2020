<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Get Object Quiz from jQuery
$userData = $_POST['Contact'];

if(!empty($userData) && isset($userData)){
   // var_dump($Quiz);die;
    // Get Variables
    $userName = filter_var($userData['name'], FILTER_SANITIZE_STRING);
    $userPhone = filter_var($userData['phone'], FILTER_SANITIZE_NUMBER_INT);
    $userMsg = filter_var($userData['msg'], FILTER_SANITIZE_STRING);

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    ob_start();
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                       // Enable verbose debug output
    $mail->isSMTP();                                             // Send using SMTP
    $mail->Host       = 'smtp.elasticemail.com';                 // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                    // Enable SMTP authentication
    $mail->Username   = 'grissa.maamoun@gmail.com';              // SMTP username
    $mail->Password   = '5b8a5a39-e442-46f5-b1f7-27818f4e3359';  // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 2525;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('grissa.maamoun@gmail.com', $userName);
    $mail->addAddress('grissa.maamoun@gmail.com', 'Maamoun Grissa');     // Add a recipient
    // $mail->addAddress('ellen@example.com');                           // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mail From Contact Form';

    // Email Body
    
    $mail->Body    = '<div><h3>Email From : ' . $userName .'</h3><h3>Telephone : ' . $userPhone . '</h3>'.
                     '<p><strong>Message :</strong>' . $userMsg . '</p></div>';
                     

    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    $mail->send();
    
    $output = ob_get_clean();
    header('Content-Type: application/json');
    //Javascript Object Notation
    $data = '{"Status":200,"Message":"success"}';
    echo json_encode($data);

} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    $output = ob_get_clean();
    header('Content-Type: application/json');
    //Javascript Object Notation
    $data = '{"Status":200,"Message":""Message could not be sent. Mailer Error"}';
    echo json_encode($data);
}

}
?>