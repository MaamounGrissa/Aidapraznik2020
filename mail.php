<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Get Data from jQuery
$mydata = $_POST['myData'];

if(!empty($mydata) && isset($mydata)){
    // var_dump($Quiz);die;
    // Get Variables
    $name = filter_var($mydata['name'], FILTER_SANITIZE_STRING);
    $subject = filter_var($mydata['subject'], FILTER_SANITIZE_STRING);
   // $msg = filter_var($mydata['message'], FILTER_SANITIZE_STRING);
   // Delete Filter for Leave HTML Tags in MSG
    $msg = $mydata['message'];

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    ob_start();
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                       // Enable verbose debug output
    $mail->isSMTP();                                             // Send using SMTP
    $mail->Host       = 'SMTP HOST';                 // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                    // Enable SMTP authentication
    $mail->Username   = 'USERNAME';              // SMTP username
    $mail->Password   = 'PASSWORD';  // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('MAIL:FROM', $name);
    $mail->addAddress('MAIL:TO', 'YOUR NAME');     // Add a recipient
    // $mail->addAddress('ellen@example.com');                           // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;

    // Email Body
    
    $mail->Body    = $msg;

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