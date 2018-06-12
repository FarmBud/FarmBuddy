<?php
include"connect.php";
if(!isset($_SESSION['projectadmin']) and ($_SESSION['projectadmin']==""))
{
    header("location:login.php");
}
$i= $_REQUEST['i'];
$s= "UPDATE `rentorder` SET `res` = 'executed' WHERE `id` = '$i'";
$s1= mysqli_query($link,$s) or die("cannot execute query".mysqli_error($link));
header("location:rentalorders.php");
?>