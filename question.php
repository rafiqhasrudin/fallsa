<!DOCTYPE HTML>  
<html>
<head>
</head>

<style>
tab1 { padding-left: 5em; }
</style>
<body style="background-color:green;"> 


<h2><font color="red">QUESTION</h2>
<form method="post" action="result.php <?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Worried of Falling:<tab1>
  <input type="radio" name="worry" value="female">Yes
  <input type="radio" name="worry" value="male">No
  <br><br>
  I had fall in the past 18 months:<tab1>
  <input type="radio" name="fall" value="female">Yes
  <input type="radio" name="fall" value="male">No
  <br><br>
   Joint Pain:<tab1>
  <input type="radio" name="joint" value="female">Yes
  <input type="radio" name="joint" value="male">No
  <br><br>
   Having cataract/glaucoma:<tab1>
  <input type="radio" name="cataract" value="female">Yes
  <input type="radio" name="cataract" value="male">No
  <br><br>
  
  <input type="submit" name="submit" value="GO TO RESULT">  
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