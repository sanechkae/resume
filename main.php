<?php
$sendResult = '';
$name = '';
$messange = '';
$mail = '';

session_start();
if (isset($_SESSION['sendResult'])) {
	$sendResult = $_SESSION['sendResult'];
	unset($_SESSION['sendResult']);
}

if (isset($_POST['name'],$_POST['messange'],$_POST['mail'])) {
	$name = $_POST['name'];
	$messange = $_POST['messange'];
	$mail = $_POST['mail'];
	if (!empty($name) && !empty($messange) && filter_var($mail, FILTER_VALIDATE_EMAIL)) {
		//в переменную $token нужно вставить токен, который нам прислал @botFather
		$token = "1577588513:AAELJvagK54VVHULZgPwP4CiSvx35XFCjdk";
		 
		//нужна вставить chat_id (Как получить chad id, читайте ниже)
		$chat_id = "-487496435";
		 
		//Далее создаем переменную, в которую помещаем PHP массив
		$arr = array(
		  'Name: ' => $name,
		  'E-mail:' => $mail,
		  'Comment' => $messange

		);
		 
		//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
		foreach($arr as $key => $value) {
		  $txt .= "<b>".$key."</b> ".$value."%0A";
		};
		 
		//Осуществляется отправка данных в переменной $sendToTelegram
		$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
		$_SESSION['sendResult'] = 'Ваше сообщение отправлено!';
		//$sendResult = 'Ваше сообщение отправлено!';
		//$name = '';
		//$messange = '';
		//$mail = '';
		header('Location: /');
	} else {
		$sendResult = 'Ошибка! Проверьте поля.';
	}
}
 
?>