<?php
	$myPDO = new PDO('mysql:host=localhost;dbname=notifications', 'root', '');
	$result = $myPDO->query("SELECT * FROM notifications");
	echo $result;
?>
