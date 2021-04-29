<?php

	include "models/db_config.php";
    
	if(isset($_REQUEST['submit']))
	 {
		 
		 
		 $name = $_POST["name"];
		 $email = $_POST["email"];
		 $mobileNumber = $_POST["mobileNumber"];
		 $className = $_POST["className"];
		 $subject = $_POST["subject"];
		 $school = $_POST["school"];
		 $address = $_POST["address"];
		 $dob = $_POST["dob"];
		 $gender = $_REQUEST["gender"];
		 $tutorGender = $_REQUEST["tutorGender"];
		 $additionalInfo = $_POST["additionalInfo"];
		
     
	 	$conn = mysqli_connect($server,$user,$password,$db);
	 
	 	if($conn)
	     	{
		 	echo "MESSAGE WAS STORED";
		 	echo "<br>";
	     	}
	 	else{
		 	mysqli_connect_error();
	     	}
	   	$query = "insert into users (Name, Email, PhoneNumber, Class, Subject, School, Address, Birth_Date, Gender, T_Gender, Additional_Information) values ('$name', '$email', '$mobileNumber', '$className', '$subject', '$school', '$address',
	   '$dob', '$gender', '$tutorGender', '$additionalInfo')";
	 
	 	if(mysqli_query($conn,$query))
	    {	 
		 echo "YOU WILL GET REPLY SHORTLY";
	    }
	 	else{
		 echo "SOMETHING WENT WRONG";
	     	}
	 }
	

?>