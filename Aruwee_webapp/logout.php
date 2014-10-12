<?php 
session_start();
session_unset('myusername');
session_unset('mypassword');
session_unset('scorev');
session_destroy();
header("location:index.php");
?>