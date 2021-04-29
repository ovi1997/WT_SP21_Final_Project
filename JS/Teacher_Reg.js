<script>
    function get(id) {
        return document.getElementById(id);
    }

    function validate() {
        refresh();
        var hasError = false;
        
        var name = get("fname");
        if (name.value == "") 
        {
            get("err_fname").innerHTML = "[ FIRST NAME REQUIRED ]";
            get("err_fname").style.color="red";
            hasError = true;
        
        }
        if (get("lname").value == "") {
            get("err_lname").innerHTML = "[ LAST NAME REQUIRED] ";
            get("err_lname").style.color="red";
            hasError = true;
        }
        if (get("uname").value == "") {
            get("err_uname").innerHTML = "[ USER NAME REQUIRED] ";
            get("err_uname").style.color="red";
            hasError = true;
        }
             
        if (get("pass").value == "") {
            get("err_pass").innerHTML = "[ PASSWORD REQUIRED] ";
            get("err_pass").style.color="red";
            hasError = true;
        }
        if (get("confpass").value == "") {
            get("err_confpass").innerHTML = "[ CONFIRM PASSWORD ] ";
            get("err_confpass").style.color="red";
            hasError = true;
        }
        
        if (get("email").value == "") {
            get("err_email").innerHTML = "[ EMAIL REQUIRED ] ";
            get("err_email").style.color="red";
            hasError = true;
        }
        
        if (get("phone").value == "") {
            get("err_phone").innerHTML = "[ PHONE NUMBER REQUIRED ] ";
            get("err_phone").style.color="red";
            hasError = true;
        }
        
        if (get("address").value == "") {
            get("err_address").innerHTML = "[ FULL ADDRESS REQUIRED]  ";
            get("err_address").style.color="red";
            hasError = true;
        }
        if (get("gender").value == "") {
            get("err_gender").innerHTML = "[ GENDER REQUIRED]  ";
            get("err_gender").style.color="red";
            hasError = true;
        }

        if (get("nid").value == "") {
            get("err_nid").innerHTML = "[ NID NUMBER REQUIRED ]";
            get("err_nid").style.color="red";
            hasError = true;
        }
        if (get("bio").value == "") {
            get("err_bio").innerHTML = "[ ADDITIONAL INFO REQUIRED ]";
            get("err_bio").style.color="red";
            hasError = true;
        }
        
        return !hasError;
        
        function refresh(){
            get("err_fname").innerHTML= " ";
            get("err_lname").innerHTML= " ";
            get("err_uname").innerHTML= " ";
            get("err_pass").innerHTML= " ";
            get("err_confpass").innerHTML= " ";
            get("err_email").innerHTML= " ";
            get("err_phone").innerHTML= " ";
            get("err_address").innerHTML= " ";
            get("err_nid").innerHTML= " ";
            get("err_gender").innerHTML= " ";
            get("err_bio").innerHTML= " ";
            
        }
    }
</script>