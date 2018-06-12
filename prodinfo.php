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
$uid= $s11['id'];
$pid= $_REQUEST['pid'];
$product= "select * from product where id= $pid";
$p=  mysqli_query($link,$product) or die("cannot execute query".mysqli_error($link));
$p1= mysqli_fetch_array($p);
if(isset($_REQUEST['atc']))
{
    $a= "select * from cart where `pid`='$pid' and `uid`='$uid'";
    $a1= mysqli_query($link,$a) or die("cannot execute query".mysqli_error($link));
    if(mysqli_num_rows($a1)==0)
    {
    $insert= "insert into `cart` (`pid`, `uid`, `qty`) values ('$pid', '$uid', '".$_REQUEST['qty']."')";
    mysqli_query($link,$insert) or die("cannot execute query".mysqli_error($link).$insert); 
    
    header("location:buycart.php");
  }
  else
  $msg= 'You already have this product in your cart!';
}
if(isset($_REQUEST['rent']))
{
     $a= "select * from rentcart where `pid`='$pid' and `uid`='$uid'";
    $a1= mysqli_query($link,$a) or die("cannot execute query".mysqli_error($link));
    if(mysqli_num_rows($a1)==0)
    {
        $r= $p1['r'];
        if(strcmp($r, 'no')==0)
        {
            $msg= "Sorry, this product is not rentable!";
        }
        else
        {
    $insert= "insert into `rentcart` (`pid`, `uid`, `qty`, `day`) values ('$pid', '$uid', '".$_REQUEST['qty']."', '".$_REQUEST['day']."')";
    mysqli_query($link,$insert) or die("cannot execute query".mysqli_error($link).$insert); 
  
    header("location:rentcart.php");
    }
    }
    else
    $msg= 'You already have this product in your cart!';
}
include"header.php";
?>



    <section id="content">
      <div class="container">
        <div class="row">
             <div class="span6">
            <img src="img/seller/images.jpg" width="500" height="281" >
          </div>
          <div class="span6">
           <?php
                        if(isset($msg)) echo "<font color='red'>".$msg."</font>";
                        ?>
          <form method="post" role="form" >  
          <h4><?php echo $p1['name'];?></h4>
           
          <p>Cost: <small>Rs <?php echo $p1['cost'];?></small></p> 
          
          <?php 
          if(strcmp($p1['r'],'no')==0){
            ?>
          <p>Rent: <small>Not Available</small></p>
          <?php
          }
          else{
            ?>
            <p>Rent: <small>Available</small></p>
           <p>Rental Cost: <small>Rs <?php echo $p1['rcost'];?></small>/day</p>
           <?php }?>  
           <p>Description: <small><?php echo $p1['des'];?></small></p>  
           <p>Quantity: <small><input type="number" value="1" name="qty" min="0" max="<?php echo $p1['qty']?>" required="required"/></small></p>
            <p>Days: <small><input type="number" value="1" name="day" id="day" /></small></p>
            
            <button class="btn btn-color margintop20 " name="atc" id="atc" type="submit" >Add to Buy Cart</button> 
            <button class="btn btn-color margintop20 " name="rent" id="rent" type="submit" onclick="return check();">Add to Rent Cart</button>
          </form>
          </div>

         
        </div>

        
        </div>

      </div>
    </section>


<?php include"footer.php";?>
</body>

</html>
<script>
function show()
{
    return true;
}
function check()
{
    if(document.getElementById("day").value<1)
    {
        alert("Please enter valid number of days.");
        document.getElementById("day").focus();
        return false; 
    }
    else
    return true;
}
</script>