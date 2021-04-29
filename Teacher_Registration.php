<?php

    include "Models/db_config.php";
    include "Header.php";
    include "JS/Teacher_Reg.js";
    include "Controllers/TeacherRegControllers.php";

?>

<html>
	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/Teacher_Reg.css">
        <style>
            a:link, a:visited {
                 background-color: #4CAF50;
                 color: white;
                 padding: 8px 18px;
                 text-align: center;
                 text-decoration: none;
                 display: inline-block;
        }
        </style>
	</head>
	<body>
	  <div class="content">
       <form action=" " onsubmit= "return validate()" method="post">
       <h2 style = "color:#34495E;"><center>TEACHER'S REGISTRATION FORM</center></h2>
		<fieldset style="width:450px; background-color:powderblue; padding: 40px 20px 10px 50px;">
			<table>
			    <tr>
					<td><span><b>FIRST NAME</b></span></td>
					<td>: <input type="text" name="fname" id="fname" placeholder="First Name" value="<?php echo $fname;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_fname;?></span><br>
                    <span id="err_fname"></span><br></td>

				</tr>
				<tr>
					<td><span><b>LAST NAME</b></span></td>
					<td>: <input type="text" name="lname" id="lname" placeholder="Last Name" value="<?php echo $lname;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_lname;?></span><br>
                    <span id="err_lname"></span><br></td>

				</tr>
				<tr>
					<td><span><b>USERNAME</b></span></td>
					<td>: <input type="text" name="uname" id="uname" placeholder="User Name" value="<?php echo $uname;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_uname;?></span><br>
                    <span id="err_uname"></span><br></td>
				</tr>
				 <tr>
					<td><span><b>PASSWORD</b></span></td>
					<td>: <input type="password" name="pass" id="pass" placeholder="Password" value="<?php echo $pass;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_pass;?></span><br>
                    <span id="err_pass"></span><br></td>
				</tr>
				<tr>
					<td><span><b>CONFIRM PASSWORD</b></span></td>
					<td>: <input type="password" name="confpass" id="confpass" placeholder="Confirm Password" value="<?php echo $confpass;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_confpass;?></span><br>
                    <span id="err_confpass"></span><br></td>
				</tr>
				
				 <tr>
					<td><span><b>E-MAIL</b></span></td>
					<td>: <input type="text" name="email" id="email" placeholder="E-mail" value="<?php echo $email;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_email;?></span><br>
                    <span id="err_email"></span><br></td>

				</tr>
				<tr>
					<td><span><b>PHONE</b></span></td>
					<td>: <input type="text" name="phone" id="phone" placeholder="Phone Number" value="<?php echo $phone;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_phone;?></span><br>
                    <span id="err_phone"></span><br></td>
				</tr>
				<tr>
					<td><span><b>ADDRESS</b></span></td>
					<td>: <textarea name="address" id="address" value="<?php echo $bio;?>"></textarea>
				    <span><?php echo "<br>";?></span>
				    <span style="color:red;"><?php echo "&nbsp".$err_bio;?></span>
                    <span id="err_address"></span><br></td>

				</tr>
				
				<tr>
				<td><span><b>DATE OF BIRTH </b></span></td>
				<td>:
				<select name="day">
			
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
                            
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>Month</option>
					<?php
						$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($mon);$j++)
						{
							echo "<option>$mon[$j]</option>";
                            
						}
					?>
				</select>
				<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($k=1900;$k<=2100;$k++)
						{
							echo "<option>$k</option>";
                           
						}        
					?>
				</select>
				
				</td>
				</tr>
				
				<tr>
					<td><span><b>GENDER</b></span></td>
					<td>: <input type="radio" name="gender" id="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" id="gender" value="Female"><span>Female</span>
					    <span><?php echo "<br>";?></span>
						<span style="color:red;"><?php echo "&nbsp ".$err_gender;?></span>
					    <span id="err_gender"></span><br></td>
				</tr>
				<tr>
					<td><span><b>NID NO.</b></span></td>
					<td>: <input type="text" name="nid" id="nid" placeholder="Nid Number" value="<?php echo $nid;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_nid;?></span><br>
                    <span id="err_nid"></span><br></td>


				</tr>
				<tr>
	 				<td><span><b>ADDITIONAL INFORMATION</b></span></td>
					 <td>: <textarea name="bio" id="bio" value="<?php echo $bio;?>"></textarea>
					 <span><?php echo "<br>";?></span>
					 <span style="color:red;"><?php echo "&nbsp".$err_bio;?></span></textarea><br>
                    <span id="err_bio"></span><br></td>
				</tr>
			</table>
			<br>
			<input type="Submit" name="Submit" value="Register">
			 <a href="Home.php" target="_blank">Home</a>
		  </fieldset>
		</form>
		</div>
	</body>
</html>
