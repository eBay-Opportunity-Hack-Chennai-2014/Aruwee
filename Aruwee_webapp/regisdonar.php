<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="aruwee"; // Database name 
$tbl_name="donar"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$contribution=$_POST['contribution'];
$organisation=$_POST['organisation'];
$phone=$_POST['number'];
$email=$_POST['email'];

$sql="SELECT * FROM donar WHERE name='$name' and age='$age' and gender='$gender'";
$result=mysql_query($sql);


$count=mysql_num_rows($result);


if($count==1){


echo "You have already filled in form!!";
setcookie("name", "", time()-3600); 

}
else{

$sql="INSERT into donar (name,age,gender,phone,email) VALUES ('$name','$age','$gender','$phone','$email');";

 mysql_query($sql);


setcookie("name","$name", time()+3600);

//header("location:contact.html");

}
ob_end_flush();
?>