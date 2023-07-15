<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
$subject = $_POST['subject'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$text = $_POST['text'];

$site = $_SERVER['HTTP_HOST'];
$mailto = explode(",", $_POST['mailto']);


$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "ok";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера GMAIL
    $mail->Username   = 'mushafanil@yandex.ru'; // Логин на почте
    $mail->Password   = 'qbvhwvyhddfytsma'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('mushafanil@yandex.ru', 'Заявка с сайта'); // Адрес самой почты и имя отправителя
    // Получатель письма
    // $mail->addAddress('youremail@yandex.ru');  // Ещё один, если нужен
    foreach ($mailto as $value) {
        $mail->addAddress($value); 
    }
    // Прикрипление файлов к письму
if (!empty($_FILES['myfile']['name'][0])) {
    for ($ct = 0; $ct < count($_FILES['myfile']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['myfile']['name'][$ct]));
        $filename = $_FILES['myfile']['name'][$ct];
        if (move_uploaded_file($_FILES['myfile']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Неудалось прикрепить файл ' . $uploadfile;
        }
    }   
}
        // -----------------------
        // Само письмо
        // -----------------------
        $mail->isHTML(true);
    
        $mail->Subject = 'Заявка с сайта';
        $mail->Body    = "
        <b>Сайт:</b> $site <br>
        <b>Форма:</b> $subject<br>
        <b>Имя:</b> $name<br>
        <b>Контактный телефон:</b> $phone<br>
        <b>Сообщение:</b> $text<br>";
// Проверяем отравленность сообщения
if ($mail->send()) {
    echo "$msg";
} else {
    echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
}
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}