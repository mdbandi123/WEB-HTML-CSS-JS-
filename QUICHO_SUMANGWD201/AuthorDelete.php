<!--Quicho, Brian & Sumang, Michael Dave (WD-201)-->
<?php 
include 'authenticate.php';
 ?>
<?php 
	include 'dbcon.php';
	if(isset($_GET['delid']))
	{
		$rid=intval($_GET['delid']);
		$sql=mysqli_query($con, "delete from tbl_author where TBL_AUTHOR_NUM=$rid");
		$sql2=mysqli_query($con, "delete from tbl_book where tbl_book_code in (select tbl_book_code from tbl_tbl_wrote where tbl_author_num = $rid);");
			echo "<script>alert('Data Deleted');</script>";
			echo "<script>window.location.href = 'AuthorIndex.php';</script>";
	}
 ?>