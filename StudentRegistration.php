<?php

    require_once "controllers/studentRegistrationController.php";
    include "Header.php";
    require_once "js/reg.js";
    //require "js/ajax.js"; 

?>

<body>
   
<h1>Student Registration</h1>

<form action="" method="POST" onsubmit="return validate()" >

<label for="fullName" class = "form-control">Full Name:</label>
<input type="text" id="Name" name="name" class = "form-control">

<label for="email" class = "form-control">Email:</label>
<input type="text" id="Email" name="email" placeholder="example@gmail.com" class = "form-control">

<label for="phoneNumber" class = "form-control">Mobile Number:</label>
<input type="number" name="mobileNumber" id="MobileNumber" placeholder = "01711.." class = "form-control">

<label for="className" class = "form-control">Class Name:</label>
<input type="text" id="ClassName" name="className" class = "form-control">

<label for="subject" class = "form-control">Subject Name:</label>
<input type="text" id="Subject" name="subject" class="form-control">

<label for="school/college" class="form-control">School/College Name:</label>
<input type="text" id="School" name = "school" class="form-control">

<label for="studentAddress" class="form-control">Address</label>
<input type="text" id="StudentAddress" name="address" class="form-control">

<label for="dob" class="form-control">Birth Date:</label>
<input type="date" name="dob" id="DOB" class="form-control">

<label for="StudentGender" class="form-control">Student Gender:</label>
<div class="form-check">
  <label class="form-check-label" for="genderMale">
    Male
  </label>
  <input class="" type="radio" name="gender" id="GenderMale" value = "Male">
</div>
<div class="form-check">
  <label class="form-check-label" for="genderFemale">
    Female
  </label>
  <input class="" type="radio" name="gender" id="GenderFemale" value = "Female">
</div>

<label for="TutorGender" class="form-control">Preffered Tutor Gender:</label>
<div class="form-check">
  <label class="form-check-label" for="genderMale">
    Male
  </label>
  <input class="" type="radio" name="tutorGender" id="TutorGenderMale" value = "Male">
</div>
<div class="form-check">
  <label class="form-check-label" for="genderFemale">
    Female
  </label>
  <input class="" type="radio" name="tutorGender" id="TutorGenderFemale" value = "Female">
</div>

<label for="AdditionalInfo" class="form-control">Additional Information:</label>
<textarea class="form-control" name="additionalInfo" id="AdditionalInformation" rows="3"></textarea>

<button class="btn btn-primary" type="submit" name="submit" id="Submit">Submit</button>

</form>

<div class = "text-center">

    <h3 id = "err_name"></h3>
    <h3 id = "err_ClassName"></h3>
    <h3 id = "err_Subject"></h3>
    <h3 id = "err_School"></h3>
    <h3 id = "err_email"></h3>
    <h3 id = "err_MobileNumber"></h3>
    <h3 id = "err_Studentgender"></h3>
    <h3 id = "err_Teachergender"></h3>
    <h3 id = "err_DOB"></h3>
    <h3 id = "err_StudentAddress"></h3>
    <h3 id = "success"></h3>
</div>

<script src="js/ajax.js"></script>

</body>

<html/>