<?php
session_start();

    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values('$user_id','$user_name','$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }else
        {
            echo "Please enter some valid information";
        }

    }


?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="main.css" rel="stylesheet">
        <title>Sign Up</title>
        
    </head>
    <body>
        <div class="navbar">
            <div class="dropdown">
                <button class="dropbtn">Menu 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="index.php">Home</a>
                    <a href="about.html">About</a>
                    <a href="atlanticDivision.html">Division</a>
                    <a href="roster.html">Roster</a>
                    <a href="faqs.html">FAQs</a>
                    <a href="login.php">Account</a>
                </div>
            </div> 
        </div>
</head>
<body>
<style type="text/css"> </style>

<div id=box>
    <form method="post">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Sign Up</h2>
                    <p>Please set a username and password.</p>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input id="text" type="text" name="user_name">
                        </div>    
                        <div class="form-group">
                            <label>Password</label>
                            <input id="text" type="password" name="password">
                        </div>
                        <div class="form-group">
                            <input id="button" type="submit" value="Submit">
                        </div>
                        <p>Already have an account? <a href="login.php">Click to Login</a></p>
                    </form>
                </div>
            </div>
        </div> 
</body>
</html>