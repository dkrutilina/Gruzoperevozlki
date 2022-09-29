
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Дорожный экспресс | Грузоперевозки</title>
  <link rel="shortcut icon" href="images/icon.png" type="image/png">
  <link href="../css/stranica.css" rel="stylesheet" type="text/css" media="all"/>
  <link href="../css/kabinet.css" rel="stylesheet" type="text/css" media="all"/>
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

$query="SELECT * FROM `user` WHERE `email` ='$user'";
$result = $mysql->query($query);

?>
<div class = "center2"> 
    <h2> Личные данные </h2>
    <form action="../php/avtoriz.php" method="post">
        <?php
      
        $row=$result->fetch_assoc();
            ?>
        
 <p class= "pclass">Фамилия <input type="text" type="form-control" readonly='readonly' name="firstname" id="firstname" value="<?=$row['firstname']?>"  size="40" > </p>  <br> </br>
 <p class= "pclass">Имя     <input type="text" type="form-control" readonly='readonly'name="lastname" id="lastname" value="<?=$row['lastname']?>"    size="40"> </p> <br> </br> 
 <p class= "pclass">Отчество  <input type="text" type="form-control" readonly='readonly' name="patronymic" id="patronymic" value="<?=$row['patronymic']?>"    size="40">  </p><br> </br> 
 <p class= "pclass">Номер и серия паспорта  <input type="text" type="form-control" readonly='readonly' name="numserpas" id="numserpas" value="<?=$row['numserpas']?>"    size="40">  </p><br> </br> 
 <p class= "pclass">E-mail   <input type="email" type="form-control" readonly='readonly' name="email" id="email" value="<?=$row['email']?>"    size="40"> </p> <br> </br> 
        
    </form>
     
<a class="back_to_top" title="Наверх"> ↑ </a>
<script src="../script/script.js"></script> 
      

</div>

</body>
</html>