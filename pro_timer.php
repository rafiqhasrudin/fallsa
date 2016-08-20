

<?php
include("conn.php");
$tbl_name="timer";
// Get values from form
$myText=$_POST['myText'];
$timer2=$_POST['timer2'];
$timer3=$_POST['timer3'];
$totalTimer=$_POST['totalTimer'];

$sql="INSERT INTO $tbl_name(myText,timer2,timer3)VALUES('$myText','$timer2','$timer3')";
$result=mysql_query($sql);

if($result)
{
header("location:time2.html");
ob_end_flush();

}

else
{
header("location:error.php");
}

mysql_close();
 ?>