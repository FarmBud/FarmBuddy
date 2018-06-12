<?php
include "connect.php";

if(!isset($_SESSION['projectadmin']) and ($_SESSION['projectadmin']==""))
{
    header("location:login.php");
}


$val= $_SESSION['projectadmin'];
$s= "select * from user where `id`= '$val' and `utype`='1'";
$s1= mysqli_query($link,$s) or die("cannot execute query".mysqli_error($link));
$s11= mysqli_fetch_array($s1);


include "header.php";
?>

    <section id="content">
      <div class="container">



        <div class="row">
          <div class="span12">
            
            <h3 class="aligncenter"> We have recieved your request.</h3>
            <p class="aligncenter">We will get back to you shortly.</p>
          </div>

        </div>



      </div>
    </section>
<?php include"footer.php";?>
</body>

</html>

