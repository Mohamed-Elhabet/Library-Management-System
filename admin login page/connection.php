<?php

$conn = "";

try {
	$servername = "localhost"; //"localhost:3306";
	$dbname = "loginpage";
	$username = "mohamed";
	$password = "123moh";

	$conn = new PDO(
		"mysql:host=$servername; dbname=loginpage",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
