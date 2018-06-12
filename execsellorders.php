<?php
include "connect.php";
if(!isset($_SESSION['projectadmin']) and ($_SESSION['projectadmin']==""))
{
    header("location:login.php");
}
$_SESSION['v']="";
$val= $_SESSION['projectadmin'];
$s= "select * from user where `id`= '$val' and `utype`='2'";
$s1= mysqli_query($link,$s) or die("cannot execute query".mysqli_error($link));
$s11= mysqli_fetch_array($s1);
$id=$s11['id'];
$product= "select * from orders where sid= '$id' and `res`= 'executed'";
$p=  mysqli_query($link,$product) or die("cannot execute query".mysqli_error($link));
include"header.php";
?>

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Hi <?php echo $s11['fname'];?>!</h2>
            </div>
          </div>
         
        </div>
      </div>
    </section>
    

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span8">
       

            <div class="row">
              <div class="span8">
                <h4>Executed Sell Orders</h4>
              </div>
              <div class="grid related-works cs-style-3">
              <?php
              
              if(mysqli_num_rows($p)>0)
                {
                    while($p1=mysqli_fetch_array($p))
                    { 
                       
                        ?>
                        <div class="row"></div>
                       
                    
                    
                <div class="span8">
                  <div class="item">
                   
                      
                     
                        <h6>Product: <?php echo $p1['item']; ?></h6>
                        <p>Quantity: <?php echo $p1['qty'];?></p>
                        <p>Price: Rs <?php echo $p1['price'];?></p>
                        <p>Total: Rs <?php echo $p1['total'];?></p>
                        <p><b>FARMER DETAILS:</b></p>
                        <?php
                        $fid= $p1['fid']; 
                        $far= "select * from user where `id`= '$fid' ";
                        $farm= mysqli_query($link,$far) or die("cannot execute query".mysqli_error($link));
                        $farmer= mysqli_fetch_array($farm);
                        ?>  
                        <p>Name: <?php echo $farmer['fname'];?></p> 
                        <p>Contact No: <?php echo $farmer['phone'];?></p> 
                        <p>Address: <?php echo $p1['adr'];?></p> 
                     
                       
                  </div>
                </div>
                <?php }?>
                
                <?php }else{?><p>No pending rental orders! </p><?php }?>
              </div>
            </div>

          </div>

        <?php include"rightnav.php"?>
        </div>
      </div>
    </section>


<?php include"footer.php"?>

</body>

</html>
