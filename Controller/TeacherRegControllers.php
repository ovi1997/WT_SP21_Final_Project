<?php

    $fname="";
	$err_fname="";
    $lname="";
	$err_lname="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$confpass="";
	$err_confpass="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$gender="";
	$err_gender="";
    $nid="";
    $err_nid="";
	$bio="";
	$err_bio="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	 {
		 $fname = $_POST["fname"];
		 $lname = $_POST["lname"];
		 $uname = $_POST["uname"];
		 $pass = $_POST["pass"];
		 $email = $_POST["email"];
		 $phone = $_POST["phone"];
		 $address = $_POST["address"];
		 $gender = $_POST["gender"];
		 $nid = $_POST["nid"];
		 $bio = $_POST["bio"];
		 
		  
     
	 $conn = mysqli_connect($server,$user,$password,$db);
	 
	 if($conn)
	     {
		 echo "MESSAGE WAS STORED";
		 echo "<br>";
	     }
	 else{
		 mysqli_connect_error();
	     }
	   $query = "insert into teacher_registration values (NULL,'$fname','$lname','$uname',
	   '$pass','$email','$phone','$address','$gender','$nid','$bio')";
	 
	 if(mysqli_query($conn,$query))
	     {	 
		 echo "YOU WILL GET REPLY SHORTLY";
	     }
	 else{
		 echo "SOMETHING WENT WRONG";
	     }
	 }
	
	

	 error_reporting(E_ALL & E_STRICT); ini_set('display_errors', '1');
	 ini_set('log_errors', '0'); ini_set('error_log', './');
	 if(isset($_POST["Submit"]))
	 {
		 if(empty($_POST["fname"]))
		 {
			 $err_fname="[ FIRST NAME REQUIRED ]";
		 }
         if(empty($_POST["lname"]))
		 {
			 $err_lname="[ LAST NAME REQUIRED ]";
		 }
		 if(empty($_POST["uname"]))
		 {
			 $err_uname="[ USERNAME REQUIRED ]";
		 }
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[ USERNAME SHOULD CONTAIN ATLEAST 6 CHARACTERS OR MORE ]";
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="[ USERNAME SHOULD NOT CONTAIN WHITE SPACE ]";
		 }
		 else
		 {
			 $uname=$_POST["uname"];
		 }
         if(!empty($_POST["pass"]) && isset( $_POST['pass'] ))
         {
             $pass = $_POST["pass"];
             $confpass = $_POST["confpass"];
         if (mb_strlen($_POST["pass"]) < 7 ) {
             $err_pass = "[PASSWORD MUST BE AT LEAST 8 CHARACTERS]";
         }
         elseif(!preg_match("#[0-9]+#",$pass)) {
             $err_pass = "[PASSWORD MUST CONTAIN AT LEAST 1 NUMBER]";
         }
         elseif(!preg_match("#[A-Z]+#",$pass)) {
             $err_pass = "[PASSWORD MUST CONTAIN AT LEAST 1 CAPITAL LETTER";
         }
         elseif(!preg_match("#[a-z]+#",$pass)) {
             $err_pass = "[PASSWORD MUST CONTAIN AT LEAST 1 SMALL LETTER]";
         }
         elseif(!preg_match("#[\W]+#",$pass)) {
             $err_pass = "[PASSWORD MUST CONTAIN AT LEAST 1 SPECIAL CHARACTER]";
         } 
         elseif (strcmp($pass, $confpass) !== 0) {
             $err_confpass = "[PASSWORD MUST MATCH]";
         }
         }   
         else {
         $err_pass = "[PLEASE ENTER PASSWORD]";
         }
         if(empty($_POST["confpass"]))
		 {
			 $err_confpass="[ CONFIRM PASSWORD ]";
		 }
         if (empty($_POST["email"])) {
             $err_email = "[PLEASE ENTER YOUR E-MAIL]";
         } 
         else 
         {
             $email = test_input($_POST["email"]);

         if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) 
         {
             $err_email = "[INVALID E-MAIL FORMAT]"; 
         }
         }
                 

         if(!empty($_POST["phone"]) && isset( $_POST['phone'] ))
         {
             $phone = $_POST["phone"];
         if (mb_strlen($_POST["phone"]) < 10 ) {
             $err_phone = "[PHONE NUMBER MUST HAVE AT LEAST 11 CHARACTERS]";
         }
         elseif(!preg_match("#[0-9]+#",$phone)) {
             $err_phone = "[PHONE NUMBER CAN HAVE ONLY NUMERIC CHARACTERS]";
         }
         }
         else {
             $err_phone = "[PLEASE ENTER PHONE NUMBER]";
         }
             
         
		 if(empty($_POST["address"]))
		 {
			 $err_address="[ ADDRESS REQUIRED ]";
		 }
		 
		 if(!isset($_POST["gender"]))
		 {
			 $err_gender="[PLEASE SELECT GENDER]";
		 }
		 else
		 {
			 $gender=$_POST["gender"];
		 }
         if(!empty($_POST["nid"]) && isset( $_POST['nid'] ))
         {
             $nid = $_POST["nid"];
         if (mb_strlen($_POST["nid"]) < 16 ) {
             $err_nid = "[NID MUST HAVE 16 CHARACTERS]";
         }
         elseif(!preg_match("#[0-9]+#",$nid)) {
             $err_nid = "[NID CAN HAVE ONLY NUMERIC CHARACTERS]";
         }
         }
         else {
             $err_nid = "[PLEASE ENTER NID NUMBER]";
         }
          
		 if(empty($_POST["bio"]))
		 {
			 $err_bio="[ PLEASE PROVIDE YOUR BIO ]";
		 }
		 else
		 {
			 $bio=$_POST["bio"];
		 
         }
      
	 }
         function test_input($data) 
         {
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
         }

?>