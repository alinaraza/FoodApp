<?php 
$page_title = "Chef Login";
include '../header.php' ?>


<section>
	<div class= "login">
<form action="processes/processing-cheflogin.php" method="POST">
	<h1>Chef Login!</h1>
		<fieldset>
		Email:<br>
		<input type="text" name="email" required/><br>
		<br>
		<label>Password:</label>
		<input type="password" name="password" required/>
		<br>
		<button type="submit">Login</button>
	</fieldset>
	<p>Don't have an account? <a href = "/TeamUltraMega/register/chef.php">Log in/Create an Account</a></p>
	<p>Are you a Customer? <a href = "/TeamUltraMega/login/customer.php">Login as a customer</a></p>
	
</form>

</form>
</div>
</section>

<?php include '../footer.php' ?>