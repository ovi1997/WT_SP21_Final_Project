<?php
    
	include "Models/db_config.php";
    include "Header.php";

	$conn = mysqli_connect($server,$user,$password,$db);
	$query = "SELECT * from teacher_registration WHERE username='teacher1'";
	$result = mysqli_query($conn,$query);

?>
    <table border ="1" style ="border-collasp:collasp">
	  <tr>
	    <th>FIRST NAME</th>
	    <th>LAST NAME</th>
	    <th>USERNAME</th>
	    <th>EMAIL</th>
	    <th>PHONE</th>
	    <th>ADDRESS</th>
	    <th>DOB</th>
	    <th>GENDER</th>
	    <th>NID</th>
	    <th>BIO</th>
	  </tr>
<?php

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		  echo "<td>".$row["first name"]."</td>";
          echo "<td>".$row["last name"]."</td>";
		  echo "<td>".$row["username"]."</td>";
		  echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["phone"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["dob"]."</td>";
        echo "<td>".$row["gender"]."</td>";
        echo "<td>".$row["nid"]."</td>";
        echo "<td>".$row["bio"]."</td>";
		echo "</tr>";
	}
?>	