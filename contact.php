<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'mudassarazam13@gmail.com'; 
        $mail->Password   = 'fcneyrzjbzmfeqwf'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('mudassarazam13@gmail.com', 'Mudassar');
        $mail->addAddress($_POST['email'], $_POST['name']);
        $mail->Subject = $_POST['subject'];
        $mail->Body    = $_POST['message'];

        $mail->send();
        echo "ok";
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }
?>
