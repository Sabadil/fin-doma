<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$vakansii = $_POST['input-vakansii'];
$site = $_SERVER['HTTP_HOST'];
$mailto = explode(",", $_POST['mailto-modal']);


$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "ok";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера GMAIL
    $mail->Username   = 'fanil.smtp@gmail.com'; // Логин на почте
    $mail->Password   = 'qwertyasdfgh1234'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('fanil.smtp@gmail.com', 'Отклик на вакансию'); // Адрес самой почты и имя отправителя
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
    
        $mail->Subject = 'Отклик на вакансию';
        $mail->Body    = "
        <b>Сайт:</b> $site <br>
        <b>Вакансия:</b> $vakansii <br>
        <b>Имя:</b> $name<br>
        <b>Контактный телефон:</b> $phone<br>
        <b>Эл. почта:</b> $email<br>";
// Проверяем отравленность сообщения
if ($mail->send()) {
    echo "$msg";
} else {
echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
}
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}