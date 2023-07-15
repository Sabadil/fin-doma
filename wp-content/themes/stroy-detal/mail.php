<?php
    $to = 'xxx@gmail.com';
    $subject = 'Заявка с сайта';

    if($_POST['page'] != '') {
        $page = $_POST['page'];
    } else {
        $page = 'Главная';
    }


if ($_POST['type'] == 'contacts-form') {
    $message = '
            <html>
                <head>
                    <title>'.$subject.'</title>
                </head>
                <body>
                    <p><b>Форма на странице контактов</b></p>
                    <p>Имя: '.$_POST['name'].'</p>
                    <p>Телефон: '.$_POST['phone'].'</p>
                    <p>E-mail: '.$_POST['email'].'</p>
                    <p>Текст письма: '.$_POST['message'].'</p>
                    <p>Согласие на обработку персональных данных: '.$_POST['personal_data'].'</p>
                </body>
            </html>'; 
} else {
    $message = '
            <html>
                <head>
                    <title>'.$subject.'</title>
                </head>
                <body>
                    <p><b>Обратный звонок</b></p>
                    <p>Страница: '.$page.'</p>
                    <p>Форма: '.$_POST['type'].'</p>
                    <p>Имя: '.$_POST['name'].'</p>
                    <p>Телефон: '.$_POST['phone'].'</p>
                    <p>E-mail: '.$_POST['email'].'</p>
                </body>
            </html>'; 
}
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    mail($to, $subject, $message, $headers);
?>