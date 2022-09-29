<?php
$email = htmlspecialchars(trim($_POST['email']));
$adressot = htmlspecialchars(trim($_POST['adressot']));
$adresspol = htmlspecialchars(trim($_POST['adresspol']));
$ves = htmlspecialchars(trim($_POST['ves']));
$dlina = htmlspecialchars(trim($_POST['dlina']));
$shirina = htmlspecialchars(trim($_POST['shirina']));
$vusota = htmlspecialchars(trim($_POST['vusota']));
$harakter = htmlspecialchars(trim($_POST['harakter']));
$date = htmlspecialchars(trim($_POST['date']));
$number = htmlspecialchars(trim($_POST['number']));



/*(Совпадение с email)*/

if(mb_strlen($ves) < 1 || mb_strlen($ves) > 3) {
echo "Недопустимый вес";
exit();
}
if(mb_strlen($dlina) !=1) {
echo "Недопустимая длина";
exit();
}
if(mb_strlen($shirina) != 1) {
echo "Недопустимая ширина";
exit();
}
if(mb_strlen($vusota) != 1 ) {
echo "Недопустимая высота";
exit();
}

if(mb_strlen($number) != 11) {
echo "Недопустимая длина номера";
exit();
}

$mysql = new mysqli('localhost','root','','mybd');
$mysql->query("INSERT INTO `gruz` (`email`, `adressot`, `adresspol`, `ves`, `dlina`, `shirina`, `vusota`, `harakter`, `date`,`number`)
VALUES('$email', '$adressot', '$adresspol', '$ves', '$dlina', '$shirina', '$vusota', '$harakter','$date', '$number')");
$mysql->close();
header('Location: ../pages/otpravka.php');
?>
