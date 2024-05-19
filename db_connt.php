<?php

$dashname = "localhost";
$username="root";
$password= "";
$db_name="login";
$conn= new mysqli($dashname,$username,$password,$db_name);
if($conn->connect_error)
{
    echo" Connection Failed".$conn->connect_error;
}