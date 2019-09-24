<?php
session_start();
	if(!isset($_SESSION['id'])){
		header("location:login.php");
	}else{
		$id = $_SESSION['id'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	require "connect.php";
		$query = mysql_query("select * from reg where id='$id'");
		$data = mysql_fetch_array($query);

		echo "name: ".$data["name"]."<br>";
		echo "id: ".$data['id'];
	?>	
	<br>
	<a href="logout.php">Logout</a>
</body>
</html>
