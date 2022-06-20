<!--Quicho, Brian & Sumang, Michael Dave (WD-201)-->
<?php 
include 'authenticate.php';
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Library Main Menu
		</title>
		<link rel="icon" href="Img/HAULogo.png"/>

	<!--CSS-START-->
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
			#logo
			{
				width: 80%;
			}

			button, p
			{
				padding: 30px;
				margin: 10px;
				font-family: Tahoma;
				font-weight: bold;
				border: none;
				background-color: #801725;
				font-size: 20px;
				color: white;

			}

			p
			{
				padding: 20px;
				margin: 5px;
				font-family: Tahoma;
				font-weight: bold;
				border: none;
				background-color: black;
				font-size: 15px;
				color: white;

			}
		</style>
	<!--CSS-END-->	
	</head>

	<body style="margin: 0;">
		<div id = "topBar">
			<h2 id = "topText">Holy Angel University Library <a href="logout.php"><button>Log out</button></a> </h2>	
		</div>

		<div id = "menu">
			<table>
				<tr>
					<td>
						<img src="Img/HAULogo.png" id="logo"/>
					</td>
					<td>
						<p> Add Record </p>
						<a href="AuthorPage.php"><button>&nbsp&nbsp&nbspAuthor&nbsp&nbsp</button></a>
						<a href="BookPage.php"><button>&nbsp&nbsp&nbspBook&nbsp&nbsp&nbsp&nbsp</button></a>
						<a href="PublisherPage.php"><button>Publisher</button></a>
						<br/><br/><br/>
						<p> Show Records </p>
						<a href="AuthorIndex.php"><button>&nbsp&nbsp&nbspAuthor&nbsp&nbsp</button></a>
						<a href="BookIndex.php"><button>&nbsp&nbsp&nbspBook&nbsp&nbsp&nbsp&nbsp</button></a>
						<a href="PublisherIndex.php"><button>Publisher</button></a>
						
					</td>
				</tr>
			</table>
		</div>
		
	</body>
</html>