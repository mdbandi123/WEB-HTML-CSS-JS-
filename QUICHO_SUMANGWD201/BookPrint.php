<!--Quicho, Brian & Sumang, Michael Dave (WD-201)-->
<?php 
include 'authenticate.php';
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Confirmation Page
		</title>
		<link rel="icon" href="Img/HAULogo.png"/>

	<!--CSS-START-->
		<style type="text/css">
			#topBar
			{
				background-color: #801725;
				width: 100%;
			}
			#topBar p
			{
				text-align: center;
				margin: 0;
			}
			#topText
			{
				text-align: center;
				margin-top:0;
				color: white;
				font-weight: bold;
			}
			#topText
			{
				width: 5%;
			}
			#body
			{
				padding-left: 10px;
			}

			#body h1
			{
				font-family: tahoma;
				text-align: center;
			}
			p
			{
				font-size: 30px;
				font-family: tahoma;
			}
			#back
			{
				font-size: 25px;
				padding:15px;
				font-family: tahoma;
			}
		</style>
	<!--CSS-END-->	
	</head>

	<body style="margin: 0;">
		<div id = "topBar">
			<a href="MainMenu.html"><p><img src="Img/HAULogo.png" id="topText"/></p></a>	
		</div>
		
		<?php
			$v1 = $_POST['bCode'];
			$v2 = $_POST['title'];
			$v3 = $_POST['pCode'];
			$v4 = $_POST['type'];
			$v5 = $_POST['price'];
			$v6 = $_POST['pBack'];
		?>

		<div id="body">
			<h1>Input Processed!</h1>
			<p>Book Code: <?php echo $v1; ?></p>
			<p>Title: <?php echo $v2; ?></p>
			<p>Publisher Code: <?php echo $v3; ?></p>
			<p>Type: <?php echo $v4; ?></p>
			<p>Price: <?php echo $v5; ?></p>
			<p>Paperback: <?php echo $v6; ?></p>
			<input id = "back" type="button" value = "Go back" onclick="history.back()"/>
		</div>


	</body>
</html>