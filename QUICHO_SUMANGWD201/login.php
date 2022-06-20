<!--Quicho, Brian & Sumang, Michael Dave (WD-201)-->
<!DOCTYPE html>
<html>
<head>
    <title>Log-in Page</title>
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
        session_start(); 
        if (isset($_POST['username'])) 
        {
            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($con,$username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con,$password);
            
            $query = "SELECT * FROM tbl_users WHERE username='$username' and password='".md5($password)."'";
            $result = mysqli_query($con,$query) or die(mysql_error());

            $rows = mysqli_num_rows($result);

            if ($rows==1) {
                $_SESSION['username'] = $username;
                header("Location: MainMenu.php");
            }
            else
            {
                echo "<script>alert('Username/password is incorrect');</script>"; 
                echo "<script>window.location.href = 'login.php'</script>"; 
            }

        }
        else
        {
     ?>

        <div id="content">
        <h3>Log In</h3>
        <form method="post" action="">
            <input type="text" name="username" placeholder="Username"/> <br/>
            <input type="password" name="password" placeholder="Password"/><br/><br/>
            <input type="submit" name="submit" value="Login"/><br/>
            <p>
                Not registered yet? <a href="registration.php">Register Here</a>
            </p>
        </form>
        </div>
        


    <?php 
    }
     ?>
 </body>
</html>