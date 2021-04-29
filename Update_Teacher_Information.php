<?php

    include "Header.php";

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
         }
         function test_input($data) 
         {
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
         }
?>
  
        
    <html>
    <head>
	      <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="styles/UpdateTeacher.css">
       
	</head>
	<body>
	    
	    <div class="content">
		<form action=" " method="post">
		<h2 style = "color:#34495E;"><center>UPDATE TEACHER'S INFORMATION</center></h2>
		<fieldset style="width:440px; background-color:powderblue; padding: 40px 20px 10px 50px;">
			<table>
				<tr>
					<td><span><b>USERNAME</b></span></td>
					<td>:  <input type="text" name="uname" placeholder="New Username" value="<?php echo $uname;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_uname;?></span></td>

				</tr>
				 <tr>
					<td><span><b>PASSWORD</b></span></td>
					<td>:  <input type="password" name="pass" placeholder="New Password" value="<?php echo $pass;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>CONFIRM PASSWORD</b></span></td>
					<td>:  <input type="password" name="confpass" placeholder="Confirm Password" value="<?php echo $confpass;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_confpass;?></span></td>
				</tr>
				
				 <tr>
					<td><span><b>E-MAIL</b></span></td>
					<td>:  <input type="text" name="email" placeholder="New Email" value="<?php echo $email;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_email;?></span></td>

				</tr>
				<tr>
					<td><span><b>PHONE</b></span></td>
					<td>:  <input type="text" name="phone"  placeholder="New Phone Number" value="<?php echo $phone;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_phone;?></span></td>

				</tr>
				<tr>
					<td><span><b>ADDRESS</b></span></td>
					<td>:  <input type="text" name="address"  placeholder="New Address" value="<?php echo $address;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_address;?></span></td>

				</tr>
               </table>
             <br>
			<input type="Submit" name="Submit" value="UPDATE">
		  </fieldset>
		</form>
        </div>
	</body>
</html>
<?php
              if(isset($_POST["Submit"]))
    {
	          echo "UPDATED TEACHER'S INFORMATION"."<br>";
              echo "<br>";
              echo "<br>";
              echo "USERNAME : ".$_POST["uname"]."<br>";
              echo "NEW PASSWORD : ".$_POST["pass"]."<br>";
              echo "E-Mail : ".$_POST["email"]."<br>";
              echo "PHONE : ".$_POST["phone"]."<br>";
              echo "ADDRESS : ".$_POST["address"]."<br>";
         
         
              }
?>