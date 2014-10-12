<?php
ini_set( "display_errors", 0);
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="aruwee"; // Database name 
$tbl_name="volunteer"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


$name=$_POST['name'] ;
$occupation=$_POST['occupation'];
$number=$_POST['number'];
$age=$_POST['age'];
$gender=$_POST['sex'];
$address=$_POST['address'];
$email=$_POST['email'];


$sql="SELECT * FROM volunteer WHERE name='$name' and age='$age' and sex='$gender'";
$result=mysql_query($sql);


$count=mysql_num_rows($result);


if($count==1){


echo "You have already filled in form!!";
setcookie("name", "", time()-3600); 

}
else{

$sql="INSERT into volunteer (name, age, sex,Mnumber,address,occupation,email) VALUES ('$name', '$age', '$gender','$number','$address','$occupation','$email')";


mysql_query($sql);

setcookie("name","$name", time()+3600);
setcookie("address","$address", time()+3600);

header("location:rules.php");

}
ob_end_flush();
?>