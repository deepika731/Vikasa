<?php
$msg = "";
	if(isset($_POST['submit'])){
		require "connect.php";
		//$msg =  "submit clicked";
		$id = $_POST['id'];
		$name = $_POST['name'];
		$password = $_POST['password'];

		$query = mysql_query("insert into reg (id,name,password,type) values ('$id','$name','$password','student')");
		if($query){
			$msg =  "registration success";
		}else{
			$msg =  "failed to register";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ram</title>
</head>
<body>
	<form method="post">
		Id:<input type="text" name="id"><br/>
		Name: <input type="text" name="name"><br/>
		Password: <input type="password" name="password"><br/>
		<input type="submit" name="submit">
	</form>
	<?php
		echo $msg;
	?>
</body>
</html>