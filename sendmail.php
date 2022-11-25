<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', 'phpmailer/language/');
	$mail->IsHTML(true);

	//От кого письмо
	$mail->setFrom('info@size.by', 'SiZE.BY');
	//Кому отправить
	$mail->addAddress('sizevideoagency@gmail.com');
	$mail->addAddress('astyukevichr@mail.ru');
	//Тема письма
	$mail->Subject = 'Новая заявка с сайта size.by"';

	

	//Тело письма
	$body = '<h1>Клиент заполнил бриф.</h1>';

	if(trim(!empty($_POST['form-name']))){
		$body.='<p><strong></strong> '.$_POST['form-name'].'</p>';
	}
	// цели
	if(trim(!empty($_POST['advertising']))){
		$body.='<p><strong></strong> '.$_POST['advertising'].'</p>';
	}
	if(trim(!empty($_POST['strategy']))){
		$body.='<p><strong></strong> '.$_POST['strategy'].'</p>';
	}if(trim(!empty($_POST['identity']))){
		$body.='<p><strong></strong> '.$_POST['identity'].'</p>';
	}if(trim(!empty($_POST['anim']))){
		$body.='<p><strong></strong> '.$_POST['anim'].'</p>';
	}if(trim(!empty($_POST['naming']))){
		$body.='<p><strong></strong> '.$_POST['naming'].'</p>';
	}if(trim(!empty($_POST['logo-c']))){
		$body.='<p><strong></strong> '.$_POST['logo-c'].'</p>';
	}if(trim(!empty($_POST['pack-c']))){
		$body.='<p><strong></strong> '.$_POST['pack-c'].'</p>';
	}
// задачи
	if(trim(!empty($_POST['brandbook']))){
		$body.='<p><strong></strong> '.$_POST['brandbook'].'</p>';
	}
	if(trim(!empty($_POST['calendar-c']))){
		$body.='<p><strong></strong> '.$_POST['calendar-c'].'</p>';
	}
	if(trim(!empty($_POST['catalog-c']))){
		$body.='<p><strong></strong> '.$_POST['catalog-c'].'</p>';
	}
	if(trim(!empty($_POST['adv-out']))){
		$body.='<p><strong></strong> '.$_POST['adv-out'].'</p>';
	}
	if(trim(!empty($_POST['slogan']))){
		$body.='<p><strong></strong> '.$_POST['slogan'].'</p>';
	}
	if(trim(!empty($_POST['boardGame']))){
		$body.='<p><strong></strong> '.$_POST['boardGame'].'</p>';
	}
	if(trim(!empty($_POST['photography']))){
		$body.='<p><strong></strong> '.$_POST['photography'].'</p>';
	}
	if(trim(!empty($_POST['filming']))){
		$body.='<p><strong></strong> '.$_POST['filming'].'</p>';
	}







	if(trim(!empty($_POST['name']))){
		$body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
	}
	if(trim(!empty($_POST['email']))){
		$body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
	}
	if(trim(!empty($_POST['tel']))){
		$body.='<p><strong>Телефон:</strong> '.$_POST['tel'].'</p>';
	}
	if(trim(!empty($_POST['nameCompany']))){
		$body.='<p><strong>Компания:</strong> '.$_POST['nameCompany'].'</p>';
	}
	
	if(trim(!empty($_POST['message']))){
		$body.='<p><strong>Сообщение:</strong> '.$_POST['message'].'</p>';
	}

	$checkbox = $_POST['services[]'];

	if(trim(!empty($_POST['$checkbox']))){
		$body.='<p><strong>Теги:</strong> ' . $checkbox .'</p>';
	}
	

	$mail->Body = $body;

	//Отправляем
	if (!$mail->send()) {
		 
		$message = 'Ошибка отправки данных. Пожалуйста, свяжитесь с нами по номеру телефона';
		
	} else {

		$message = 'Данные отправлены!';
		
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
?>