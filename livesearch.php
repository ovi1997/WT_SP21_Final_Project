<?php include 'Header.php';
    
?>
<!DOCTYPE html>
<html>
<head>
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
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
<div class="add">
<form>
<input type="text" name="users" id="users" placeholder="Search" oninput="showUser(this.value)">
</form>
<br>
<a href="Home.php" target="_blank">Home</a>
<div id="txtHint"><b>STUDENT INFORMATION</b></div>

</div>
</body>
</html>