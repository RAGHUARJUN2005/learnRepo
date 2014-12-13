<?php
  
  echo "<body>"; //html
  echo "<fieldset>"; //html
  echo "<legend>Your Results</legend><br>";
  echo "<b>First name </b>", $_POST["firstname"],"<br>", "<b>Last name </b>", $_POST["lastname"],"<br>", "<b>Sex </b>",  $_POST["sex"]," <br></br><b>Your Picture </b><br>";
  move_uploaded_file ($_FILES["fileToUpload"]["tmp_name"],$_FILES["fileToUpload"]["name"]);
  $img=$_FILES["fileToUpload"]["name"];
  // echo '<img src="/learn/'.$img.'"/>';
  echo '<img src="/learn/'.$img.' " style=width "128" height= "128" />';
   
   
  echo "</fieldset>"; //html
  echo "</body>"; //html
  
	
  //-------------------------------
	$servername = "localhost";
	$username = "root";          
	$password = "";
	$dbname = "learn";
 //---------------------------------

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO user (firstname, lastname, sex, fileToUpload)
VALUES ('".$_POST["firstname"]."', '".$_POST["lastname"]."','".$_POST["sex"]."','".$_FILES["fileToUpload"]["name"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
    ?>
	<a class="button" href="/learn/list.php" target="_blank">    Check Submitted Results</a>;