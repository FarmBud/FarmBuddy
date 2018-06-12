<?php
include"connect.php";
if(!isset($_SESSION['projectadmin']) and ($_SESSION['projectadmin']==""))
{
    header("location:login.php");
}
$_SESSION['v']="";
$val= $_SESSION['projectadmin'];
$s= "select * from user where `id`= '$val' and `utype`='2'";
$s1= mysqli_query($link,$s) or die("cannot execute query".mysqli_error($link));
$s11= mysqli_fetch_array($s1);
$i= $s11['id'];
if(isset($_REQUEST['submit']))
{
    
    $select= "select * from user where  phone='".$_REQUEST['phone']."' and `id`!= $i";
$rs= mysqli_query($link,$select) or die("cannot execute query".mysqli_error($link));
if(mysqli_num_rows($rs)==0)
{   
  $e= $_REQUEST['email'];
  if(strlen($e)!=0)
  {
    $select1= "select * from user where email='".$_REQUEST['email']."' and `id`!=$i";
    $rs1= mysqli_query($link,$select1) or die("cannot execute query".mysqli_error($link));
   if(mysqli_num_rows($rs1)==0)
   {
   
    $update= "UPDATE `user` SET `fname`= '".mysql_real_escape_string($_REQUEST['fname'])."',`lname`='".mysql_real_escape_string($_REQUEST['lname'])."',`email`='".mysql_real_escape_string($_REQUEST['email'])."',`phone`='".mysql_real_escape_string($_REQUEST['phone'])."' WHERE `id` = '$i'";
     mysqli_query($link,$update) or die("cannot execute query".mysqli_error($link).$update); 
  
  header("location:seller.php");
   
 }  
   
    else
    {
       $msg = "This email id already exists for other user! ";  
    }
    }
    else
    {
            $update= "UPDATE `user` SET (`fname`,`lname`,`email`,`phone`) values ('".mysql_real_escape_string($_REQUEST['fname'])."','".mysql_real_escape_string($_REQUEST['lname'])."','', '".mysql_real_escape_string($_REQUEST['phone'])."' WHERE `id` = '$i'";
     mysqli_query($link,$update) or die("cannot execute query".mysqli_error($link).$update); 

  header("location:seller.php");
    }
    }
    else
    {
        $msg= "This contact number already exists for other user!";
    }
}
include"header.php";
?>
<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>

    <section id="inner-headline">
      <div class="container">
      
      </div>
    </section>

    <section id="content">
    
      <div class="container">
        <div class="row">
          
         <center><h4 style="margin-left: -12px;">Edit Personal Details</h4>

                        <?php
                        if(isset($msg)) echo "<font color='red'>".$msg."</font>";
                        ?>

            <form   method="post" role="form" onsubmit="return show()" >

              

              <div class="row">
                <div >
                  <label>First Name</label><input type="text" id="fname" name="fname" value="<?php echo $s11['fname']?>"  required="required" />
                 
                </div>
                 <div >
                 <label>Last Name</label>
                  <input type="text" name="lname" value="<?php echo $s11['lname']?>" />
                  
                </div>
               
                <div >
                <label>Contact Number</label>
                  <input type="number" name="phone" id="phone" value="<?php echo $s11['phone']?>"  required="required" />
                
                </div>
                <div >
                 <label>Email Id</label>
                  <input type="email" name="email" value="<?php echo $s11['email']?>" />
                  
                </div>
           
                  <p>
                  
                    <button class="btn btn-color margintop20 " name="submit" type="submit">Update</button>
                    
                </div>
           
            </form>
            </center>
          </div>
         
        </div>
      </div>
    </section>
<?php include"footer.php";?>
   <script language="javascript">
	populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
	populateCountries("country2");
	populateCountries("country2");
</script>
</body>

</html>
<script>
function show(){
   var phoneno = /^\d{10}$/;

     if(trim(document.getElementById("fname").value)=="")
    {
        alert("Please enter First Name");
        document.getElementById("fname").focus();
        return false;
    }
  if(!(document.getElementById("phone").value.match(phoneno))
     
        {
        alert("Please enter valid contact number.");
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
