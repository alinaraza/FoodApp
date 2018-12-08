<?php 
if(!isset($page_title)) {
    $page_title = "";
}
?>
<?php
// print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
	<title>AppName | <?php echo ($page_title); ?></title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="/TeamUltraMega/css/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    
</head>
<body>
<header>

   
	<nav class = "navbar"> 
		<div>

			<img class= "logo" src = "/TeamUltraMega/assets/logo.png"/>
            <ul >
                <li class="searchbar"><input type="text" placeholder="Search..">
                <li class="<?php echo ($page == "home" ? "active" : "")?>"><a href="/TeamUltraMega/"> Home</a></li>
				
                <?php if (isset($_SESSION['logged-in']) AND $_SESSION['logged-in'] == true) { ?>
                    <?php if ($_SESSION['usertype'] == 'chef'){?>
                    <li class="<?php echo ($page == "chef" ? "active" : "")?>"><a href="/TeamUltraMega/profile">Profile</a></li>
                    <?php } ?>
                    <li><a href = "/TeamUltraMega/logout">Logout </a></li>
                <?php } else { ?>
					<li><a href = "/TeamUltraMega/login">Login </a></li>                
				<?php }; ?>
		    </ul>
		</div>
    </nav>
    
</header>