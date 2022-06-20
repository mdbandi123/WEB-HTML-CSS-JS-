<!--Quicho, Brian & Sumang, Michael Dave (WD-201)-->
<?php 
include 'authenticate.php';
 ?>
<?php
include 'dbcon.php';
$uid = $_GET['updateid'];

$query = mysqli_query($con, "SELECT * FROM tbl_book WHERE TBL_BOOK_CODE='$uid'");
while ($row = mysqli_fetch_array($query)) {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Book</title>
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
<h3>Update Book</h3>
<form method="post">
    <table>
            <tr>
                <td style="font-size: 40px;">Title: </td>
                <td><input type="text" size = 40 name="title" value="<?php  echo $row['TITLE'];?>"/></td>
            </tr>
            <tr>
                <td style="font-size: 40px;">Publisher Code: </td>
                <td><input type="text" size = 3 name="pcode" value="<?php  echo $row['TBL_PUBLISHER_CODE'];?>"/></td>
            </tr>

            <tr>
                <td style="font-size: 40px;">Type: </td>
                <td><input type="text" size = 3 name="type" value="<?php  echo $row['TYPE'];?>"/></td>
            </tr>
            <tr>
                <td style="font-size: 40px;">Price: </td>
                <td><input type="number" size = 6 name="price" value="<?php  echo $row['PRICE'];?>"/></td>
            </tr>
            <tr>
                <td style="font-size: 40px;">Paperback: </td>
                <td><input type="text" size = 1 name="pback" value="<?php  echo $row['PAPERBACK'];?>"/></td>
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
    $title = $_POST['title'];
    $pcode = $_POST['pcode'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $pback = $_POST['pback'];

    $update=mysqli_query($con, "UPDATE  tbl_book SET TITLE='$title', TBL_PUBLISHER_CODE='$pcode', TYPE='$type', PRICE='$price',PAPERBACK='$pback' WHERE TBL_BOOK_CODE='$uid'");
     
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script > document.location ='BookIndex.php'; </script>";
  }

?>