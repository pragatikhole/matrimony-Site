<?php

$db = mysqli_connect("localhost","root","","pragati");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>