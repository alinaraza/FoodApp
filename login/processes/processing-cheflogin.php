<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];


//check admin table for valid username and password
$dbusername = "razaalin_alina";
$dbpassword = "iZKoDeSbtiPLYSGT";

$pdo = new PDO("mysql:host=localhost; dbname=razaalin_teamultramega", $dbusername, $dbpassword);

$stmt = $pdo->prepare("
	SELECT * FROM `chefs` 
		WHERE `email` = '$email' 
		AND `password` = '$password'");

$stmt->execute();

if($row = $stmt->fetch()){
	//start session if valid and redirect to dashboard
	$_SESSION['logged-in'] = true;
	$_SESSION['username'] = $row['firstname'];
	$_SESSION['usertype'] = 'chef';

	header("Location: /TeamUltraMega/profile/");

}
else{
	// print_r($_SESSION);
	header("Location: /TeamUltraMega/login/chef.php");
}

echo $_SESSION['usertype'];
echo $_SESSION['username'];
	

?>