<?php
ini_set( "display_errors", 0);
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="aruwee"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


// Define $myusername and $mypassword 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 
//$myemail=$_POST['email'];

// To protect MySQL injection (more detail about MySQL injection)

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
echo "User already Exists!!";

}
else {
$add="INSERT INTO $tbl_name(username, password) values('$myusername','$mypassword');";
mysql_query($add);
 
header("location:rules.php");
}
ob_end_flush();
?>