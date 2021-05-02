<?php

$dbhost = "us-cdbr-east-03.cleardb.com";
$dbuser = "b1b76e5c4cf915";
$dbpass = "fcdfdb7d";
$dbname = "heroku_e6a124ee480e760";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect!");
}
