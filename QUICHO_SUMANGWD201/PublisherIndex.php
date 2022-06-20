<?php 
include 'authenticate.php';
 ?>

<?php
include 'dbcon.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Publisher Records</title>
<link rel="icon" href="Img/HAULogo.png"/>
	<style type="text/css">
		#topBar
			{
				background-color: #801725;
				width: 100%;
			}
			#topText
			{
				text-align: center;
				margin-top:0;
				padding: 20px;
				font-family: Tahoma;
				font-size: 30px;
				color: white;
				font-weight: bold;
			}
		
			#content
			{
				padding-left: 10%;
			}
			
			h3
			{
				padding: 20px;
				margin: 5px;
				font-family: Tahoma;
				font-weight: bold;
				border: none;
				font-size: 30px;
			}

			button
			{
				padding: 10px;
				margin: 10px;
				font-family: Tahoma;
				
				border: none;
				background-color: #801725;
				font-size: 15px;
				color: white;

			}

			table
			{
				font-family: Tahoma;
				font-size: 20px;
				margin: 40px;
			}

			
	</style>
</head>
<body style="margin: 0;">
	<div id = "topBar">
			<a href="MainMenu.php"><h2 id = "topText">Holy Angel University Library </h2></a>
	</div>
	<div id = "content">
	<h3>Publisher Details</h3>
	<a href="PublisherPage.php"><button>Add Another Record</button></a>
	<table border = "1">
		<tr>
			<th>Publisher Code</th>
			<th>Publisher Name</th>
			<th>City</th>
			<th>Action</th>
		</tr>
		<?php
			$query=mysqli_query($con, "select * from tbl_publisher");
			$ctr = 1;
			$rows=mysqli_num_rows($query);
			if ($rows > 0)
			{
				while($rows = mysqli_fetch_array($query)){
		?>
				<tr>
					<td><?php echo $rows["TBL_PUBLISHER_CODE"]; ?></td>
					<td><?php echo $rows["TBL_PUBLISHER_NAME"]; ?></td>
					<td><?php echo $rows["CITY"]; ?></td>
					<td>
						<a href="PublisherUpdate.php?updateid=<?php echo htmlentities($rows["TBL_PUBLISHER_CODE"]);?>">Edit</a>
						|
						<a href="PublisherDelete.php?delid=<?php echo htmlentities($rows["TBL_PUBLISHER_CODE"]);?>">Delete</a>

					</td>
				</tr>
		<?php
			}
		}
		?>
	</table>
</div>

</body>
</html>