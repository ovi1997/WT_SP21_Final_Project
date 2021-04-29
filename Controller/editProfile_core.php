<?php

$name = "";
$err_name = "";
$email = "";
$err_email = "";
$dob = "";
$err_dob = "";
$address = "";
$err_address = "";
$gender = "";
$err_gender = "";
$phone_no = "";
$err_phone_no = "";
$institutionName = "";
$err_institutionName = "";
$designation = "";
$err_designation = "";
$institutionAddress = "";
$err_institutionAddress = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $err_name = "Name Required";
    } else {
        $name = $_POST["name"];
    }
    if (empty($_POST["address"])) {
        $err_address = "Addres Required";
    } else {
        $address = $_POST["address"];
    }
    if (empty($_POST["phone_no"])) {
        $err_phone_no = "Phone Number Required";
    } else {
        $phone_no = $_POST["phone_no"];
    }
    if (empty($_POST["dob"])) {
        $err_dob = "Date of Birth Required";
    } else {
        $dob = $_POST["dob"];
    }
    if (empty($_POST["designation"])) {
        $err_designation = "Designation Required";
    } else {
        $designation = $_POST["designation"];
    }
    if (empty($_POST["institutionName"])) {
        $err_institutionName = "Institution Name Required";
    } else {
        $institutionName = $_POST["institutionName"];
    }
    if (empty($_POST["institutionAddress"])) {
        $err_institutionAddress = "Institution Address Required";
    } else {
        $institutionAddress = $_POST["institutionAddress"];
    }
} 

include_once "models/config.php";

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$connection) {
    throw new Exception("Database cannot Connect");
}

$action = $_REQUEST['action'] ?? '';

if ('addManager' == $action) {

    $name = $_REQUEST['name'] ?? '';
    $dob = $_REQUEST['dob'] ?? '';
    $gender = $_REQUEST['gender'] ?? '';
    $address = $_REQUEST['address'] ?? '';
    $phone_no = $_REQUEST['phone_no'] ?? '';
    $designation = $_REQUEST['designation'] ?? '';
    $institutionName = $_REQUEST['institutionName'] ?? '';
    $institutionAddress = $_REQUEST['institutionAddress'] ?? '';


    $filename = $_FILES["image"]["name"];
    $filetmpname = $_FILES["image"]["tmp_name"];
    $folder = "image/";


    if ($name && $dob && $address && $phone_no && $gender && $designation && $institutionName && $institutionAddress) {

        $query = "UPDATE users SET name='$name', dob='$dob', gender='$gender', image = '$filename', address='$address', phone_no='$phone_no', institutionName='$institutionName', designation='$designation', institutionAddress='$institutionAddress' WHERE email='{$_SESSION["email"]}'";
        $result = mysqli_query($connection, $query);
        move_uploaded_file($filetmpname, $folder . $filename);

        header("dashboard.php");
    }
}
