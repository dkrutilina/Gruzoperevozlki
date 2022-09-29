<?php

$firstname = htmlspecialchars(trim($_POST['firstname']));
$lastname = htmlspecialchars(trim($_POST['lastname']));
$patronymic = htmlspecialchars(trim($_POST['patronymic']));
$numserpas = htmlspecialchars(trim($_POST['numserpas']));
$email = htmlspecialchars(trim($_POST['email']));
$password = htmlspecialchars(trim($_POST['password']));


if(mb_strlen($firstname) < 5 || mb_strlen($firstname) > 30) {
echo "Недопустимая длина фамилии";
exit();
}
if(mb_strlen($lastname) < 3 || mb_strlen($lastname) > 20) {
echo "Недопустимая длина имени";
exit();
}
if(mb_strlen($patronymic) < 5 || mb_strlen($patronymic) > 20) {
echo "Недопустимая длина отчества";
exit();
}
if(mb_strlen($numserpas) != 10) {
echo "Недопустимая длина номера паспорта";
exit();
}
if(mb_strlen($email) < 10 || mb_strlen($email) > 90) {
echo "Недопустимая длина e-mail";
exit();
}
if(mb_strlen($password) < 7 || mb_strlen($password) > 10) {
echo "Пароль должен быть более 7 символов";
exit();
}
$password = md5($password."dasha02072002");

/* Проверка e-mail*/
$mysql = new mysqli('localhost','root','','mybd');

$result = $mysql->query("SELECT * FROM `user` WHERE `email` =
'$email'");

$user = $result->fetch_assoc();
if(count($user) >= 1){
echo "Пользователь с таким e-mail уже существует";
exit();
} 
$mysql->close();

/* Добавление в бд*/
$mysql = new mysqli('localhost','root','','mybd');
$mysql->query("INSERT INTO `user` (`firstname`, `lastname`, `patronymic`, `numserpas`, `email`, `password`)
VALUES('$firstname', '$lastname', '$patronymic', '$numserpas', '$email', '$password')");


$mysql->close();

header('Location: ../form/avtorizac.php');

?>