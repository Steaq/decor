<?php
$msg_box = "";
if ($_POST ['btn_submit']) {
	$errors = array();
	
	   if($_POST['user_name'] == "")   $errors[] = "Поле ваше имя не заполнено";
	   if($_POST['user_tel'] == "")   $errors[] = "Поле ваш телефон не заполнено";

	   if (empty(errors)) {
	   	message  = "Имя пользователя"  .  $_POST['user_namee']  .  ",<br>";
	   	message  .= "Ваш телефон"  .  $_POST['user_tel']  .  ",<br>";
	   	$msg_box = "<span style='color: green;'>Сообщение успешно отправлено!</span>";
	   }else {
      $msg_box = "";
      foreach ($errors as $one_error ) {
      	$msg_box  .= "<span style='color :red;'>$one_error</span><br>";
      }

	   }




}


function send_mail($message) {
	$mail_to = "vinzenzodecor@gmail.com";

	$subject = "Писмо с обратной связи";

	$headers= "MIME-Version: 1,0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: Тестовое письмо <gameslps6@gmail.com>\r\n";
	mail($mail_to, $subject, $message, $headers);
}