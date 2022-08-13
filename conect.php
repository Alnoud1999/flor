<?php

$host="localhost";
$user="root";
$password="";
$db="practice";

$con =mysqli_connect('localhost','root','','practice');
if(!$con){
echo 'please Check your Database connection';
}
?>