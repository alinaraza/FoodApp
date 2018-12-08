<?php 

$page_title = "Customer Login";

include '../header.php' ?>


<section>
	<div class= "logincustomer">
<form action="processes/processing-customerlogin.php" method="POST">
	<h1>User Login!</h1>
		<fieldset>
		Email:<br>
		<input type="text" name="email" required/><br>
		Password:<br>
		<input type="password" name="password" required/><br>
		
		<button type = "Submit" name="login" value ="Log In">Log In</button>
	</fieldset>
	<p> Don't have an account? <a href = "/TeamUltraMega/register/customer.php">Create an Account</a></p>
	<p>Are you a Chef? <a href = "/TeamUltraMega/login/chef.php">Login as a chef</a></p>
</form>
</form>
</div>
</section>

<?php include '../footer.php' ?>