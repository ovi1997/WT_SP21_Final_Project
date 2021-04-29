<?php	

	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
    $confpass="";
	$err_confpass="";
    $email="";
	$err_email="";
    $card="";
    $err_card="";
    $year="";
    $err_year="";
    $pin="";
    $err_pin="";
    
	 
	 if($_SERVER["REQUEST_METHOD"] == "POST")
	 {
		 $uname = $_POST["uname"];
		 $pass = $_POST["pass"];
		 $email = $_POST["email"];
		 $card = $_POST["card"];
		 $year = $_POST["year"];
		 $pin = $_POST["pin"];
		  
     
	 $conn = mysqli_connect($server,$user,$password,$db);
	 
	 if($conn)
	     {
		 echo "VALUES WERE STORED";
		 echo "<br>";
	     }
	 else{
		 mysqli_connect_error();
	     }
	 $query = "insert into payment_info values (NULL,'$uname','$pass','$email','$card','$year','$pin')";
	 
	 if(mysqli_query($conn,$query))
	     {	 
		 echo "PAYMENT CONFIRMED";
	     }
	 else{
		 echo "SOMETHING WENT WRONG";
	     }
	 }

    
     error_reporting(E_ALL & E_STRICT); ini_set('display_errors', '1');
	 ini_set('log_errors', '0'); ini_set('error_log', './');
	 if(isset($_POST["Submit"]))
	 {
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
               
         if(!empty($_POST["card"]) && isset( $_POST['card'] ))
         {
             $card = $_POST["card"];
         if (mb_strlen($_POST["card"]) < 16 ) {
             $err_card = "[CARD MUST HAVE 16 CHARACTERS]";
         }
         elseif(!preg_match("#[0-9]+#",$card)) {
             $err_card = "[CARD CAN HAVE ONLY NUMERIC CHARACTERS]";
         }
         }
         else {
             $err_card = "[PLEASE ENTER CARD NUMBER]";
         }
         
         if(!empty($_POST["year"]) && isset( $_POST['year'] ))
         {
             $year = $_POST["year"];
             
         if (mb_strlen($_POST["year"]) <4) {
             $err_year = "[EXP. YEAR MUST BE AFTER THE YEAR 2010]";
         }
         elseif(!preg_match("#[0-9]+#",$year)) {
             $err_year = "[ONLY NUMERIC VALUE]";
         }
         }    
         else {
             $err_year = "[PLEASE ENTER YEAR OF EXP.]";
         } 
         
         if(!empty($_POST["pin"]) && isset( $_POST['pin'] ))
         {
             $pin = $_POST["pin"];
             
         if (mb_strlen($_POST["pin"]) < 3  || mb_strlen($_POST["pin"]) > 3) {
             $err_pin = "[ENTER 3 DIGIT PIN NUMBER]";
         }
         elseif(!preg_match("#[0-9]+#",$pin)) {
             $err_pin = "[ONLY NUMERIC VALUE]";
         }
         }
         
         else {
             $err_pin = "[PLEASE ENTER PIN NUMBER]";
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