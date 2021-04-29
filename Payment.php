<?php

    include "Models/db_config.php";
    include "Header.php";
    include "JS/Payment.js";
    include "Controllers/PaymentControllers.php"
         
?>

<html>
  <head>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="styles/Payment.css">
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
		<h2 style = "color:#34495E;"><center>PAY ONLINE</center></h2>
		<fieldset style="width:460px; background-color:powderblue; padding: 40px 20px 10px 50px;">
			<table>
				<tr>
					<td><span><b>STUDENT USERNAME</b></span></td>
					<td>: <input type="text" name="uname" id="uname" placeholder="User Name" value="<?php echo $uname;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_uname;?></span><br>
                    <span id="err_uname"></span><br></td>

				</tr>
				 <tr>
					<td><span><b>STUDENT PASSWORD</b></span></td>
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
					<td><span><b>DEBIT/CREDIT CARD NUMBER</b></span></td>
					<td>: <input type="text" name="card" id="card" placeholder="Card Number" value="<?php echo $card;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_card;?></span><br>
                    <span id="err_card"></span><br></td>


				</tr>
                <tr>
					<td><span><b>EXP. YEAR</b></span></td>
					<td>: <input type="text" name="year" id="year" placeholder="Year" value="<?php echo $year;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_year;?></span><br>
                    <span id="err_year"></span><br></td>


				</tr>
                <tr>
					<td><span><b>PIN</b></span></td>
					<td>: <input type="text" name="pin" id="pin" placeholder="Pin Number" value="<?php echo $pin;?>">
					<span><?php echo "<br>";?></span>
					<span style="color:red;"><?php echo $err_pin;?></span><br>
                    <span id="err_pin"></span><br></td>

				</tr>
              
               </table>
             <br>
			<input type="Submit" name="Submit" value="PROCEED">
			 <a href="Home.php" target="_blank">Home</a>
		  </fieldset>
		</form>
        </div>
	</body>
	
</html>
