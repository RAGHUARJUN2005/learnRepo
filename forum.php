<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Form</title>
</head>
<body>
<form action="results.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend> Enter the below information </legend> 
First name:<br>
<input type="text" name="firstname">
<br> <br/>
Last name:<br>
<input type="text" name="lastname">
<br> <br/>
Choose your sex
<br>
<input type="radio" name="sex" value="male" checked>Male
<br>
<input type="radio" name="sex" value="female">Female
<br><br/>
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Submit">
</fieldset>
</form>

</body>
</html>