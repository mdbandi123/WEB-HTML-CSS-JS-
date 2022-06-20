<!--Quicho, Brian & Sumang, Michael Dave (WD-201)-->
<?php 
include 'authenticate.php';
 ?>
<?php
	include 'dbcon.php';

	$aunum = $_POST['aunum'];
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];

	$query = mysqli_query($con, "insert into tbl_author(TBL_AUTHOR_NUM, TBL_AUTHOR_LAST, TBL_AUTHOR_FIRST) values('$aunum', '$lname', '$fname')");

	if ($query)
	{
		echo"<script>alert('Action Successfull!')</script>";
		echo "<script>document.location='AuthorIndex.php'</script>";
	}
	else
	{
		echo"<script>alert('Oops! Error Found.')</script>";
	}
?>