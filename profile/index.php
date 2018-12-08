<?php
session_start();

$page_title = "Settings";
$page = "chef";
$id = $_SESSION['id'];

if($_SESSION['logged-in'] !== true){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{


	$dbusername = "razaalin_alina";
	$dbpassword = "iZKoDeSbtiPLYSGT";
	$pdo = new PDO("mysql:host=localhost;dbname=razaalin_teamultramega", $dbusername, $dbpassword);

	$stmt = $pdo->prepare("SELECT * FROM `chefs` WHERE `userID` = $id");
	
	$stmt2 = $pdo->prepare("SELECT `chefs`.`userID`,`food`.`foodName`,`food`.`description`,`food`.`image`,`food`.`foodID`
	FROM `chefs` INNER JOIN `food` ON `chefs`.`userID` = `food`.`chefID`");
	$stmt->execute();
	$stmt2->execute();
?>

<?php include '../header.php' ?>

<?php $row = $stmt->fetch(); ?>

<?php echo($_SESSION['username']);?>
<?php echo($_SESSION['id']);?>

<div class= "profileContainer">
  	<div class= "chefmenu"> 
		<img class= "profileimg" src="/TeamUltraMega/uploads/<?php echo $row['profileimg']?>"width="150" height="150"/>
     	<br>
		<label><strong>Chef <?php echo($row['firstname']); ?> <?php echo($row['lastname']); ?></strong></label><br>
		<br>
		<label>Biography: </label><?php echo($row['biography']); ?></label><br>
		<br>
		<div class = "chefoptions">
			<?php if(isset($_SESSION['logged-in'])) {
			if ($_SESSION['logged-in'] AND ($_SESSION['usertype'] == 'chef')){ ?>			
 			<button><a  class= "addFood" href="addFood.php"> Add New Post </a></button><br>
			<button><a class= "viewReviews" href= "#"> View Reviews</a></button>
			<?php }} ?>
		</div>

	</div>


			<section class = "posts">
				<h2 class= "welcome"> Welcome To Your Profile</h2><br>
				<?php
				while($row=$stmt2->fetch()) {
				?>
				<div class ="activeposts">
					<h3> Active Posts</h3>
					<div class ="itemContainer">
						<a class="foodLink" href="/TeamUltraMega/food/food.php?foodID=<?php echo($food["foodID"]);?>">	
						<div class = "food">				
							<img  class="foodImage" src="uploads/<?php echo $food['image'] ?>"/>
							<div class = "foodDescription">
								<h4><?php echo($row["foodName"])?> </h4>
								<p> <?php echo($row["description"]);?> </p>
							</div>
							<br>
						</div>
						</a>
								<span><a href="editFood.php?id=<?php echo($row["foodID"]); ?>">Edit</a></span>
								<span><a href="deleteFood.php?id=<?php echo($row["foodID"]); ?>">Delete</a></span>
					</div>
					
				</div>
				<?php } ?>
			<section>
<div>

<?php include '../footer.php' ?>

<?php } ?>