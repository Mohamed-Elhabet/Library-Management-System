<?php require_once('config.php'); ?>
<?php $page_title = 'Delete an ISBNea'; ?>
<?php $page_heading = 'The Book Deleted'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
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
<head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>

</head>

<body>
    <div class="topnav">
        <center>
        <h1 style="color:white">
            Simple Library Management System
        </h1>
        </center>
    </div>
    <h1> <?php echo $page_heading; ?> </h1>
    <p> <a href="index.php">Go back to the homepage</a> </p>

    <?php if(isset($_GET['id'])): ?>
    <?php $ISBN = $_GET['id'] ?>
    <?php $connection = new PDO($dsn, $dbuser, $dbuserpassword, $options); ?>

    <?php $sql = "DELETE FROM book_info WHERE ISBN=:ISBN" ?>

    <?php $statement =  $connection->prepare($sql); ?>
    <?php  $statement-> bindValue(":ISBN", $ISBN); ?>
    <?php $statement-> execute();   ?>

    <div style="background:red;color:white;padding:10px">
        <p>The Book is deleted</p>
    </div>
    <?php endif; ?>

</body>

</html>