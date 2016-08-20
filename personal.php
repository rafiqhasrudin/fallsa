<!DOCTYPE HTML>  
<html>
<head>

<style>
	
</style>
</head>


<body style="background-color:green;"> 



<?php
// define variables and set to empty values
$name = $ic = $dob = $address = $contact = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $ic = test_input($_POST["ic"]);
  $gender = test_input($_POST["gender"]);
  $dob = test_input($_POST["dob"]);
  $address = test_input($_POST["address"]);
  $contact = test_input($_POST["contact"]);
  $email = test_input($_POST["email"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2><font color="red">Personal Details</font></h2>
<form method="post" action="test.php"> 

<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>  
  Name: <tab1><input type="text" name="name">
  <br><br>
  IC: <tab1><input type="text" name="ic">
  <br><br>
  Gender:<tab1>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br>
  Date of Birth:<tab1><input type="text" name="dob">
  <br><br>
  Address: <tab1><input type="text" name="address">
  <br><br>
  Contact No: <tab1><input type="text" name="contact">
  <br><br>
  Email: <tab1><input type="text" name="email">
  <br><br>
  
  <input type="submit" name="submit" value="GO TO TEST">
  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $ic;
echo "<br>";
echo $gender;
echo "<br>";
echo $dob;
echo "<br>";
echo $address;
echo "<br>";
echo $contact;
echo "<br>";
echo $email;
?>

</body>
</html>