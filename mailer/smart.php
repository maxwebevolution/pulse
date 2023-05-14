<?php
$name = $_POST['name'];
$email = $_POST['mail'];
$phone = $_POST['phone'];

require_once ('phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mail';                 // SMTP username
$mail->Password = 'mail';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('mail', 'Pulse');
$mail->addAddress('mail');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Данные';
$mail->Body    = 'Пользователь оставил данные <br> Имя: '.$name.'<br> Номер телефона: '.$phone.'<br> Email: '.$email.'';
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    return false;
} else {
    return false;
}