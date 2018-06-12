<?php
include "connect.php";

if(!isset($_SESSION['projectadmin']) or ($_SESSION['projectadmin']==""))
{
    header("location:login.php");
}

$_SESSION['v']="";
$val= $_SESSION['projectadmin'];
$s= "select * from user where `id`= '$val' and `utype`='1'";
$s1= mysqli_query($link,$s) or die("cannot execute query".mysqli_error($link));
$s11= mysqli_fetch_array($s1);
include "header.php";
?>
<!---------------------------------------------->
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Hi <?php echo $s11['fname']; ?>!</h2>
            </div>
          </div>
          
        </div>
      </div>
    </section>

        <?php include"sidenav.php";?>
<!--------------------------------------------->
<!--------------------------------------------->
          <div class="span8">
            <article>
              <div class="row">

                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h6>We intend to bring smile on your face!</h6>
                    </div>

                    <img src="img/dummies/blog/img4.jpg" alt="" />
                  </div>
                  </section>
<!-------------------------------------------------------------->
<!-------------------------------------------------------------->
<?php include"footer.php";?>

</body>

</html>
