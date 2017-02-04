<!DOCTYPE HTML>
<html>
<head>
    <title>Страница пользователя</title>
</head>
	<body>
		<h1>Страница пользователя Максим</h1>
		<?php
		$userName = 'Максим';
		$userYear = '30';
		$userEmail = 'mtelaxi@mail.ru';
		$userCity = 'Смоленск';
		$userMainInfo = 'Техник по информационной безопасности. В будущем ПРОГРАММИСТ!))';
		echo "<table><tr><td>Имя</td><td>$userName</td></tr><tr><td>Возраст</td><td>$userYear</td></tr><tr><td>Адрес электронной почты</td><td>$userEmail</td></tr><tr><td>Город</td><td>$userCity</td></tr><tr><td>О себе</td><td>$userMainInfo</td></tr></table>";
		?>
	</body>
</html>
