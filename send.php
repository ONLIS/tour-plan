<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
if(isset($_POST['name']) && isset( $_POST['phone']) && isset($_POST['message']))
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
if(isset($_POST['name']) && isset( $_POST['phone']) && isset( $_POST['e-mail']) && isset($_POST['message']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $e-mail = $_POST['e-mail'];
    $message = $_POST['message'];
    $title = "Новое обращение с сайта Best Tour Plan";
    $body = "
    <h2>Новое письмо</h2>
    <b>Имя:</b> $name<br>
    <b>Телефон:</b> $phone<br><br>
    <b>Email:</b> $e-mail<br><br>
    <b>Сообщение:</b><br>$message
    ";
    $thnks_txt = "Message is send!";
    $thnks_more_txt = "I will call you soon";
}
elseif(isset($_POST["email"])){
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

    // Прикрипление файлов к письму
/*
if (!empty($file['name'][0])) {
    for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
        $filename = $file['name'][$ct];
        if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
            $rfile[] = "Файл $filename прикреплён";
        } else {
            $rfile[] = "Не удалось прикрепить файл $filename";
        }
    }   
}
*/
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

// Отображение результата
//echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
//header("Location: thanks.php");
include("thanks.php");