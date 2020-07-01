<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$feedback = htmlspecialchars($feedback);
$fio = urldecode($fio);
$email = urldecode($email);
$feedback = urldecode($feedback);
$fio = trim($fio);
$email = trim($email);
$feedback = trim($feedback);
echo $fio;
echo "<br>";
echo $email;
echo "<br>";
echo $feedback;
if (mail("example@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {     echo "<br>сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>