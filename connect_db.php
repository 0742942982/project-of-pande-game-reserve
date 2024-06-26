<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db="pande_game_reserve";

$con = mysqli_connect($host,$user,$pass,$db);
if(!$con)
{
    die("connection error");
}
?>