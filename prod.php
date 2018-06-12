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
$pid= $_REQUEST['pid'];
$product= "select * from product where id= $pid";
$p=  mysqli_query($link,$product) or die("cannot execute query".mysqli_error($link));
$p1= mysqli_fetch_array($p);
if(isset($_REQUEST['submit']))
{
    $r= $_REQUEST['r'];
    $r1= 'yes';
    $rc=$_REQUEST['rcost'];
    $rc1= 0;
 $check1 = strcmp($r,$r1);
 if ($check1 == 0){
     $check2= strcmp($rc, $rc1);
     if($check2==0)
      $msg= "Please enter rental cost/day of the product!";
      else{
    
        $update= "UPDATE `product` SET `qty`= '".mysql_real_escape_string($_REQUEST['qty'])."',`cost`='".mysql_real_escape_string($_REQUEST['cost'])."',`r`='".mysql_real_escape_string($_REQUEST['r'])."',`rcost`='".mysql_real_escape_string($_REQUEST['rcost'])."',`des`='".mysql_real_escape_string($_REQUEST['des'])."' WHERE `id` = '$pid'";
     mysqli_query($link,$update) or die("cannot execute query".mysqli_error($link).$update); 
  
  header("location:seller.php");
 
}
}
else{
    
        $update= "UPDATE `product` SET `qty`= '".mysql_real_escape_string($_REQUEST['qty'])."',`cost`='".mysql_real_escape_string($_REQUEST['cost'])."',`r`='".mysql_real_escape_string($_REQUEST['r'])."',`rcost`='".mysql_real_escape_string($_REQUEST['rcost'])."',`des`='".mysql_real_escape_string($_REQUEST['des'])."' WHERE `id` = '$pid'";
     mysqli_query($link,$update) or die("cannot execute query".mysqli_error($link).$update); 
  
  header("location:seller.php");
 
}
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
          <form method="post" role="form" onsubmit="return show();">  
          <h4><?php echo $p1['name'];?></h4>
          <p>Quantity: <small><input type="text" value="<?php echo $p1['qty'];?>" name="qty" required="required"/></small></p> 
          <p>Cost: <small><input type="text" value="<?php echo $p1['cost'];?>" name="cost" required="required"/></small></p> 
          <p>Rent: <small> <select name = "r" >
               <option value = "yes">Yes</option>
               <option value = "no">No</option>
              </select></small></p>
           <p>Rental Cost: <small><input type="text" value="<?php echo $p1['rcost'];?>" name="rcost" required="required"/></small>/day</p>  
           <p>Description: <small><textarea name="des" required="required" rows="5" cols="10"/><?php echo $p1['des'];?></textarea></small></p>  
            <button class="btn btn-color margintop20 " name="submit" type="submit">Update</button> 
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
</script>