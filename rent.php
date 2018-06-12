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
$cid=$_REQUEST['i']; 
$prod= "select *from rentcart where `id`= $cid";
$product =  mysqli_query($link,$prod) or die("cannot execute query".mysqli_error($link));
$parr= mysqli_fetch_array($product);
$pid= $parr['pid'];
$fid= $parr['uid'];
$see= "select * from product where id= $pid";
$se =  mysqli_query($link,$see) or die("cannot execute query".mysqli_error($link));
$sarr= mysqli_fetch_array($se);
$sid=$sarr['sid'];
$q= $parr['qty'];
$day= $parr['day'];
$price=$sarr['rcost'];
$item= $sarr['name'];

$tot= $q*$price*$day;
if(isset($_REQUEST['submit']))
{
    
    $insert= "insert into rentorder(`fid`,`sid`,`pid`,`qty`, `price`,`day`, `total`, `adr`, `res`, `name` ) values ('$fid','$sid','$pid', '$q','$price','$day','$tot','".mysql_real_escape_string($_REQUEST['addr'])."','placed', '$item' )";
    mysqli_query($link,$insert) or die("cannot execute query".mysqli_error($link).$insert); 
    $delete= "DELETE FROM `rentcart` WHERE `id` = '$cid'";
    mysqli_query($link,$delete) or die("cannot execute query".mysqli_error($link).$insert); 
  header("location:rentorders.php");
}
include "header.php";
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
              <center>
              <div class="span12">
              
                <h4>Enter Details</h4>
              </div>
              <div class="grid related-works cs-style-3">
             
           
                   <div class="row">    
              
                        <div class="span12">
                        <form action="" method="post" onsubmit="return show();">
                        <p><b>ITEM: </b><?php echo $sarr['name'];?></p>
                        <p><b>QUANTITY: </b><?php echo $q;?></p>
                        <p><b>PRICE: </b>Rs <?php echo $price;?></p>
                        <p><b>DAY(S): </b><?php echo $day;?></p>
                        <p><b>TOTAL COST:</b>Rs <?php echo $tot;?></p>
                        <p><b>ENTER ADDRESS:</b><textarea name="addr" id="addr"  placeholder="Address" rows="2" required="required" ></textarea></p>
                        <p><b>NOTE:</b>The provider will come and hand over the product to you. He will come to take back after your entered days.</p>
                          <input type="submit" class="btn btn-color margintop10" name="submit" value="Buy Now"></a>
                        </p>
                      </form>
                   </div>
                  </div>
                 
              </center>
              </div>
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
     if(trim(document.getElementById("addr").value)=="")
    {
        alert("Please enter valid address");
        document.getElementById("addr").focus();
        return false;
    }
else
{ 

return true;
}

 
}
function trim(StringTotrim){                             //To remove spaces
    return StringTotrim.replace(/^\s+|\s+$/,"");
}

</script>