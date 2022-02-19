<?php


$hostname= "localhost";
$dbname= "books";
$dbuser= "mohamed";//hassan
$dbuserpassword= "123moh";// 123

$dsn = "mysql:host=$hostname;dbname=$dbname";
 //database sourse name

 $options = array(
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      //SILENT
      //WARNING
 );

 ?>