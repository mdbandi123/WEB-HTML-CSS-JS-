<!--Quicho, Brian & Sumang, Michael Dave (WD-201)-->
<?php 
include 'authenticate.php';
 ?>
<?php
	include 'dbcon.php';

	$pcode = $_POST['pcode'];
	$pname = $_POST['pname'];
	$city = $_POST['city'];

	$query = mysqli_query($con, "insert into tbl_publisher(TBL_PUBLISHER_CODE, TBL_PUBLISHER_NAME, CITY) values('$pcode', '$pname', '$city')");

	if ($query)
	{
		echo"<script>alert('Action Successfull!')</script>";
		echo "<script>document.location='PublisherIndex.php'</script>";
	}
	else
	{
		echo"<script>alert('Oops! Error Found.')</script>";
	}
?>