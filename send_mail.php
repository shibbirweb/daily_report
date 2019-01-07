<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php'; 

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $mail_from;                 // SMTP username
    $mail->Password = $mail_from_password;                           // SMTP password
    $mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($mail_from, $name);

    if (!empty($mail_to) && is_array($mail_to)) {
            foreach ($mail_to as $mail_address) {
                $mail->addAddress($mail_address);     // Add a recipient
            }
        }
    

    //Attachments
    $mail->addAttachment('output/'.$docName.'.docx');         // Add attachments

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $mail_subject;
    $mail->Body    = $email_body;

    $mail->send();
    echo '<div class="text-success">
            <i class="fa fa-smile-o fa-5x"></i>
            <h3>Mail send successfully</h3>
          </div>';
} catch (Exception $e) {
    echo '<div class="text-danger">
            <i class="fa fa-frown-o fa-5x"></i>
            <h3>Failed to send mail</h3>
            <p class="text-dark">'.$mail->ErrorInfo.'</p>
          </div>';

    if (file_exists('output/'.$docName.'.docx')) {
        unlink('output/'.$docName.'.docx');
    }
}