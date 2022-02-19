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
<script>
function validateForm() {
  var i = document.forms["myForm"]["isbn"].value;
  var t = document.forms["myForm"]["title"].value;
  var a = document.forms["myForm"]["author"].value;
  var e = document.forms["myForm"]["edition"].value;
  var d = document.forms["myForm"]["Date"].value;
  if (i == "" || i == null) {
    alert("ID must be filled out");
    return false;
  }
  if (t == "" || t == null) {
    alert("Title must be filled out");
    return false;
  }
  if (a == "" || a == null) {
    alert("Author must be filled out");
    return false;
  }
  if (e == "" || e == null) {
    alert("Edition must be filled out");
    return false;
  }
  if (d == "" || d == null) {
    alert("Date must be filled out");
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
    <br><br>
    <!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
    <form action="InsertBooks.php" method="post"onsubmit="return validateForm()" name="myForm">
 
        <table border="2" align="center" cellpadding="5" cellspacing="5">
            <tr>
            <td> Enter ISBN :</td>
            <td> <input type="text" name="isbn" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Title :</td>
            <td> <input type="text" name="title" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Author :</td>
            <td> <input type="text" name="author" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Edition :</td>
            <td> <input type="text" name="edition" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Date: </td>
            <td> <input type="date" name="Date" size="48" 
                  placeholder="yyyy/mm/dd"> </td>
            </tr>
            <tr>
            <td></td>
            <td>
            <input id="aa" type="submit" value="submit">
            <input id="aa" type="reset" value="Reset">
            </td>
            </tr>
        </table>
    </form>
    <br>
    <br>
    <form action="display.php" method="post">
        <button id="aa" style="display: block;margin:0 auto;">Show Every Books</button>
    </form>
</body>
</html>