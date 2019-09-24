<?php
$msg = "";
session_start();

	if(isset($_POST['submit'])){
		require "connect.php";
		//$msg =  "submit clicked";
		$id = $_POST['id'];
		$password = $_POST['password'];

		$query = mysql_query("select * from reg where id='$id' and password='$password'");
		//$rows = mysql_num_rows($query);
		$data = mysql_fetch_array($query);
		if($data){
			//$msg =  "login success";
			$_SESSION['id'] = $id;
			if($data['type'] == 'admin'){
				$_SESSION['type'] = 'admin';
			}else{
				$_SESSION['type'] = 'student';
			}
			header("location:user.php");
		}else{
			$msg =  "failed to login";
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
		Password: <input type="password" name="password"><br/>
		<input type="submit" name="submit">
	</form>
	<?php
		echo $msg;
	?>
</body>
</html>