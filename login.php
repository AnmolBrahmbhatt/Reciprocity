
<?php
session_start();
//session_set_cookie_params(0);
error_reporting(0);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
//includeonce("config.php");
include_once("functions/database_functions.php");
$conn = db_connect();
if (isset($_POST['log'])) {
    $ret = mysqli_query($conn, "SELECT * FROM login WHERE email='" . $_POST['email'] . "' and password='" . $_POST['password'] . "'");
    $num = mysqli_fetch_array($ret);
    if ($num > 0) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['loggedin'] = 1;

        header("location:http://localhost/apnidukaan/index.php");
        exit();
    } else {
        $errormsg = "Invalid username or password";
        //$extra = "login.php";
    }
}



?>


<!DOCTYPE html>
<html>
 <head>
    <title>Login Form</title>;
    <style>

        body
        {
            margin: 0;
            padding: 0;
            background-color:#6abadeba;
            font-family: 'Arial';
        }
        .login{
        
            overflow: hidden;
            margin: auto;
            margin: 20 0 0 450px;
            padding: 80px;
            
            width: 330px; 
  border-radius: 10px;

  
  box-shadow: -3px -3px 9px #aaa9a9a2,
              3px 3px 7px rgba(147, 149, 151, 0.671);

        }
        h2{
            text-align: center;
            color: #277582;
            padding: 20px;
        }
        label{
            color: #08ffd1;
            font-size: 17px;
        }
        #email{
            width: 300px;
            height: 30px;
            border: none;
            border-radius: 3px;
            padding-left: 8px;
        }
        #password{
            width: 300px;
            height: 30px;
            border: none;
            border-radius: 3px;
            padding-left: 8px;

        }
        #log{
            width: 300px;
            height: 30px;
            border: none;
            border-radius: 17px;
            padding-left: 7px;
            color: blue;


        }
        span{
            color: white;
            font-size: 17px;
        }
        a{
            float: right;
            background-color: grey;
        }

    </style>
     <link rel="stylesheet" href="back.css" type="text/css">
</head>
<body>
<h2>Login</h2><br>
<div class="login">
    <form id="login" method="post" action="login.php">
        <label><b>Email
            </b>
            <br/>
        </label>
        <input type="email" name="email" id="email" placeholder="Email">
        <br><br>
        <label><b>Password
            </b>
        </label>
        <input type="password" name="password" id="password" placeholder="password">
        <br><br>
        <input type="submit" name="log" id="log" value="Log In Here">
        <br><br>
        <span>
        <?php
            echo(htmlentities($errormsg));
        ?></span>
        <br><br>
        <h3>Don't have and account yet Register <a href="http://localhost/apnidukaan/register.php">here</a></h3>
    </form>
</div>
</body>
</html>

