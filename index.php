<?php
session_start();

$page_title = "Home";
$page = "home";

include 'header.php';

$dbusername = "razaalin_alina";
$dbpassword = "iZKoDeSbtiPLYSGT";
$pdo = new PDO("mysql:host=localhost;dbname=razaalin_teamultramega", $dbusername, $dbpassword);

if( !isset($_SESSION['logged-in'])){
    $_SESSION['logged-in'] = 0;
};
?>

<?php
	$stmt = $pdo->prepare("
	SELECT * FROM `food` ");
	$stmt->execute();
?>

<section>

        <h1> Food Near You</h1>
        
		<div class="foodContainer">
            <?php while($food = $stmt->fetch()) { ?>
             <div class="itemContainer">
			<a class="foodLink" href="/TeamUltraMega/food/food.php?foodID=<?php echo($food["foodID"]);?>">					
			<div class = "food">
				<img  class="foodImage" src="uploads/<?php echo $food['image'] ?>"/>
				<div class = "foodDescription">
					<h4><?php echo $food['foodName'] ?></h4>
					<p><?php echo $food['description'] ?></p>
					<p>Chef <?php echo $food['chef'] ?></p>
				</div>
			</div>
            </a>
            </div>
			<?php } ?>
		
	</div>
</section>