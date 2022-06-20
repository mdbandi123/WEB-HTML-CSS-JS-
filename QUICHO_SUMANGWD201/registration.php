<!--Quicho, Brian & Sumang, Michael Dave (WD-201)-->
<!DOCTYPE html>
 <html>
 <head>
     <title>Registration</title>
    <link rel="icon" href="Img/HAULogo.png"/>
    <style type="text/css">
        h3, form, p
        {
            text-align: center;

        }
        #content
        {
            background-color: #801725;
            margin-left: 40%;
            margin-right:40%;
            margin-top: 20%;
            padding: 10px;
            font-family: tahoma;
            color: white;

        }
        a
        {
            font-family: tahoma;
            color: white;
            background-color: black;

        }
        p
        {
            background-color: black;
        }
    </style>
 </head>
 <body>

 <?php 
    include 'dbcon.php';
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con,$username);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        $password = md5($password);

        $query = "INSERT INTO tbl_users(username, password, email) VALUES('$username', '$password', '$email')";
        $result = mysqli_query($con,$query);

        if ($result) {
            echo "<script>alert('You have successfully registered');</script>"; 
            echo "<script>window.location.href = 'login.php'</script>"; 
        }
    }
    else{
  ?>
<div id="content">
 <h3>Registration Form</h3>
 <form method="post">
     <input type="text" name="username" placeholder="Username"/> <br/><br/>
     <input type="email" name="email" placeholder="Email"/> <br/><br/>
     <input type="password" name="password" placeholder="Password"/> <br/><br/>
     <input type="submit" name="submit" value="Register"/>
     <input type="reset" name="reset" value="Clear"/>
 </form>
 </div>

 <?php 
}
  ?>

 </body>
 </html>