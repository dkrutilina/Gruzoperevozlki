<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Дорожный экспресс | Грузоперевозки</title>
<link rel="shortcut icon" href="images/icon.png" type="image/png">
<link href="../css/stranica.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../css/kabinet.css" rel="stylesheet" type="text/css" media="all"/>
<style>
   table {
    width: 100%; /* Ширина таблицы */
    border-collapse: collapse; /* Убираем двойные границы */
   }
   td, th {
    border: 1px solid #333; /* */
    padding: 3px; /* Поля в ячейках */
   }
   thead, tfoot {
    background: #f0f0f0; /* Цвет фона */
   }
   tbody:hover {
    background: #f5e0cd; /* Цвет фона при наведении курсора */
    color: #ce232a; /* Цвет текста */
   }
  </style>
</head>

<body>
<div id = "wrap">
<header>
<div id = "logo">
<div class="logo"> <a> Дорожный экспресс </a> </div>
<div class="logo_deyat"> <a> Грузоперевозки </a> </div>
</div>
<ul class="header">
<li>
<div class="he-text">
Адрес
<span class="">г. Кстово ул Больничная, 24 </span>
</div>
</li>
<li>
<div class="he-text">
Телефон
<span class="">+7 (904) 920 47 77</span>
</div>
</li>
<li>
<div class="he-text">
Часы работы
<span class="">Пн-Пт с 10:00 до 19:00</span>
</div>
</li>
</ul>

</header>
<hr class="line"/>

<nav>


<a href="kabinet.html">Главная</a>
<a href="../form/gruz.php">Заказ перевозки</a>
<a href="otpravka.php">Отправки и получения</a>
<a href="lk.php">Профиль</a>
<a href="../stranica.html" class="right">Выйти</a>

</nav>

<?php
$mysql = new mysqli('localhost','root','','mybd');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$user=$_COOKIE['user'];

$query="SELECT * FROM `gruz` WHERE `email` ='$user'";
$result = $mysql->query($query);

?>
<div class = "center3">
<h2> Данные о перевозках</h2>
<form action="../php/avtoriz.php" method="post">

<table>
   <thead>
    <tr>
     <th>Адрес отправителя </th>
     <th>Адрес получателя</th>
     <th>Вес груза</th>
     <th>Длина груза</th>
     <th>Ширина груза</th>
     <th>Высота груза</th>
     <th>Характер груза</th>
     <th>Дата</th>
     <th>Номер телефона</th>
    </tr>
   </thead>

   <tbody>
   <?php
    while ($row=$result->fetch_assoc()){
   
    echo "<tr>";

    echo "<td>" . $row['adressot'].  "</td>";
    echo "<td>" . $row['adresspol'] . "</td>";
    echo "<td>" . $row['ves'] . "</td>";
    echo "<td>" . $row['dlina'] . "</td>";
    echo "<td>" . $row['shirina'] .  "</td>";
    echo "<td>" . $row['vusota'] .  "</td>";
    echo "<td>" . $row['harakter'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['number'] . "</td>";
    echo "</tr>";
   }
   echo "</tbody>";
  echo "</table>";
  ?>


</form>

<a class="back_to_top" title="Наверх"> ↑ </a>
<script src="../script/script.js"></script>


</div>

</body>
</html>
