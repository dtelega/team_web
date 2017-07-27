<?php
//Принимаем почтовые данные
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['form'];
$email=$_POST['email'];
//Куда послать письмо
$to="dima.hannasay@gmail.com";
// тема и само сообщение
$subject="Заявка на мастер-класс ИГРЫ РАЗУМА";
$message="
Письмо отправлено из моей формы <br />
Форма:".htmlspecialchars($what)."<br />
Имя: ".htmlspecialchars($name)."<br />
Телефон: ".htmlspecialchars($phone)."<br />
Email: ".htmlspecialchars($email);
$headers="From mysite.com <site-email@mysite.ru>\r\nContent-type: text/html; charset=utf-8 \r\n";
mail ($to, $subject, $message, $headers);
header('Location: thanks.html');
exit();
