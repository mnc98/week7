<?php

echo "<h1>PDO demo!</h1>";

$hostname = "sql.njit.edu";
$username = "mnc24";
$password = "NDXyngL2";
try {
	    $conn = new PDO("mysql:host=$hostname;dbname=mnc24",
	    $username, $password);
	    echo "Connected successfully"; 

    }
catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage();
    }
$conn = null;

?>