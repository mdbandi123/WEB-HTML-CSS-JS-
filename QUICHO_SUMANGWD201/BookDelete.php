<!--Quicho, Brian & Sumang, Michael Dave (WD-201)-->
<?php 
include 'authenticate.php';
 ?>
<?php 
	include 'dbcon.php';
	if(isset($_GET['delid']))
	{
		$rid=intval($_GET['delid']);
		$sql=mysqli_query($con, "delete from tbl_book where TBL_BOOK_CODE=$rid");
			echo "<script>alert('Data Deleted');</script>";
			echo "<script>window.location.href = 'BookIndex.php';</script>";
	}
 ?>