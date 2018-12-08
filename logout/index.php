<?php 
 session_start();  
 session_destroy();
 $_SESSION['logged-in'] = 0;

?>

<?php include '../header.php' ?>

<section>
    <p>You have been logged out</p>
    <a href="/TeamUltraMega/">Back to Home</a>
</section>
<?php include '../footer.php' ?>