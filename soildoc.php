<?php
include "connect.php";

if(!isset($_SESSION['projectadmin']) and ($_SESSION['projectadmin']==""))
{
    header("location:login.php");
}


$val= $_SESSION['projectadmin'];
$s= "select * from user where `id`= '$val' and `utype`='1'";
$s1= mysqli_query($link,$s) or die("cannot execute query".mysqli_error($link));
$s11= mysqli_fetch_array($s1);

if(isset($_REQUEST['submit']))
{
    $i= $s11['id'];
    $insert= "insert into  docservreq(`farmerid`,`name`,`email`,`phone`, `add`, `des`, `rtype`, `res`) values ('$i','".mysql_real_escape_string($_REQUEST['name'])."','".mysql_real_escape_string($_REQUEST['email'])."', '".mysql_real_escape_string($_REQUEST['phone'])."','".mysql_real_escape_string($_REQUEST['addr'])."','".mysql_real_escape_string($_REQUEST['des'])."','Soil Test','requested')";
    mysqli_query($link,$insert) or die("cannot execute query".mysqli_error($link).$insert); 
  
  header("location:resucess.php");
   

   
}
include "header.php";
?>
<!---------------------------------------------->

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Hi <?php echo $s11['fname']; ?>!</h2>
            </div>
          </div>
          
        </div>
      </div>
    </section>

        <?php include"sidenav.php";?>
<!--------------------------------------------->
<!--------------------------------------------->
          <div class="span8">
            <article>
              <div class="row">

                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3>Soil Doctor <small>On-demand national soil testing service </small></h3> 
                   
                  
                 
                    
                  
                </div>
              </div>
            </article>

            <article>
              <div class="row">

                <div class="span8">
              <div style="background-color: maroon; border-bottom-color: black; border-bottom-style: solid; border-bottom-width: 8px; padding-top:18px;">
                 <h4 style="color: white; font-weight: lighter;">Enter your contact details to get your soil tested</h4>
                   </div>
                    <?php
                    if(isset($msg)) echo "<font color='red'>".$msg."</font>";
                    ?>
                  <div >
               
                    <form action="" method="post" onsubmit="return show();">
                         <div class="row">
                
                <div class="span8" >
                
                  <input style="margin-top:20px; " type="text" name="name" id="name" required="required" value="<?php echo $s11['fname'];?>">
                  <input style="margin-top:20px; " type="number" name="phone" id="phone"  value="<?php echo $s11['phone'];?>">
                  <input style="margin-top:20px; " type="email" name="email" id="email" placeholder="Email-Id (Optional)">
                  
                </div>
                 <div class="span8">
                 <textarea style="margin-top:10px; width: 85%;"   name="addr" id="addr"  placeholder="Address" rows="2" required="required" ></textarea>
                 <textarea style="margin-top:10px; width: 85%;"   name="des" id="des"  placeholder="Message" rows="12" ></textarea>
                 </div> 
                </div>
                <input type="submit" class="btn btn-color" name="submit" />
                    
                    </form>
                    
                  </div>

                </div>
              </div>
            </article>



           
<!-------------------------------------------------------------->
  
    </section>
<!-------------------------------------------------------------->
<!-------------------------------------------------------------->
<?php include"footer.php";?>

</body>
<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
</html>
<script>
  function show(){
   var phoneno = /^\d{10}$/;

     if(trim(document.getElementById("name").value)=="")
    {
        alert("Please enter valid Name");
        document.getElementById("name").focus();
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