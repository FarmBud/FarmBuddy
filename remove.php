<?php
include"connect.php";
if(!isset($_SESSION['projectadmin']) and ($_SESSION['projectadmin']==""))
{
    header("location:login.php");
}
$i= $_REQUEST['i'];
$s= "DELETE from `cart` where `id` = '$i'";
$s1= mysqli_query($link,$s) or die("cannot execute query".mysqli_error($link));
header("location:buycart.php");
?>