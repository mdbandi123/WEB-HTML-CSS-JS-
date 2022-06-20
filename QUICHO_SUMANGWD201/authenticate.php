<!--Quicho, Brian & Sumang, Michael Dave (WD-201)-->
<?php 
include 'dbcon.php';
session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}
 ?>