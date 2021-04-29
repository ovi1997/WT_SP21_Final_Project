<script>
    function get(id) {
        return document.getElementById(id);
    }

    function validate() {
        refresh();
        var hasError = false;
        var uname = get("name");
        if (uname.value == "") 
        {
            get("err_name").innerHTML = "[ NAME REQUIRED ]";
            get("err_name").style.color="red";
            hasError = true;
        
        }
        if (get("email").value == "") {
            get("err_email").innerHTML = "[ EMAIL REQUIRED] ";
            get("err_email").style.color="red";
            hasError = true;
        }

        if (get("msg").value == "") {
            get("err_msg").innerHTML = "[ MESSAGE REQUIRED ]";
            get("err_msg").style.color="red";
            hasError = true;
        }
        return !hasError;
        
        function refresh(){
            get("err_name").innerHTML= " ";
            get("err_email").innerHTML= " ";
            get("err_msg").innerHTML= " ";
        }
    }
</script>