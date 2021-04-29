<script>
    function get(id){
		return document.getElementById(id);
	}
	function validate(){
		refresh();
		var hasError=false;
		if(get("Name").value == ""){
			get("err_name").innerHTML = "Name Required";
			get("err_name").style.color = "red";
			hasError = true;
		}
		if(get("ClassName").value == ""){
			get("err_ClassName").innerHTML = "Class Name Required";
			get("err_ClassName").style.color = "red";
			hasError = true;
		}
		if(get("Subject").value == ""){
			get("err_Subject").innerHTML = "Subject Required";
			get("err_Subject").style.color = "red";
			hasError = true;
		}
		if(get("School").value == ""){
			get("err_School").innerHTML = "School Name Required";
			get("err_School").style.color = "red";
			hasError = true;
		}
		if(get("StudentAddress").value == ""){
			get("err_StudentAddress").innerHTML = "Student Address Required";
			get("err_StudentAddress").style.color = "red";
			hasError = true;
		}
		if(get("DOB").value == ""){
			get("err_DOB").innerHTML = "Date of Birth Required";
			get("err_DOB").style.color = "red";
			hasError = true;
		}
        if(get("Email").value == ""){
            get("err_email").innerHTML = "E-mail Required";
			get("err_email").style.color = "red";
			hasError = true;
		}
		if(get("MobileNumber").value == ""){
            get("err_MobileNumber").innerHTML = "Number Required";
			get("err_MobileNumber").style.color = "red";
			hasError = true;
		}else if(get("MobileNumber").value.length<11){
            get("err_MobileNumber").innerHTML = "At least 11 numbers";
			get("err_MobileNumber").style.color = "red";
			hasError = true;
		}
        if(!get("GenderMale").checked && !get("GenderFemale").checked){
			get("err_Studentgender").innerHTML = "Select a gender";
			get("err_Studentgender").style.color = "red";
			hasError = true;
		}

		if(!get("TutorGenderMale").checked && !get("TutorGenderFemale").checked){
			get("err_Teachergender").innerHTML = "Select a gender";
			get("err_Teachergender").style.color = "red";
			hasError = true;
		}
		
		if(hasError == false){
			get("success").innerHTML = "All Valid";
			get("success").style.color = "green";
		}	

        return !hasError;	
	}

    function refresh(){
		get("err_name").innerHTML = "";
		get("err_ClassName").innerHTML = "";
		get("err_Subject").innerHTML = "";
		get("err_School").innerHTML = "";
		get("err_email").innerHTML = "";
		get("err_MobileNumber").innerHTML = "";
		get("err_Studentgender").innerHTML = "";
		get("err_Teachergender").innerHTML = "";
        get("err_DOB").innerHTML = "";
		get("err_StudentAddress").innerHTML = "";
		get("success").innerHTML = "";
	}

</script>