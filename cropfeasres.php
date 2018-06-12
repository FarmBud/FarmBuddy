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
$f= "select*from cropfeas where `id`= '$cf'";
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
                      <h3>Crop Feasibility <small>Get crop feasibility for your farm </small></h3> 
                </div>
              </div>
            </article>

            <article>
              
        <div class="row">
          <div class="span12">
            <h6>Details for compatibility of <?php echo $f11['crop'] ?> with <?php echo $f11['soil'] ?> soil at <?php echo $f11['city'] ?> city is:</h6>
          </div>
          <div class="span6">
            <div class="pricing-box-wrap" >
              <div class="pricing-heading">
                <h3 style="color: yellow;">AVERAGE LOSS</h3>
                <h6 style="color: white;"><?php echo $f11['aloss']; ?>%</h6>
              </div>
              <div class="pricing-terms">
                <h6>Yield- <?php echo $f11['ayield'];?> KG/Hectare</h6>
              </div>
           
            </div>
          </div>
          <div class="span6">
            <div class="pricing-box-wrap" >
              <div class="pricing-heading">
                <h3 style="color: red;">MAXIMUM LOSS</h3>
                <h6 style="color: white;"><?php echo $f11['maxloss']; ?>%</h6>
              </div>
             
              <div class="pricing-terms">
                <h6>Year- <?php echo $f11['maxyear'];?>, Yield- <?php echo $f11['maxyield'];?> KG/Hectare</h6>
              </div>
             
            </div>
          </div>
          <div class="span6">
            <div class="pricing-box-wrap">
              <div class="pricing-heading">
                <h3 style="color: lightgreen;">MINIMUM LOSS</h3>
                <h6 style="color: white;"><?php echo $f11['minloss']; ?>%</h6>
              </div>
              
              <div class="pricing-terms">
                <h6>Year- <?php echo $f11['minyear'];?>, Yield- <?php echo $f11['minyield'];?> KG/Hectare</h6>
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
