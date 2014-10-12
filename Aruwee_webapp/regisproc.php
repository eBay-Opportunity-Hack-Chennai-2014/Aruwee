<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="aruwee"; // Database name 
$tbl_name="client"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['sex'];
$marital=$_POST['marital'];
$medcon=$_POST['medcon'];
$description=$_POST['description'];
$refname=$_POST['refname'];
$refcontact=$_POST['refcontact'];
$addmed=$_POST['addmed'];
$docconcern=$_POST['docconcern'];
$activity=$_POST['activity'];

$sql="SELECT * FROM client WHERE name='$name' and age='$age' and sex='$gender'";
$result=mysql_query($sql);


$count=mysql_num_rows($result);


if($count==1){


echo "You have already filled in form!!";
setcookie("name", "", time()-3600); 

}
else{

$sql="INSERT into client (name,age,sex,marital_status,medcon,discription,refname,refcontact,addmed,docconcern,activity) VALUES ('$name',
'$age',
'$gender',
'$marital',
'$medcon',
'$description',
'$refname',
'$refcontact',
'$addmed',
'$docconcern',
'$activity');";

 mysql_query($sql);



setcookie("name","$name", time()+3600);

header("location:rules.php");

}
ob_end_flush();
?>