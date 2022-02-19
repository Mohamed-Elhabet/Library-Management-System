<?php 
$errors_arr = array();
if (isset($_GET['error_fields'])){
  $errors_arr = explode(",",$_GET['error_fields']);
}


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: wheat;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: green;
}
input[type=text] {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 8px solid #ccc;
  box-sizing: border-box;
}


</style>
<script>
  function validateForm() {
  var x = document.forms["myForm"]["search"].value;
  if (x == "" || x==null) {
    alert("Please enter title of book ");
    return false;
  }
}
</script>
</head>
<body>

<div class="topnav">
  <div class="login-container">
    <form action="admin login page/Login page.php">
      
      <button class="button button1" >Login</button>
    </form>
  </div>
</div>

<div style="padding-left:16px">
  <h1 style="text-align:center">Library Management System</h1>
</div>
<br><br><br><br>
<br>

<form action = "Dis_books.php" method="post" name="myForm" onsubmit="return validateForm()" class ="a">
        <center ><h3>Enter the title of the book to be searched :</h3>
            
        <input  type="text" name="search" placeholder="Search" size="60" id="search" />
 
        <br></br>
        <style>
                #aa {
                  padding: 6px 10px; margin-top: 0px;margin-right: 16px;
                    background-color: #555;color: white;font-size: 17px;border: none;cursor: pointer;
                  }

                #aa:hover {
                  background-color: green;
                }
        </style>
        <input id="aa" 
                    type="submit" value="submit">
        <input  id="aa"
                    type="reset" value="Reset">
        </center>

        <br>
			</div>
    </form>

    <?php
        include("admin login page/database.php");
    ?>
    <br><br>

    <center>
    <a  href="Dis_Books_Ind.php"> <button id="aa"
                    >To Show Every Books click here </button></a>
</center>

</body>
</html>