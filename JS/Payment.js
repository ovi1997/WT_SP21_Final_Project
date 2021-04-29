<script>
    function get(id) {
        return document.getElementById(id);
    }

    function validate() {
        refresh();
        var hasError = false;
        var name = get("uname");
        if (name.value == "") 
        {
            get("err_uname").innerHTML = "[ USERNAME REQUIRED ]";
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
            get("err_email").innerHTML = "[ EMAIL REQUIRED] ";
            get("err_email").style.color="red";
            hasError = true;
        }
        
        if (get("card").value == "") {
            get("err_card").innerHTML = "[ CARD NUMBER REQUIRED] ";
            get("err_card").style.color="red";
            hasError = true;
        }
        
        if (get("year").value == "") {
            get("err_year").innerHTML = "[ YEAR OF EXP. REQUIRED] ";
            get("err_year").style.color="red";
            hasError = true;
        }

        if (get("pin").value == "") {
            get("err_pin").innerHTML = "[ PIN CODE REQUIRED ]";
            get("err_pin").style.color="red";
            hasError = true;
        }
        return !hasError;
        
        function refresh(){
            get("err_uname").innerHTML= " ";
            get("err_pass").innerHTML= " ";
            get("err_confpass").innerHTML= " ";
            get("err_email").innerHTML= " ";
            get("err_card").innerHTML= " ";
            get("err_year").innerHTML= " ";
            get("err_pin").innerHTML= " ";
            
        }
    }
</script>