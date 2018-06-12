<?php
include"connect.php";
if(!isset($_SESSION['projectadmin']) and ($_SESSION['projectadmin']==""))
{
    header("location:login.php");
}
$val= $_SESSION['projectadmin'];
$s= "select * from user where `id`= '$val' and `utype`='1'";
$s1= mysqli_query($link,$s) or die("cannot execute query".mysqli_error($link));
$s11= mysqli_fetch_array($s1);

$f= "select*from docservreq where `farmerid`= '$val' and `res`!='done' and `res`!='canceled'";
$f1= mysqli_query($link,$f) or die("cannot execute query");
$h= "select*from docservreq where `farmerid`= '$val' and `res`='done'";
$h1= mysqli_query($link,$h) or die("cannot execute query");
$y= "select*from docservreq where `farmerid`= '$val' and `res`='canceled'";
$y1= mysqli_query($link,$y) or die("cannot execute query");

include"header.php";
?>

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Your Requests</h2>
            </div>
          </div>
        
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span14">
           

            <div class="row">
              <?php 
              $flag=0;
                if(mysqli_num_rows($f1)>0)
                {
                    ?> <h6>Active Requests</h6><?php
                   while($f11=mysqli_fetch_array($f1))
                    { if($flag==3){?><br /><br /><?php $flag=0;}
                        ?>
              <div class="span3">
                  <div class="widget">
                <h5 class="widgetheading">Request id: <?php echo $f11['id']?></h5>
                <ul class="folio-detail">
                  <li><label>Request Type :</label> <?php echo $f11['rtype']?></li>
                  
                  <li><label>Request Status :</label><?php echo $f11['res']?> </li>
                  
                <a href="cancel.php?i=<?php echo $f11['id']?>" class="btn btn-color margintop10"> Cancel</a>
                </ul>
                </div>
              </div>
              <?php }}
              else
              {
                echo "You have not placed any service requests. See our "?><a href="services.php">Services</a><?php  
              }?>
              
            </div>
            <div class="row">
              <?php 
              $flag=0;
                if(mysqli_num_rows($h1)>0)
                {
                    ?>
                    <h6>Completed Requests</h6>
                    <?php
                   while($h11=mysqli_fetch_array($h1))
                    { if($flag==3){?><br /><br /><?php $flag=0;}
                        ?>
              <div class="span3">
                  <div class="widget">
                <h5 class="widgetheading">Request id: <?php echo $h11['id']?></h5>
                <ul class="folio-detail">
                  <li><label>Request Type :</label> <?php echo $h11['rtype']?></li>
                  
                  <li><label>Request Status :</label><?php echo $h11['res']?> </li>
                  
                </ul>
                </div>
              </div>
              <?php }}
              ?>
                </div>
       
            <div class="row">
              <?php 
              $flag=0;
                if(mysqli_num_rows($y1)>0)
                {
                    ?>
                    <h6>Canceled Requests</h6>
                    <?php
                   while($y11=mysqli_fetch_array($y1))
                    { if($flag==3){ $flag=0;}
                        ?>
              <div class="span3">
                  <div class="widget">
                <h5 class="widgetheading">Request id: <?php echo $y11['id']?></h5>
                <ul class="folio-detail">
                  <li><label>Request Type :</label> <?php echo $y11['rtype']?></li>
                  
                  <li><label>Request Status :</label><?php echo $y11['res']?> </li>
                  
                </ul>
                </div>
              </div>
              <?php }}
              ?>
           
    
              
            </div>

          </div>

          
        </div>
      </div>
    </section>


    <?php include"footer.php";?>

</body>

</html>
