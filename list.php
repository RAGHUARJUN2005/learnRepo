<?php

$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "learn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname, sex  FROM user";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  "<b>ID</b> ". $row["id"]. " <b>firstname </b> " . $row["firstname"]. " <b> lastname </b> " . $row["lastname"]. "<b> sex </b> " . $row["sex"]." <br>";
    }
	}

$conn->close();

?>

