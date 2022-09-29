<?php

$email = htmlspecialchars(trim($_POST['email']));
$password = htmlspecialchars(trim($_POST['password']));

$password = md5($password."dasha02072002");

$mysql = new mysqli('localhost','root','','mybd');

$result = $mysql->query("SELECT * FROM `user` WHERE `email` =
'$email' AND `password` = '$password'");

/* Проверка пользователя*/
$user = $result->fetch_assoc();
if(count($user) == 0){
echo "Такой пользователь не найден";
exit();
}

setcookie('user', $user['email'], time() + 3600, "/");
$mysql->close();
header('Location: ../pages/lk.php');
?>