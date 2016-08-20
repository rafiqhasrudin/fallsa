

<?php
include("conn.php");
$tbl_name="user";
// Get values from form
$name=$_POST['name'];
$ic=$_POST['ic'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$contactno=$_POST['contactno'];
$email=$_POST['email'];
$education=$_POST['education'];



$sql="INSERT INTO $tbl_name(name,ic,gender,dob,address,contactno,email,education)VALUES('$name','$ic','$gender','$dob','$address','$contactno','$email','$education')";
$result=mysql_query($sql);

if($result)
{
header("location:index.html");
ob_end_flush();

}

else
{
header("location:error.php");
}

mysql_close();
 ?>