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
$sid= $s11['id'];
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
    if($_FILES['pic']['tmp_name']!="")
    {
    list($width, $height, $type, $attr) =getimagesize($_FILES['pic']['tmp_name']);
    $dest="img/seller/".time()."_".$_FILES['pic']['name'];
    move_uploaded_file($_FILES['pic']['tmp_name'],$dest) or die("Cannot Upload");
    }
        $insert= "insert into `product`(`sid`,`name`,`qty`,`cost`,`r`, `rcost`, `des`, `pic`) values ('$sid','".mysql_real_escape_string($_REQUEST['name'])."','".mysql_real_escape_string($_REQUEST['qty'])."','".mysql_real_escape_string($_REQUEST['cost'])."','".mysql_real_escape_string($_REQUEST['r'])."','".mysql_real_escape_string($_REQUEST['rcost'])."','".mysql_real_escape_string($_REQUEST['des'])."','".$dest."')";
    mysqli_query($link,$insert) or die("cannot execute query".mysqli_error($link).$insert);
    header("location:seller.php");
 
}
}
else{
    if($_FILES['pic']['tmp_name']!="")
    {
    list($width, $height, $type, $attr) =getimagesize($_FILES['pic']['tmp_name']);
    $dest="img/seller/".time()."_".$_FILES['pic']['name'];
    move_uploaded_file($_FILES['pic']['tmp_name'],$dest) or die("Cannot Upload");
    }
             $insert= "insert into `product`(`sid`,`name`,`qty`,`cost`,`r`, `rcost`, `des`, `pic`) values ('$sid','".mysql_real_escape_string($_REQUEST['name'])."','".mysql_real_escape_string($_REQUEST['qty'])."','".mysql_real_escape_string($_REQUEST['cost'])."','".mysql_real_escape_string($_REQUEST['r'])."','".mysql_real_escape_string($_REQUEST['rcost'])."','".mysql_real_escape_string($_REQUEST['des'])."','".$dest."')";
    mysqli_query($link,$insert) or die("cannot execute query".mysqli_error($link).$insert);
    header("location:seller.php");
 
 
}
}
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
                <h4>Add Product</h4>
              </div>
              <div class="grid related-works cs-style-3">
              <?php
                        if(isset($msg)) echo "<font color='red'>".$msg."</font>";
                        ?>
          <form method="post" role="form" onsubmit="return show();">  
          <p>Name: <small><input type="text" placeholder="Product Name" name="name" id="name" required="required"/></small></p> 
          <p>Quantity: <small><input type="text" placeholder="Quantity" name="qty" id="qty" required="required"/></small></p> 
          <p>Cost: <small><input type="text" placeholder="Cost" name="cost" required="required"/></small></p> 
          <p>Rent: <small> <select name = "r" >
               <option value = "yes">Yes</option>
               <option value = "no">No</option>
              </select></small></p>
           <p>Rental Cost: <small><input type="text" placeholder="Rental Cost (enter 0 if rent is not available)" name="rcost" required="required"/></small></p>  
           <p>Description: <small><textarea name="des" required="required" rows="5" cols="10" placeholder="Description"/></textarea></small></p> 
            <p><input type="file" name="pic" id="pic"/></p>
            <button class="btn btn-color margintop20 " name="submit" type="submit">Update</button> 
          </form>
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
