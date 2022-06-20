<!--Quicho, Brian & Sumang, Michael Dave (WD-201)-->
<?php 
include 'authenticate.php';
 ?>
<?php
include 'dbcon.php';
$uid = $_GET['updateid'];

$query = mysqli_query($con, "SELECT * FROM tbl_publisher WHERE TBL_PUBLISHER_CODE='$uid'");
while ($row = mysqli_fetch_array($query)) {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Publisher</title>
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
<h3>Update Publisher</h3>
<form method="post">
    <table>
        <tr>
            <td style="font-size: 40px;">Publisher Name: </td>
            <td><input type="text" size = 25 name="pname" value="<?php  echo $row['TBL_PUBLISHER_NAME'];?>"/></td>
        </tr>
        <tr>
            <td style="font-size: 40px;">City: </td>
            <td><input type="text" size = 20 name="city" value="<?php  echo $row['CITY'];?>"/></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Update Record"></td>
        </tr>
    </table>
</form>
</div>
<div id = "xbar">
            <a href="MainMenu.php"><img src="Img/HAULogo.png" id="logo"/></a>
            <h2 id = "xText">Input Form</h2>
            <input id = "back" type="button" value = "Go back" onclick="history.back()"/>
        </div>
</body>
</html>

<?php
}
if(isset($_POST['submit'])) {
    $pname = $_POST['pname'];
    $city = $_POST['city'];

    $update=mysqli_query($con, "UPDATE  tbl_publisher SET TBL_PUBLISHER_NAME='$pname', CITY='$city' WHERE TBL_PUBLISHER_CODE='$uid'");
     
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script > document.location ='PublisherIndex.php'; </script>";
  }

?>