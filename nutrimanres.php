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
$cf= $_REQUEST['cf'];
$f= "select*from nutrition where `id`= '$cf'";
$f1= mysqli_query($link, $f) or die("cannot execute");
$f11= mysqli_fetch_array($f1);
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
                      <h3>Nutrition Management <small>Get essential nutrition information for your farm </small></h3>  
                </div>
              </div>
            </article>

            <article>
              
        <div class="row">
          <div class="span12">
            <h6>Nutrition requirements for entered combination is:</h6>
          </div>
        <div class="row">
         
          <div class="span8">
            <div class="pricing-box-plain">
              <div class="heading">
                <h4>NITROGEN</h4>
                <span><?php echo $f11['nitrogen'];?></span>
              </div>    
            </div>
          </div>
           <div class="span8">
            <div class="pricing-box-plain">
              <div class="heading">
                <h4>PHOSPHORUS</h4>
                <span><?php echo $f11['phosphorus'];?></span>
              </div>    
            </div>
          </div>
            <div class="span8">
            <div class="pricing-box-plain">
              <div class="heading">
                <h4>POTASSIUM</h4>
                <span><?php echo $f11['potassium'];?></span>
              </div>    
            </div>
          </div>
            <div class="span8">
            <div class="pricing-box-plain">
              <div class="heading">
                <h4>MICRO NUTRIENTS</h4>
                <span><?php echo $f11['mc'];?></span>
              </div>    
            </div>
          </div>
            <div class="span8">
            <div class="pricing-box-plain">
              <div class="heading">
                <h4>FYM APPLICATION</h4>
                <span><?php echo $f11['fa'];?></span>
              </div>    
            </div>
          </div>
            <div class="span8">
            <div class="pricing-box-plain">
              <div class="heading">
                <h4>SOIL RECOMMENDATION</h4>
                <span><?php echo $f11['srec'];?></span>
              </div>    
            </div>
          </div>


        </div>
            </article>
<!-------------------------------------------------------------->
  
    </section>
<!-------------------------------------------------------------->
<!-------------------------------------------------------------->
<?php include"footer.php";?>

</body>

</html>
