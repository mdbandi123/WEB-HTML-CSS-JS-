<!--Quicho, Brian & Sumang, Michael Dave (WD-201)-->
<?php 
include 'authenticate.php';
 ?>
<?php
	include 'dbcon.php';

	$bcode = $_POST['bcode'];
	$title = $_POST['title'];
	$pcode = $_POST['pcode'];
	$type = $_POST['type'];
	$price = $_POST['price'];
	$pback = $_POST['pback'];

	$query = mysqli_query($con, "insert into tbl_book(TBL_BOOK_CODE,  TITLE, TBL_PUBLISHER_CODE, TYPE, PRICE, PAPERBACK) values('$bcode', '$title', '$pcode', '$type', '$price','$pback')");

	if ($query)
	{
		echo"<script>alert('Action Successfull!')</script>";
		echo "<script>document.location='BookIndex.php'</script>";
	}
	else
	{
		echo"<script>alert('Oops! Error Found.')</script>";
	}
?>