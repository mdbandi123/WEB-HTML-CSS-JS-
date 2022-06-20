<!--Quicho, Brian & Sumang, Michael Dave (WD-201)-->
<?php 
session_start();

if (session_destroy()) {
    header("Location: login.php");
}
 ?>