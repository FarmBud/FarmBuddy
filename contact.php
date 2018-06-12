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

    <section id="inner-headline">
      
    </section>

    <section id="content">
      
      <div class="container">
        <div class="row">
         
          <div class="span4">
            <div class="clearfix"></div>
            <aside class="right-sidebar">

              <div class="widget">
                <h5 class="widgetheading">Contact information<span></span></h5>

                <ul class="contact-info">
                  <li><label>Address :</label> Bangalore, Karnataka<br /> India</li>
                  <li><label>Phone :</label>+91 8023645417/ +91 802364540606</li>
                  <li><label>Fax : </label>+62 123 456 10 / +62 123 456 11</li>
                  <li><label>Email : </label> farmbuddy@gmail.com</li>
                </ul>

              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
<?php include"footer.php"?>
</body>

</html>
