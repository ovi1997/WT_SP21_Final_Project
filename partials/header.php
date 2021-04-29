<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BDTutor | Dashboard</title>

    <script language="JavaScript" type="text/javascript">
        function checkDelete() {
            return confirm('Are you sure?');
        }
    </script>
    <script language="JavaScript" type="text/javascript">
        function get(id) {
            return document.getElementById(id);
        }

        function formValidate() {
            refresh();
            var hasError = false;
            console.log(name);
            if (get("name").value == "") {
                get("err_name").innerHTML = "*Name required";
                get("err_name").style.color = "red";
                hasError = true;
            }
            if (get("dob").value == "") {
                get("err_dob").innerHTML = "*Date Of Birth required";
                get("err_dob").style.color = "red";
                hasError = true;
            }
            var email = get("email")
            if (email.value == "") {
                get("err_email").innerHTML = "*Email required";
                get("err_email").style.color = "red";
                hasError = true;
            }
            if (get("address").value == "") {
                get("err_address").innerHTML = "*Address required";
                get("err_address").style.color = "red";
                hasError = true;
            }
            /*  var gender = document.getElementByName("gender").innerHTML;
             for (var i = 0; i < gender.length; i++) {
                 if (gender[i].checked) {
                     hasError;
                 } else {
                     get("err_gender").innerHTML = "*Gender required";
                     get("err_gender").style.color = "red";
                     hasError = true;
                 }
             } */
            if (get("phone_no").value == "") {
                get("err_phone_no").innerHTML = "*Phone Number required";
                get("err_phone_no").style.color = "red";
                hasError = true;
            }
            var pass = get("password")
            if (pass.value == "") {
                get("err_pass").innerHTML = "*password required";
                get("err_pass").style.color = "red";
                hasError = true;
            }
            if (get("confirm_password").value == "") {
                get("err_confirm_pass").innerHTML = "*Confirm password required";
                get("err_confirm_pass").style.color = "red";

                hasError = true;
            }
            return !hasError;
        }

        function refresh() {
            get("err_name").innerHTML = "";
            get("err_dob").innerHTML = "";
            get("err_email").innerHTML = "";
            get("err_address").innerHTML = "";
            get("err_gender").innerHTML = "";
            get("err_phone_no").innerHTML = "";
            get("err_pass").innerHTML = "";
            get("err_confirm_pass").innerHTML = "";
        }
    </script>
</head>

<body>