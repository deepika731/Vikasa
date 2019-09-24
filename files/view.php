<?php
session_start();
	if(!isset($_SESSION['id'])){
		header("location:login.php");
	}else{
		$id = $_SESSION['id'];
		$type = $_SESSION['type'];
		if($type != 'admin'){
			header("location:user.php");
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>
	<table class="table table-bordered table-hover">
		<tr>
			<th>sno</th>
			<th>Id</th>
			<th>Name</th>
		</tr>
	<?php
	require "connect.php";
		$sno = 1;
		$query = mysql_query("select * from reg");
		while ($row = mysql_fetch_assoc($query)) {
			echo '<tr>';
			echo '<td>'.$sno.'</td>';
			echo '<td>'.$row['id'].'</td>';
			echo '<td>'.$row['name'].'</td>';
			echo '</tr>';
		}
		
	?>	
	<button class="btn btn-info">Ram</button>
</body>
</html>
