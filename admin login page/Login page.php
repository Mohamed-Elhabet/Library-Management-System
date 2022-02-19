<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
	<title>Login Page</title>
</head>
<style>
	body{
		background-color: wheat;
	}
</style>
<body>
	<form  method="post">
		<div class="login-box">
			<h1>Login</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Adminname"
						name="adminname" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password"
						name="password" value="">
			</div>

			<input class="button" type="submit"
					name="login" value="Sign In">
		</div>
	</form>
</body>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
$adminname = $_POST['adminname'];
$password = $_POST['password'];
require_once('database.php');
$sql= "SELECT * FROM adminlogin WHERE adminname = '$adminname' AND password = '$password' ";
$result = mysqli_query($db,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
header('location:enterlog.php');
}else{
	
echo '<script type="text/JavaScript"> 
     alert("Incorrect valid name or password");
     </script>'
;

}
}
?>