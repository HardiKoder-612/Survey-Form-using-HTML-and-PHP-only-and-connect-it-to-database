<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$DOB = $_POST['DOB'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$life = $_POST['life'];
	$infected = $_POST['infected'];
	$vacc = $_POST['vacc'];
	$job = $_POST['job'];
	$word = $_POST['word'];
	$salary = $_POST['salary'];
	$idea = $_POST['idea'];
	$yidea = $_POST['yidea'];

	$conn = new mysqli('localhost','root','','survey');
if($conn->connect_error){
die('Connection Failed : '.$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("insert into form(fname,lname,email,number,DOB,gender,age,life,infected,vacc,job,word,salary,idea,yidea)
		values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);
	$stmt->bind_param("sssississssssss",$fname,$lname,$email,$number,$DOB,$gender,$age,$life,$infected,$vacc,$job,$word,$salary,$idea,$yidea);
	$stmt->execute();
	echo "Registration Successfully"; 
	$stmt->close();
	$conn->close();
}	
?>

