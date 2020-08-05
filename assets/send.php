<?php 

$headers = 'Content-type: text/plain; charset="utf-8"';


	$username = $_POST['user_name'];
	$userphone = $_POST['user_phone'];
	$usermail = $_POST['user_mail'];
	$usercomment = $_POST['user_comment'];
	$aim = $_POST['aim'];

	$ip = $_SERVER['REMOTE_ADDR']; 

	// Кому 
	$to = 'zoduaks@ukr.net';
	// subject Admin
	$subject = 'ЗАЯВКА с сайта пустышки XXX';
	// Само сообщение Admin
	$message = "
	<html><head><title>Привет от почтового сервера</title></head>
	<body>
	<h2>ЗАЯВКА</h2>
	<h3>Имя: $username</h3>
	<h3>Телефон: $userphone</h3>
	<h3>E-mail: $usermail</h3>
	<h3>Коммент: $usercomment</h3>
	<h3>IP: $ip</h3>
	<h3>Цель: $aim</h3>
	<hr>


	</body>
	</html>";

	// Что бы отправлять HTML, устанавливаем Content-type заголовки
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	// тут установить ту кодировку с которой вы работатете
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	// Отправляем
	mail($to, $subject, $message, $headers);
	header("Location: http://a0459647.xsph.ru/thanks");




?>		

