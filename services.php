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
                      <h4>Services <small>Useful services that we provide to you! </small></h4> 
                   
                  
                 
                    
                  
                </div>
              </div>
            </article>

            <article>
              <div class="row">

                <div class="span6">
              
                 <h2><small>Which service do you want</small></h2>
                  <div class="post-entry">    
                    <a href="soildoc.php" class="btn btn-color"> Soil Doctor</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="plantdoc.php" class="btn btn-color"> Plant Doctor</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="calc.php" class="btn btn-color"> Calculator</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="labour.php" class="btn btn-color margintop10"> Request Labour</a>
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
