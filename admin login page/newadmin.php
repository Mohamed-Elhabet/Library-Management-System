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
<script>
  function validateForm() {
  var x = document.forms["myForm"]["adminname"].value;
  var y = document.forms["myForm"]["password"].value;
  if (x == "" || x==null) {
    alert("Please enter name of admin ");
    return false;
  }
  if (y == "" || y==null) {
    alert("Please enter password of admin");
    return false;
  }
}
</script>
<body>
	<form action="check.php" method="post" onsubmit="return validateForm()" name="myForm" class ="a">
		<div class="login-box">
			<h1>Add new admin </h1>

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
