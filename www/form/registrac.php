<!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <meta http-equv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet"  href="css/style.css">
    <title>Регистрация</title>
    <link rel ='stylesheet' href = "https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> 
</head>

<body>
<div class="container mt-5">
    <h1> Регистрация</h1>
    <form action="../php/check.php" method="post">
        <input type="text" type="form-control" name="firstname" id="firstname" placeholder="Введите фамилию"  size="50" > <br> </br>
        <input type="text" type="form-control" name="lastname" id="lastname" placeholder="Введите имя"    size="50"> <br> </br>
        <input type="text" type="form-control" name="patronymic" id="patronymic" placeholder="Введите отчество"    size="50"> <br> </br>
        <input type="text" type="form-control" name="numserpas" id="numserpas" placeholder="Введите номер и серию паспорта(без пробела)"    size="50"> <br> </br>
        <input type="email" type="form-control" name="email" id="email" placeholder="Введите email"    size="50"> <br> </br>
        <input type="password" type="form-control" name="password" id="password" placeholder="Введите пароль"    size="50"> <br> </br>
        <button class="btn btn-success" type='submit'> Зарегистрироваться </button>
        <button class="btn btn-success" type='button' onClick = "document.location='avtorizac.php'"> Вход</button>
        <button class="btn btn-success" type='button' onClick = "document.location='../stranica.html'"> Вернуться назад </button>
    </form>
</div>
</body>
</html>