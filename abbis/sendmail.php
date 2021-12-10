<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';
	require 'phpmailer/src/SMTP.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', 'phpmailer/language/');
	$mail->IsHTML(true);

	//От каго письмо
	$mail->setFrom('flexdesign.sales@gmail.com', 'Письмо с сайта');
	//Кому отправить
	$mail->addAddress('flexdesign.sales@gmail.com');
	//Тема письма
	$mail->Subject = ('Письмо с сайта');

	//Рука
	$hand = 'Правая';
	if($_POST['hand'] == 'left') {
		$hand = 'Левая';
	}

	//Тело письма
	$body = '<h1>Письмо</h1>';

	if(trim(!empty($_POST['name']))) {
		$body.='<p><strong>Имя: </strong>' . $_POST['name']. '</p>';
	}
	if(trim(!empty($_POST['mail']))) {
		$body.='<p><strong>Почта: </strong>' . $_POST['mail']. '</p>';
	}
	if(trim(!empty($_POST['fund']))) {
		$body.='<p><strong>Почта: </strong>' . $_POST['fund']. '</p>';
	}
	if(trim(!empty($_POST['message']))) {
		$body.='<p><strong>Сообщение: </strong>' . $_POST['message']. '</p>';
	}
	if(trim(!empty($_POST['name2']))) {
		$body.='<p><strong>Имя: </strong>' . $_POST['name']. '</p>';
	}
	if(trim(!empty($_POST['mail2']))) {
		$body.='<p><strong>Почта: </strong>' . $_POST['mail']. '</p>';
	}
	if(trim(!empty($_POST['fund2']))) {
		$body.='<p><strong>Почта: </strong>' . $_POST['fund']. '</p>';
	}
	if(trim(!empty($_POST['message2']))) {
		$body.='<p><strong>Сообщение: </strong>' . $_POST['message']. '</p>';
	}

	//Прикрепить файл
	if (!empty($_FILES['file']['tmp_name'])) {
		//путь загрузки файла
		$filePath = __DIR__ . '/files/' . $_FILES['file']['name'];

		//загрузим файл
		if (copy($_FILES['file']['tmp_name'], $filePath)) {
			$fileAttach = $filePath;
			$body.='<p><strong>Фото в приложении</strong></p>';
			$mail->addAttachment($fileAttach);
		}
	}

	$mail->Body = $body;

	//Отправляем
	if (!$mail->send()) {
		$message = 'Ошибка';
	} else {
		$massage = 'Данные отправлены!';
	}

	$response = ['message' => $massage];

	header('Content-type: application/json');
	echo json_encode($response);


?>