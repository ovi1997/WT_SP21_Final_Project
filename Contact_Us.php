<?php
    
    include "Models/db_config.php";	
    include "Header.php";
    include "JS/Contact.js";
    include "Controllers/ContactControllers.php";
?>
<html>
	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
                 <link rel="stylesheet" href="styles/Contact.css">

	</head>
	<body>
	
	<div class="content">
		<form action=" " method="" >
		<h2 style = "color:#34495E;"><center>ABOUT US</center></h2>
		<fieldset style="width:480px; background-color:powderblue; padding: 20px 20px;">   
			<table>
			    <tr>
					<td><span><b>> Telephone  :: </b></span></td>
					<td><span><b>+880XXXXXXXXXX</b></span></td>
					

				</tr>
				<tr>
					<td><span><b>> Postal Address  :: </b></span></td>
					<td><span><b>Lorem Ipsum is simply dummy </b></span></td>
					
				</tr>
				<tr>
	 				<td><span><b>> Email  :: </b></span></td>
	 				<td><span><b>support@bdtutors.com</b></span></td>
					
				</tr>
				<tr>
	 				<td><span><b>> Social Media  :: </b></span></td>
	 				<td><span><b> facebook</b></span></td>
					
				</tr>
			</table>
			<br>
			
		  </fieldset>
            </div>
		</form>
	</body>
</html>

<html>
	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
       <style>
             body 
         {
                background:white;
         }

            .content 
         {
                max-width: 500px;
                margin: auto;
                background: white;
                padding: 10px;
         }
           input[type=submit]
         {
                  background-color: #4CAF50;
                  border: none;
                  color: white;
                  padding: 10px 20px;
                  text-decoration: none;
                  margin: 4px 2px;
                  cursor: pointer;
         }
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
		<h2 style = "color:#34495E;"><center>CONTACT US</center></h2>
		<fieldset style="width:450px; background-color:powderblue; padding: 40px 20px 10px 50px;">
          
			<table>
			    <tr>
					<td><span><b>YOUR FULL NAME</b></span></td>
					<td>: <input type="text" name="name" id="name" value="<?php echo $name;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_name;?></span><br>
                    <span id="err_name"></span><br></td>

				</tr>
				<tr>
					<td><span><b>YOUR E-MAIL</b></span></td>
					<td>: <input type="text" name="email" id="email" value="<?php echo $email;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_email;?></span><br>
                    <span id="err_email"></span><br></td>

				</tr>
				<tr>
	 				<td><span><b>MESSAGE</b></span></td>
					 <td>: <textarea name="msg" name="msg" id="msg" value="<?php echo $msg;?>"></textarea>
					 <span><?php echo "<br>";?></span>
					 <span style="color:red;"><?php echo "&nbsp".$err_msg;?></span></textarea><br>
                    <span id="err_msg"></span><br></td>
				</tr>
			</table>
			<br>
			<input type="Submit" name="Submit" value="SEND">
			<a href="Home.php" target="_blank">Home</a>
		  </fieldset>
		</form>
        </div>
	</body>
	






