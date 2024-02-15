<?php

session_start();
//session_set_cookie_params(0);
error_reporting(0);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
//include("config.php");
include_once("functions/database_functions.php");
$conn = db_connect();
if (isset($_POST['register'])) {
    $ret = mysqli_query($conn, "insert into login(email,password) values('" . $_POST['email'] . "','" . $_POST['password'] . "')");
    $okay = 1;
    //header("location:http://localhost/apnidukaan/login.php");
   // echo("successfully registered");
    //echo(htmlentities("succefully registered"));
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Register Form</title>;
    <style>

        body
        {
            margin: 0;
            padding: 0;
            /* background-color:#6abadeba; */
            font-family: 'Arial';
        }
        .register{
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
        #register{
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
    <link rel="stylesheet" type="text/css" href="back.css">
</head>
<body>
<h2>REGISTRATION</h2><br>
<div class="register">
    <form id="register" method="post" action="">
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
        <input type="submit" name="register" id="register" value="register">
        <br><br>
        <span>
        <?php
        if($okay==1){
            echo(htmlentities("successfully registered"));
        }
        ?></span>
        <br><br>
        <span><h3>Already have an account login <a href="http://localhost/apnidukaan/login.php">here</a><h3></span>
    </form>
</div>
</body>
</html>


