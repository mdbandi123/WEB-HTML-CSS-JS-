<!--Quicho, Brian & Sumang, Michael Dave (WD-201)-->
<?php 
include 'authenticate.php';
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Author
		</title>
		<link rel="icon" href="Img/HAULogo.png"/>

	<!--CSS-START-->
		<style type="text/css">
			#xbar
			{
				width: 15%;
				height: 100vh;
				margin: 0;
				background-color: #801725;
			}

			#xText
			{
				margin: 0;
				text-align: center;
				font-family: tahoma;
				color: white;
				position: fixed;
				left: 32px;
				top: 30%;
			}

			#logo
			{
				height: 25%;
				position: fixed;
				left: 13px;
				top: 10px;
			}

			#back
			{
				position: fixed;
				top: 90%;
				left:4%;
				padding:15px;
				font-family: tahoma;
			}

			#form
			{
				position: absolute;
				left: 20%;
				font-family: tahoma;
				padding: 50px;
				
			}

			#form input
			{
				font-size: 30px;
			}



		</style>
	<!--CSS-END-->	
	</head>

	<body style="margin: 0;">

		<div id = "form">
			<h1>Author</h1>
			<form method="post" action="AuthorCreate.php">
				<table>
					<tr>
						<td style="font-size: 40px;">Author Number: </td>
						<td><input type="number" size = 2 name="aunum"/></td>
					</tr>
					<tr>
						<td style="font-size: 40px;">Last Name: </td>
						<td><input type="text" size = 12 name="lname"/></td>
					</tr>
					<tr>
						<td style="font-size: 40px;">First Name: </td>
						<td><input type="text" size = 10 name="fname"/></td>
					</tr>
				</table>

				<br/><br/><br/><br/><br/><br/><br/>
				<input type="submit" name="Submit"/>
				<input type="reset" name="Reset"/>
			</form>
		</div>


		<div id = "xbar">
			 <a href="MainMenu.php"><img src="Img/HAULogo.png" id="logo"/></a>
			<h2 id = "xText">Input Form</h2>
			<input id = "back" type="button" value = "Go back" onclick="history.back()"/>
		</div>

	
	</body>
</html>