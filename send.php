<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
if(isset($_POST['name']) && isset( $_POST['phone']) && isset($_POST['message']) && !isset( $_POST['email']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $title = "Новое обращение с сайта Best Tour Plan";
    $body = "
    <h2>Новое письмо</h2>
    <b>Имя:</b> $name<br>
    <b>Телефон:</b> $phone<br><br>
    <b>Сообщение:</b><br>$message
    ";
    $thnks_txt = "Message is send!";
    $thnks_more_txt = "I will call you soon";
    }
elseif(isset($_POST['name']) && isset( $_POST['phone']) && isset( $_POST['email']) && isset($_POST['message']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $e_mail = $_POST['email'];
    $message = $_POST['message'];
    $title = "Новое обращение с сайта Best Tour Plan";
    $body = "
    <h2>Новое письмо</h2>
    <b>Имя:</b> $name<br>
    <b>Телефон:</b> $phone<br><br>
    <b>Email:</b> $e_mail<br><br>
    <b>Сообщение:</b><br>$message
    ";
    $thnks_txt = "Message is send!";
    $thnks_more_txt = "I will call you soon";
}
elseif(isset($_POST["email"]) && !isset($_POST['phone'])){
    $email = $_POST["email"];
    $title = "Подписка на новости сайта Best Tour Plan";
    $body = "<h2>Новая подписка</h2><b>E-mail:</b> $email<br>";
    $thnks_txt = "Спасибо за подписку!";
    $thnks_more_txt = "Теперь вы будете в курсе последних новостей Best Tour Plan!";

}

// Формирование самого письма

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'info@onl.is'; // Логин на почте
    $mail->Password   = 'xqbatepaezyihuqj'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('info@onl.is', 'Алексей Бармин'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('aleksei@onl.is');  
// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

include("thanks.php");