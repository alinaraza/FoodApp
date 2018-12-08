

<?php include '../header.php' ?>

<section>
	<div class= "register">
		<form action="processes/processing-customerregister.php" method="POST">
		<h1>Register As A New User</h1>
		<fieldset>
			<labeL>First Name:</label>
			<input type="text" name="firstname" placeholder="e.g John" required /><br>

			<label>Last Name:</label>
			<input type="text" name="lastname" placeholder="e.g Doe" required /><br>

			<label>Email:</label>
			<input type="email" name="email" placeholder="johndoe@hotmail.com" required/><br>

			<label>Password:</label>
			<input type="password" name="password" required/>

			<Button type = "submit" name="registercustomer" value ="Create an account">Submit</button>
		</fieldset>
		<p> Already have an account? <a href = "/TeamUltraMega/login">Log in</a></p>
		
	</div>
</section>

<?php include '../footer.php' ?>
