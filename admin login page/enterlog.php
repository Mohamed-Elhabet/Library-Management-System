<!DOCTYPE HTML>
<html>
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

    </style>
<body bgcolor="87ceeb">
    <div class="topnav">
    <center><h1 style="color:white";>Simple Library Management System</h1></center>
    </div>
    <br>
 
    <?php
        include("database.php");
 /*
        $name=$_POST["adminname"];
        $password=$_POST["password"];

        $query = "insert into adminlogin(adminname,password) values('$name','$password')"; //Insert query to add book details into the book_info table
        $result = mysqli_query($db,$query);*/
    ?>
    <!--<h3><h1> Hello .... <?php echo"$name";?></h1> </h3> -->
    <center>
    <form action="newadmin.php" ">
      
    <style>
                #aa {
                  padding: 6px 10px; margin-top: 0px;margin-right: 16px;
                    background-color: #555;color: white;font-size: 17px;border: none;cursor: pointer;
                  }

                #aa:hover {
                  background-color: green;
                }
    </style>


      <button id="aa" class="button button1" 
                    >Add New Admin </button>
    </form>
    <br> <br> 

    <a href="../EnterBooks.php" > <button id="aa">To insert Book/s click here</button> </a>
    <br> <br> <br> <br>
    <a href="../SearchBooks.php"><button id="aa">  To search for the Book information click here </button></a>
    <br> <br> <br> <br>
    <a href="../display.php"><button id="aa">To Show Every Books click here </button></a>
    <br> <br> <br> <br>
    <a href="Login page.php"><button id="aa">Logout </button></a>
</center>   
</body>
</html>
