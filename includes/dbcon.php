<?php
if(!empty($_POST["send"])) {
	$firstName = $_POST["first-name"];
    $lastName = $_POST["last-name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	$conn = mysqli_connect("localhost", "root", "", "wanacel_db") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO tblcontact (first_name, last_name, email, message)  VALUES ('" . $first_name. "', '" . $last_name. "', '" . $email. "', '" . $message. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
	//}
}
require_once "index.php";
?>