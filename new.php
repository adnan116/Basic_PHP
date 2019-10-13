<?php  
	
	$uname  = $_POST['uname'];
	$password = $_POST['password'];
	$dob = $_POST['dob'];
	$add = $_POST['add'];
	$dept = $_POST['dept'];
	$gender  = $_POST['gender'];

	$opt = $_POST['option'];

	echo $uname."<br>";
	echo $password."<br>";
	echo $dob."<br>";
	echo $add."<br>";
	echo $dept."<br>";
	echo $gender."<br>";

	for ($i=0; $i <count($opt) ; $i++) { 
		echo $opt[$i]."<br>";
	}


?>
