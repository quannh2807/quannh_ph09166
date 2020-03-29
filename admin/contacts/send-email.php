<?php
require '../_share/lib/PHPMailer/src/Exception.php';
require '../_share/lib/PHPMailer/src/PHPMailer.php';
require '../_share/lib/PHPMailer/src/SMTP.php';
$recceiver = $_POST['recceiver'];
$subject = $_POST['subject'];
$content = $_POST['content'];

$listRecceiver = explode(",", $recceiver);
// var_dump($recceiver, $subject, $content);die;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->CharSet = 'utf8';                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'quannh2807@gmail.com';                     // SMTP username
    $mail->Password   = 'Quan2871@';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('helgrindxxx@gmail.com', 'Quan Nguyen');
    foreach($listRecceiver as $recceiverEmail){
        $mail->addAddress($recceiverEmail);
    }
    $mail->addReplyTo('quannh2807@gmail.com', 'Quan Nguyen');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $content;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



?>