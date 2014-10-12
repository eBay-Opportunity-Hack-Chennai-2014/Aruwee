<?php
ini_set( "display_errors", 0);
ob_start();
$host="173.199.168.197"; // Host name 
$username="jecieee"; // Mysql username 
$password="yZ7s5&89YgF127"; // Mysql password 
$db_name="jecieee_froogle"; // Database name 
 // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
?>