<!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <meta http-equv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet"  href="../css/style.css">
    <title>Авторизация</title>
    <link rel ='stylesheet' href = "https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> 
</head>

<body>
<div class="container mt-5">

    <h1> Авторизация </h1>
    <form action="../php/avtoriz.php" method="post">
        <input type="email" type="form-control" name="email" id="email" placeholder="Введите логин"    size="50"> <br> </br>
        <input type="password" type="form-control" name="password" id="password" placeholder="Введите пароль"    size="50"> <br> </br>
        <button class="btn btn-success" type='submit'> Войти </button>
 	<button class="btn btn-success" type='button' onClick = "document.location='registrac.php'"> Зарегистрироваться </button>
     <button class="btn btn-success" type='button' onClick = "document.location='../stranica.html'"> Вернуться назад </button>
    </form>
</div>
 
</body>
</html>