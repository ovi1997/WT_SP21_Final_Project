 <?php   
    
    $name="";
	$err_name="";
	$email="";
    $err_email="";
    $msg="";
	$err_msg="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	 {
		 $name = $_POST["name"];
		 $email = $_POST["email"];
		 $msg = $_POST["msg"];
		  
     
	 $conn = mysqli_connect($server,$user,$password,$db);
	 
	 if($conn)
	     {
		 echo "MESSAGE WAS STORED";
		 echo "<br>";
	     }
	 else{
		 mysqli_connect_error();
	     }
	 $query = "insert into contact_us values (NULL,'$name','$email','$msg')";
	 
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
		 if(empty($_POST["name"]))
		 {
			 $err_name="[ NAME REQUIRED ]";
		 }
         
         if (empty($_POST["email"])) {
             $err_email = "[ E-MAIL REQUIRED ]";
         } 
         else 
         {
             $email = test_input($_POST["email"]);

         if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) 
         {
             $err_email = "[INVALID E-MAIL FORMAT]"; 
         }
         }
         
         if(empty($_POST["msg"]))
		 {
			 $err_msg="[ WRITE YOUR MESSAGE ]";
		 }
		 else
		 {
			 $msg=$_POST["msg"];
		 
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