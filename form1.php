<!DOCTYPE html>
<html>
<head>
	<title>PAPER PRESENTATION</title>
	<link href="form1.css" rel="stylesheet" type="text/css" />
</head>
<body background="form1.jpg">
	<h2>PAPER PRESENTATION</h2>
	<div class="rules">
	<p>RULES:<br>
		1. A team can consists of 4 members at the maximum.<br>
		2. Topics for the competition includes Artificial intelligence, Data Science, IOT, Machine Learning.<br>
		3. Team lead must submit their ppt on or before 7th November for which the google form link will be shared to their respective mail id.<br>
		4. Participants selected for the final round will be informed through mail on 10th November.<br>
		5. Information regarding the final round will be communicated later to the selected teams.<br>
		6.Final round will be conducted on 12th November.
	</p>
</div>
	<br>
	<div class="form">
	<p>REGISTER HERE:</p>
	<form>
		<label> NAME </label>
		<input type="text" name="NAME" size="14">
		<br><br>
		<label>DEPARTMENT</label>
		<input type="text" name="DEPARTMENT" size="14">
		<br><br>
		<label>TEAM LEAD NAME</label>
		<input type="text" name="TEAM LEAD NAME" size="14">
		<br><br>
		<label>
			TEAM MEMBERS COUNT
		</label>
		<select>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select>
		<br><br>
		<label>
		YEAR
	</label>
	<select>
		<option value="1st YEAR">1st YEAR</option>
		<option value="2nd YEAR">2nd YEAR</option>
		<option value="3rd YEAR">3rd YEAR</option>
		<option value="4th YEAR">4th YEAR</option>
	</select><br><br>
	<label>COLLEGE</label>
	<input type="text" name="COLLEGE" size="14">
	<br><br>
	<label>EMAIL ID(TEAM LEAD)</label>
	<input type="email" id="email" name="email">
	<br><br>
	<input type="submit" value="Submit">
</form>

</div>
</body>
</html>
<?php
$n = $_POST["txtNAME"];
$d = $_POST["txtDEPARTMENT"];
$l = $_POST["txtTEAM LEAD NAME"];
$c = $_POST["txtCOLLEGE"];
$e = $_POST["txtemail"];
$conn= new mysqli('localhost','root','','formone')or die("Could not connect to mysql".mysqli_error($con));
$qry="insert into userone(name,dept,teamlead,college,email) values($n,$d,$l,$c,$e)";
$res=mysql_query($qry) or die(mysql_error());
$n=mysql_num_rows($res);
if($n>0){
    echo"REGISTER SUCCESSFULLY";
}
else{
    echo"Try again.....!!!!";
}
?>