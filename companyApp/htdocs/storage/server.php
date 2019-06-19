<?php
session_start();
//Session is for passing a variable, to report user what has been done
$db = mysqli_connect('127.0.0.1', 'root', 'vakaras8', 'companyapp');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];
$registration_code = $_POST['registration_code'];
$id = 0;
$update = false;
$errors = [];
// update boolean is for session messages

if (isset($_POST['save'])) {
        $query= "INSERT INTO companies (name, registration_code, email, phone, comment ) VALUES ('$name', '$registration_code', '$email', '$phone', '$comment')";
        mysqli_query($db, $query);
        $_SESSION['message'] = "Company added"; 
        header('location: /views/home.php');
}



if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];;
    $address = $_POST['address'];
    $query = "UPDATE companies SET name='$name', registration_code='$registration_code',  email='$email', phone='$phone', comment='$comment'  WHERE id='$id'";
	mysqli_query($db, $query);
	$_SESSION['message'] = "Company updated"; 
	header('location: /views/home.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM companies WHERE id=$id");
	$_SESSION['message'] = "Company erased"; 
	header('location: /views/home.php');
}

$results = mysqli_query($db, "SELECT * FROM companies");

?>