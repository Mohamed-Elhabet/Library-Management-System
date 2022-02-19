<!DOCTYPE HTML>
<html>
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
<script>
function validateForm() {
  var x = document.forms["myForm"]["search"].value;
  if (x == "" || x == null) {
    alert("Please enter title of book ");
    return false;
  }
}
</script>
<style>
                #aa {
                  padding: 6px 10px; margin-top: 0px;margin-right: 16px;
                    background-color: #555;color: white;font-size: 17px;border: none;cursor: pointer;
                  }

                #aa:hover {
                  background-color: green;
                }
        </style>
    <body bgcolor="87ceeb">
      <div class="topnav">
    <center><h1 style="color:white";>Simple Library Management System</h1></center>
              </div>
    <br></br><br></br><br></br><br></br>
    <form action = "DisplayBooks.php" method="get" onsubmit="return validateForm()" name="myForm">
        <center><h2>Enter the title of the book to be searched</h2> 
        <input style="width: 40%;padding: 12px 20px; margin: 8px 0;
            display: inline-block;border: 8px solid #ccc;
            box-sizing: border-box;" type="text" name="search" size="48">
        <br></br>
        <input id="aa" type="submit" value="submit">
        <input id="aa" type="reset" value="Reset">
        </center>
        <br>
        </form>
    </body>
</html>
