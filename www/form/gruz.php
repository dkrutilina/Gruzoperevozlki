<!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <meta http-equv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet"  href="../css/style.css">
    <title> Заказ грузоперевозки</title>
    <link rel ='stylesheet' href = "https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> 
</head>

<body>
<div class="container mt-5">
    <h1> Заказ грузоперевозки</h1>
    <form action="../php/zakaz.php" method="post">
        <input type="email" type="form-control" name="email" id="email" placeholder="Введите логин"    size="50"> <br> </br>
        <input type="text" type="form-control" name="adressot" id="adressot" placeholder="Введите адрес отпавления"    size="50"> <br> </br>
        <input type="text" type="form-control" name="adresspol" id="adresspol" placeholder="Введите адрес получения"    size="50"> <br> </br>
        <input type="number" type="form-control" name="ves" id="ves" placeholder="Введите вес в тоннах"    size="50"> <br> </br>
        <input type="number" type="form-control" name="dlina" id="dlina" placeholder="Введите длину в м "    size="30"> 
        <input type="number" type="form-control" name="shirina" id="shirina" placeholder="Введите ширину в м"    size="30"> 
        <input type="number" type="form-control" name="vusota" id="vusota" placeholder="Введите высоту в м"    size="30"> <br> </br>
       <!-- <p> Общий объём в м2</p> <input type="number" type="form-control" name="obem" id="obem"  size="30"> <br> </br> -->
        <input type="text" type="form-control" name="harakter" id="harakter" placeholder="Введите характер груза (например, личные вещи)"    size="50"> <br> </br> 
        <p> Когда планируете сдать груз? </p><input type="date" type="form-control" name="date" id="date" placeholder="Когда планируете сдать груз"    size="50"> <br> </br>
        <input type="text" type="form-control" name="number" id="number" placeholder="Введите номер телефона"    size="50"> <br> </br> 
        <button class="btn btn-success" type='submit'> Оформить грузоперевозку </button>
        <button class="btn btn-success" type='button' onClick = "document.location='../pages/kabinet.html'"> Вернуться назад </button>
    </form>
</div>
</body>
</html>