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
$f= "select*from rentorder where `fid`= '$val' and `res`='placed'";
$f1= mysqli_query($link,$f) or die("cannot execute query");
$h= "select*from rentorder where `fid`= '$val' and `res`='executed'";
$h1= mysqli_query($link,$h) or die("cannot execute query");
$y= "select*from rentorder where `fid`= '$val' and `res`='canceled'";
$y1= mysqli_query($link,$y) or die("cannot execute query");

include"header.php";
?>

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Your Orders</h2>
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
                    ?> <h6>Ongoing Orders</h6><?php
                   while($f11=mysqli_fetch_array($f1))
                    {
                        $sid=$f11['sid'];
                        $seller= "select*from user where id='$sid'";
                        $seller1= mysqli_query($link,$seller) or die("cannot execute query");
                        $seller11= mysqli_fetch_array($seller1);
                        if($flag==3){?><br /><br /><?php $flag=0;}
                        ?>
              <div class="span3">
                  <div class="widget">
                <h5 class="widgetheading">Order id: <?php echo $f11['id']?></h5>
                <ul class="folio-detail">
                  <li><label>Item :</label> <?php echo $f11['name']?></li>
                  <li><label>Quantity :</label> <?php echo $f11['qty']?></li>
                  <li><label>Days :</label> <?php echo $f11['day']?></li>
                  <li><label>Total Amount : Rs </label> Rs <?php echo $f11['total']?></li>
                  <li><label>Service Provider Details:</label></li>
                  <li><label>Name:</label><?php echo $seller11['fname'];?>&nbsp;&nbsp;<?php echo $seller11['lname'] ?></li>
                  <li><label>Contact No:</label><?php echo $seller11['phone'] ?></li>
                  <li><label>Request Status :</label><?php echo $f11['res']?> </li>
                  
                <a href="cancelrorder.php?i=<?php echo $f11['id']?>" class="btn btn-color margintop10"> Cancel</a>
                </ul>
                </div>
              </div>
              <?php }}
              else
              {
                echo "You have not placed any orders. See  "?><a href="buyres.php">Products</a><?php  
              }?>
              
            </div>
            <div class="row">
              <?php 
              $flag=0;
                if(mysqli_num_rows($h1)>0)
                {
                    ?>
                    <h6>Executed Orders</h6>
                    <?php
                   while($h11=mysqli_fetch_array($h1))
                    { $sid=$h11['sid'];
                        $heller= "select*from user where id='$sid'";
                        $heller1= mysqli_query($link,$heller) or die("cannot execute query");
                        $heller11= mysqli_fetch_array($heller1);                   
                     if($flag==3){?><br /><br /><?php $flag=0;}
                        ?>
              <div class="span3">
                  <div class="widget">
              <h5 class="widgetheading">Order id: <?php echo $h11['id']?></h5>
                <ul class="folio-detail">
                  <li><label>Item :</label> <?php echo $h11['name']?></li>
                  <li><label>Quantity :</label> <?php echo $h11['qty']?></li>
                  <li><label>Days :</label> <?php echo $h11['day']?></li>
                  <li><label>Total Amount : Rs </label> Rs <?php echo $h11['total']?></li>
                  <li><label>Service Provider Details:</label></li>
                  <li><label>Name:</label><?php echo $seller11['fname'];?>&nbsp;&nbsp;<?php echo $seller11['lname'] ?></li>
                  <li><label>Contact No:</label><?php echo $seller11['phone'] ?></li>
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
                    <h6>Canceled Orders</h6>
                    <?php
                   while($y11=mysqli_fetch_array($y1))
                                      
                    { 
                          $yid=$y11['sid'];
                        $yeller= "select*from user where id='$sid'";
                        $yeller1= mysqli_query($link,$yeller) or die("cannot execute query");
                        $yeller11= mysqli_fetch_array($yeller1);                        
                                                if($flag==3){ $flag=0;}
                        ?>
              <div class="span3">
                  <div class="widget">
             <h5 class="widgetheading">Order id: <?php echo $y11['id']?></h5>
                <ul class="folio-detail">
                  <li><label>Item :</label> <?php echo $y11['name']?></li>
                  <li><label>Quantity :</label> <?php echo $y11['qty']?></li>
                  <li><label>Days :</label> <?php echo $y11['day']?></li>
                  <li><label>Total Amount : Rs </label> <?php echo $y11['total']?></li>
                  <li><label>Service Provider Details:</label></li>
                  <li><label>Name:</label><?php echo $yeller11['fname'];?>&nbsp;&nbsp;<?php echo $seller11['lname'] ?></li>
                  <li><label>Contact No:</label><?php echo $yeller11['phone'] ?></li>
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
