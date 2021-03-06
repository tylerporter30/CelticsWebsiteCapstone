<?php
session_start();

include("connection.php");
include("functions.php");




    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="main.css" rel="stylesheet">
    <title>Boston Celtics Fan Page</title>
   
    <script type="text/javascript" src="mustache.js" ></script>
    <script>
      var view = {
        name : "Brad Stevens",
        occupation : "Boston Celtics Head Coach"
      };

      function loadtemp(){
        var output = Mustache.render("{{name}} is the {{occupation}}", view);
        document.getElementById('person').innerHTML = output;
      }
    </script>


</style>
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

<a href="logout.php"style="float: right;">Logout</a>
<h1>Boston Celtics Fan Page</h1>
    <div role="img" aria-label="Boston Celtics logo">
        <img src="Boston_Celtics_logo.png" alt="Boston Celtics logo" class="center"></a>
    </div><br>
    <br>
    <h1>Fun Facts</h1>
    <br>
    <div class="squares">
        <div class="square">The Celtics are one of two franchises, the other being the NY Knicks, that haven???t moved to another city.</div>
        <div class="square">The name of the mascot of the Celtics, Lucky the Leprechaun is chosen with regards to the large Irish population in Boston.</div>
        <div class="square">The Celtics are the most successful franchise in the history of the NBA with 17 championships.</div>
        <div class="square">Boston won their first championship in 1957, nine years after they were founded.</div>
        <div class="square">Starting in 1959, the Celtics won 8 consecutive championships.</div>
        <div class="square">The Celtics have had 16 different owners/owner combinations, since they were founded.</div>
    </div>
</body>
</html>