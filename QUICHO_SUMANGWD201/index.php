<!--Quicho, Brian & Sumang, Michael Dave (WD-201)-->
<?php 
include 'authenticate.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>Secured Page</title>
 </head>
 <body>
 <h2>Welcome <?php echo $_SESSION['username']; ?>!</h2>
 <h3>This is a secured page</h3>

 <a href="logout.php">Logout</a>
 </body>
 </html>