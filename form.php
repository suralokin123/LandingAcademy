<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Настройки SMTP
    $smtpHost = "smtp.mail.ru";
    $smtpPort = 587;
    $smtpUsername = "your_username@mail.ru";
    $smtpPassword = "your_password";

    require 'PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    // Настройки SMTP
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->SMTPSecure = 'tls';
    $mail->Port = $smtpPort;

    // Отправитель и получатель
    $mail->setFrom($smtpUsername);
    $mail->addAddress($email);
    $mail->addReplyTo($smtpUsername);

    // Тема письма и содержимое
    $mail->Subject = "Регистрация";
    $mail->Body = "Здравствуйте, $name! Спасибо за регистрацию на нашем сайте.";

    // Отправка письма
    if(!$mail->send()) {
        echo 'Ошибка отправки письма: ' . $mail->ErrorInfo;
    } else {
        echo 'Письмо успешно отправлено';
    }
}
?>