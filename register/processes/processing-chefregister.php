<?php
//session_start();
//receive username and passowrd

//check admin table for valid username and password
$dbusername = "razaalin_alina";
$dbpassword = "iZKoDeSbtiPLYSGT";
$pdo = new PDO("mysql:host=localhost;dbname=razaalin_teamultramega", $dbusername, $dbpassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$biography = $_POST['biography'];
$location = $_POST['location'];

$image = ($_FILES['fileToUpload']);
$target_file = NULL;
$image_url = NULL;
$root = $_SERVER['DOCUMENT_ROOT'];


if (isset($_FILES['fileToUpload'])){
	$target_dir =  '/TeamUltraMega/uploads/';
	$target_file = "$root" . "$target_dir" . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], '/'.$target_file);
}

$image_url = basename($_FILES["fileToUpload"]["name"]);

try {
$stmt = $pdo->prepare("
	INSERT INTO `chefs` (`userID`, `image`, `firstname`, `lastname`, `email`, `password`, `biography`, `location`) 
	VALUES (NULL, '$image_url', '$firstname', '$lastname', '$email', '$password', '$biography', '$location')");

$stmt->execute();
}catch (PDOException $e){
	throw $e;
}
?>
<?php 
	$id = $_POST['userID'];
	header("Location: /TeamUltraMega/login/chef.php");

?>

