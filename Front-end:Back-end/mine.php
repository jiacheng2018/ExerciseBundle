<?php
$coon=new mysqli("localhost","root","root","webcoder");
if($coon->connect_error)
	die("Connection Failed!".$coon->connect_error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>Login</div>
	<form action="" method="post">
		Username:<input type="text" name="username" required/><br/><br/>
		Passwrod:<input type="password" name="password" required><br></br>
		<input type="submit" value="LOGIN" name="btn">	
	</form>
</body>
</html>
<?php
if(isset($_REQUEST["btn"]))
{
	$user=$_POST["username"];
	$pass=$_POST["password"];
	$sql="SELECT * FROM webcoder.User where username LIKE '$user' and password LIKE '$pass'";
	$result=$coon->query($sql);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			$u=$row["username"];
			$p=$row["password"];
			if(($user==$u)&&($pass==$p)){
				echo "<script>alert('success')</script>"
			}
		}
	}
}
?>