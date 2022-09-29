<?php
  $to = 'off.alexeeva@icloud.com';
  $subject = 'Обратный звонок';
  $message = 'сообщение';
  $headers = "Content-type: text/plain; charset=utf-8 \r\n";
// Проверяем или метод запроса POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
		// Поочередно проверяем или были переданные параметры формы, или они не пустые
		if(isset($_POST["username"])) {
			//Если параметр есть, присваеваем ему переданое значение
			$name = trim(strip_tags($_POST["username"]));
		}
		if(isset($_POST["usernumber"]))
		{
			$number 	= trim(strip_tags($_POST["usernumber"]));
		}
		
			// Формирование письма
			    $message  = "<html>";
				$message  .= "<body>";
				$message  .= "Телефон: ".$number;
				$message  .= "<br />";
				$message  .= "Имя: ".$name;
				$message  .= "<br />";
				$message  .= "Вопрос: ".$question;
				$message  .= "</body>";
			    $message  .= "</html>";
			// Окончание формирования письма
			// Отправка письма
			mail ($to, $subject, $message, $headers);
}
else
{
	exit;
} 
header('Location: ../stranica.html');
?>