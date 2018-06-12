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
$product= "select * from product where sid= $id and r= 'yes'";
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
                <h4>Products</h4>
              </div>
              <div class="grid related-works cs-style-3">
              <?php
              if(mysqli_num_rows($p)>0)
                {
                    while($p1=mysqli_fetch_array($p))
                    {?>
                <div class="span2">
                  <div class="item">
                    <figure>
                      <div><img src="img/seller/images.jpg" alt=""></div>
                      <figcaption>
                        <h3><?php echo $p1['name'];?></h3>
                        <p>
                          
                          <a href="prod.php?pid=<?php echo $p1['id'];?>"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                        </p>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <?php }}else{?>
                <p>No products to display! <a href="selleraddproduct.php">Add Products </a></p>
                <?php }?>
              </div>
            </div>

          </div>

         <?php include"rightnav.php"?>
        </div>
      </div>
    </section>


<?php include"footer.php";?>
</body>

</html>
