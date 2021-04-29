<script>
	function checkValidity(){
		var response = document.getElementById("success").innerHTML;

		var name = get("Name").value;
		var className = get("ClassName").value;
		var subject = get("Subject").value;
		var school = get("School").value;
		var address = get("StudentAddress").value;
		var dob = get("DOB").value;
		var email = get("Email").value;
		var mobileNumber = get("MobileNumber").value;
		var gender = get("GenderMale").value;
		var tutorGender = get("TutorGenderMale").value;
		var additionalInfo = get("AdditionalInformation").value;

		var xhttp = new XMLHttpRequest();
		if(response == "All Valid"){

	    xhttp.open('POST', '/controllers/studentRegistrationController.php', true);
	    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        
        xhttp.onreadystatechange = function(){
		
		           if (this.readyState == 4 && this.status == 200) {

						document.getElementById("success").innerHTML = this.responseText;
	                            }
	                       }
 
            xhttp.send('name='+name+'&className='+className+'&subject='+subject+'&school='+school+
			'&address='+address+'&dob='+dob+'&email='+email+'&mobileNumber='+mobileNumber+
			'&gender='+gender+'&tutorGender='+tutorGender+'&additionalInfo='+additionalInfo);
		}
	}

	checkValidity();

 </script>