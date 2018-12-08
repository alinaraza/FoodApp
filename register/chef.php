
<?php include '../header.php' ?>

<section>
	<div class= "register">
		<form action="processes/processing-chefregister.php" method="POST">
		<h1>Register As A New Chef</h1>
		<fieldset>

			<label>Select an image to upload as your profile image</label>
			<input type="file" name="fileToUpload" id="fileToUpload"/> <br>
			
			<labeL>First Name:</label>
			<input type="text" name="firstname" placeholder="e.g John" required /><br>

			<label>Last Name:</label>
			<input type="text" name="lastname" placeholder="e.g Doe" required /><br>

			<label>Email:</label>
			<input type="email" name="email" placeholder="johndoe@hotmail.com" required/><br>

			<label>Password:</label>
			<input type="password" name="password" required/>

			<label>Biography:</label>
			<input type="textarea" name="biography" placeholder="Tell us about yourself" required /><br>

			<label>City:</label>
			<input type="text" name="location" required /><br>

			

			<Button type = "submit" name="registerchef" value ="Create an account">Submit</button>
		</fieldset>
		<p> Already have an account? <a href = "/TeamUltraMega/login">Log in</a></p>
	</div>
</section>

<?php include '../footer.php' ?>
