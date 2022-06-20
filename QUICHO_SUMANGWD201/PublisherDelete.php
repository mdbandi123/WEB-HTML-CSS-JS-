<!--Quicho, Brian & Sumang, Michael Dave (WD-201)-->
<?php 
include 'authenticate.php';
 ?>
<?php 
	include 'dbcon.php';
	   if(isset($_GET['delid'])) 
	   {
        $rid=strval($_GET['delid']);
        $sql=mysqli_query($con,"DELETE FROM tbl_publisher WHERE TBL_PUBLISHER_CODE='$rid'");
        $sql2=mysqli_query($con,"DELETE FROM tbl_book WHERE TBL_PUBLISHER_CODE='$rid'");
        echo "<script>alert('Data Deleted');</script>";
		echo "<script>window.location.href = 'PublisherIndex.php';</script>";
       }
 ?>