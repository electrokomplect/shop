<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Document</title>

</head>

<body>



<?php


	$to = "electrokomplect@yandex.ru";

	$from = 'wileyfox@wileyfox.ru';

	$subject = "Проверка почты";

	$message = 'Имя: '.$_POST['name'].';
 	Телефон: '.$_POST['telephone'].';
 	Адресс: '.$_POST['adress'].';
 	Цвет: '.$_POST['color'].';
	$headers = "Content-type: text/html; charset=UTF-8 \r\n";
	
$headers .= "From: <wileyfox@wileyfox.ru>\r\n";
	
$result = mail($to, $subject, $message, $headers);


    	
	if ($result){
 
        	echo "<div> Спасибо. Уже работаем)<br>Доставка будет сегодня, предварительно мы Вам позвоним.</div>";

    		     }

    	else{
        echo "<p>Cообщение не отправленно. Пожалуйста, попрбуйте еще раз</p>";

    	    }

?>


</body>

</html>