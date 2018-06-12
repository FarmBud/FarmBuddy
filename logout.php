<?php
include"connect.php";
$_SESSION['projectadmin']="";
session_destroy();
header("location:login.php");
?>