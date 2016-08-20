<!DOCTYPE html>

<html>

<head>

<title>Simple Math Calculator Using Radio Button</title>

<style type="text/css">
body{
	width:500px;
	margin:auto;
	border:blue 1px solid;
	text-align:center;
}
h1 {
	color:red;
}
h2 {
	color:blue;
}
label {
    font-size: 20px;
    font-weight: bolder;
    font-family: cursive;
    color: red;
}
input[type="number"] {
    font-size: 18px;
    border: red 1px solid;
    text-indent: 5px;
    width: 150px;
}
input[type="submit"] {
    font-size: 18px;
    color: red;
    background: azure;
    border: red 1px solid;
    padding: 6px;
    border-radius: 4px;
	cursor:pointer;
}
#math_Results{
	font-size: 23px;
    font-weight: bold;
    font-family: cursive;
    color: blue;
}
</style>

<script>
function solve() {

var operators_If = document.getElementsByName("math_Operators");
var first_TextBox_Value = document.getElementById("number1_TextBox").value;
var no_two = document.getElementById("number2_TextBox").value; 

if (first_TextBox_Value=="") {
var math_Results = "<span class='warning'>Enter the first value.</span>";
document.getElementById('math_Results').innerHTML = math_Results;
return false;
}

else if (no_two=="") {
var math_Results = "<span class='warning'>Enter the second value.</span>";
document.getElementById('math_Results').innerHTML = math_Results;
return false;
}

if (operators_If[0].checked == true) {
sum = parseInt(first_TextBox_Value) + parseInt(no_two);							
results = "<span class='message'> The sum of " + first_TextBox_Value 
+ " and " + no_two + " is <b style='color:red;'>" + sum +"</b>.</span>";
document.getElementById('math_Results').innerHTML = results;
return false;
} 
else if (operators_If[1].checked == true) {
 diff = parseInt(first_TextBox_Value) - parseInt(no_two);					
results = "<span class='message'> The difference between " 
+ first_TextBox_Value + " and " + no_two + " is <b style='color:red;'>" + diff +"</b>.</span>";
document.getElementById('math_Results').innerHTML = results;
return false;
} 
else if (operators_If[2].checked == true) {
 product = parseInt(first_TextBox_Value) *parseInt(no_two);					
results = "<span class='message'>The product between " 
+ first_TextBox_Value + " and " + no_two + " is <b style='color:red;'>" + product +"</b>.</span>";
document.getElementById('math_Results').innerHTML = results;
return false;
} 
else if (operators_If[3].checked == true) {
 quotient = parseInt(first_TextBox_Value) / parseInt(no_two);
results = "<span class='message'>The quotient between " 
+ first_TextBox_Value + " and " + no_two + " is <b style='color:red;'>" + quotient +"</b>. </span>";
document.getElementById('math_Results').innerHTML = results;
return false;
} 
else {
var math_Results = "<span class='warning'>Select your math operators.</span>";
document.getElementById('math_Results').innerHTML = math_Results;
return false;
}
return true;
}
function reset_Operators() {
document.getElementById('math_Results').innerHTML = '';
}
function clear()
{
document.getElementById('math_Results').innerHTML = "";
first_TextBox_Value="";
no_two="";
first_TextBox_Value.focus();
}
</script>

</head>

<body>

<br />
<h1>Simple Math Calculator Using Radio Button</h1>

<form action="" method="POST">
<table cellpadding="5" cellspacing="5" style="text-align:center;" width="100%" border="0">
	<tr>
		<td><label>First Value</label></td>
		<td><input type="number" name="first_TextBox_Value" id="number1_TextBox" autofocus="autofocus"></td>
	</tr>
	<tr>
		<td><label>Second Value</label></td>
		<td><input type="number" name="second_TextBox_Value" id="number2_TextBox"></td>
	</tr>
</table>
<h2>Math Operators</h2>
<table cellpadding="5" cellspacing="5" style="text-align:center;" width="100%" border="0">
	<tr>
		<td><input type="radio" name="math_Operators" onclick="reset_Operators();" />   <label style="color:blue;">Addition</label></td>
		<td><input type="radio" name="math_Operators" onclick="reset_Operators();" />   <label style="color:blue;">Subtraction</label></td>
	</tr>
	<tr>
		<td><input type="radio" name="math_Operators" onclick="reset_Operators();" />   <label style="color:blue;">Multiplication</label></td>
		<td><input type="radio" name="math_Operators" onclick="reset_Operators();" />   <label style="color:blue;">Division</label></td>
	</tr>
</table>
<br />
<br />           
<input type="submit" value="Solve" onclick="return solve();" />
<input type="submit" value="Clear" onclick="return clear();" />
<br />
<br />
<div id="math_Results"></div>
</form>
 
</body>

</html>