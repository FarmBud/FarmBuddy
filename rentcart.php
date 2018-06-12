<?php
include "connect.php";
if(!isset($_SESSION['projectadmin']) and ($_SESSION['projectadmin']==""))
{
    header("location:login.php");
}
$_SESSION['v']="";
$val= $_SESSION['projectadmin'];
$s= "select * from user where `id`= '$val' and `utype`='1'";
$s1= mysqli_query($link,$s) or die("cannot execute query".mysqli_error($link));
$s11= mysqli_fetch_array($s1);
$id=$s11['id'];
$product= "select * from rentcart where uid= $id";
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
                <h4>Your Cart for Rent</h4>
              </div>
              <div class="grid related-works cs-style-3">
              <?php
              if(mysqli_num_rows($p)>0)
                {
                    while($p1=mysqli_fetch_array($p))
                    {
                        $pid= $p1['pid'];
                        $prod= "select* from `product` where id= '$pid'";
                        $pro= mysqli_query($link,$prod) or die("cannot execute query".mysqli_error($link));
                        $pro1= mysqli_fetch_array($pro);
                        ?>
                   <div class="row">    
                <div class="span2">
                  <div class="item">
                    <figure>
                      <div><img src="img/seller/images.jpg" alt=""></div>
                       </figure>
                      </div>
                      </div>
                        <div class="span2">
                        <p><?php echo $pro1['name'];?></p>
                         <p><?php echo $p1['day']?>x <?php echo $p1['qty'];?>x Rs<?php echo $pro1['rcost']?>= <?php $mul= ($p1['qty']* $pro1['rcost']* $p1['day']); echo 'Rs'; echo$mul;?></p>
                        
                        <p>
                          
                          <a href="prodinfo.php?pid=<?php echo $p1['pid'];?>" class="btn btn-color">Details</a>
                          <a href="remover.php?i=<?php echo $p1['id'];?>" class="btn btn-color" >Remove</a>
                      
                          <a href="rent.php?i=<?php echo $p1['id'];?>" class="btn btn-color margintop10" >Take Rent Now</a>
                        </p>
                      
                   </div>
                  </div>
                 
                <?php }}else{?>
                <p>No products in your cart! <a href="buyres.php">Add Products </a></p>
                <?php }?>
              </div>
            </div>

          </div>

     
        </div>
      </div>
    </section>


<?php include"footer.php";?>

</body>

</html>
