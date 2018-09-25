<?php 
	
	if ( !empty( $_POST ) ) { // если наш массив POST не пуст
		$message = "Вам пришло новое сообщение с сайта: \n" 
					. "Имя отправителя: " . $_POST['userName'] ."\n"
					. "Email отправителя: " . $_POST['userEmail'] . "\n"
					. "Сообщение: \n " . $_POST['message'];
		$headers = "From: zhas_86@mail.ru";
		$resultMail = mail("zhas_86@mail.ru", "Сообщение с сайта", $message, $headers);
		if ($resultMail) {
			echo "Форма отправлена успешно!";
		} else {
			echo "Письмо не отправлено!";
		}
	}
?>