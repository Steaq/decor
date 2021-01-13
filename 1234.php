<?php
session_start();

$a1 = rand(1, 9);
$a2 = rand(1, 9);
$a3 = $a1 * $a2;
if (isset($_POST["answer"])) {
if ($a3 == $_POST["answer"]) {
	echo 'Правильный ответ';
} else {
	echo 'Не Правильный ответ';
}
}



?>

<form action="" method="POST">
	<?=$a1;?> * <?=$a2;?> = 
	<input type="text" name="answer">
	<button type="submit" name="">Отправить</button>
	

</form>