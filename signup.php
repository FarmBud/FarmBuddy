<?php
include"connect.php";

if(isset($_REQUEST['submit']))
{
    
    $select= "select * from user where  phone='".$_REQUEST['phone']."'";
$rs= mysqli_query($link,$select) or die("cannot execute query".mysqli_error($link));
if(mysqli_num_rows($rs)==0)
{   
  $e= $_REQUEST['email'];
  if(strlen($e)!=0)
  {
    $select1= "select * from user where email='".$_REQUEST['email']."' ";
    $rs1= mysqli_query($link,$select1) or die("cannot execute query".mysqli_error($link));
   if(mysqli_num_rows($rs1)==0)
   {
   
    
    $insert= "insert into user(`fname`,`lname`,`email`,`phone`, `pass`, `country`, `state`,`city`, `utype`) values ('".mysql_real_escape_string($_REQUEST['fname'])."','".mysql_real_escape_string($_REQUEST['lname'])."','".mysql_real_escape_string($_REQUEST['email'])."', '".mysql_real_escape_string($_REQUEST['phone'])."','".mysql_real_escape_string($_REQUEST['pass'])."','".mysql_real_escape_string($_REQUEST['country'])."','".mysql_real_escape_string($_REQUEST['state'])."','".mysql_real_escape_string($_REQUEST['city'])."','".mysql_real_escape_string($_REQUEST['usr'])."')";
    mysqli_query($link,$insert) or die("cannot execute query".mysqli_error($link).$insert); 
  
  header("location:login.php");
   
 }  
   
    else
    {
       $msg = "This user already exists! ";  
    }
    }
    else
    {
            $insert= "insert into user(`fname`,`lname`,`email`,`phone`, `pass`, `country`, `state`, `utype`) values ('".mysql_real_escape_string($_REQUEST['fname'])."','".mysql_real_escape_string($_REQUEST['lname'])."','".mysql_real_escape_string($_REQUEST['email'])."', '".mysql_real_escape_string($_REQUEST['phone'])."','".mysql_real_escape_string($_REQUEST['pass'])."','".mysql_real_escape_string($_REQUEST['country'])."','".mysql_real_escape_string($_REQUEST['state'])."','".mysql_real_escape_string($_REQUEST['usr'])."')";
    mysqli_query($link,$insert) or die("cannot execute query".mysqli_error($link).$insert); 
  
  header("location:login.php");
    }
    }
    else
    {
        $msg= "This user already exists!";
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
          
         <center><h4 style="margin-left: -12px;">SignUp</h4>

                        <?php
                        if(isset($msg)) echo "<font color='red'>".$msg."</font>";
                        ?>

            <form  action="" method="post" role="form" onsubmit="return show()" >

              

              <div class="row">
                <div >
                  <input type="text" id="fname" name="fname" placeholder="First Name"  required="required" />
                 
                </div>
                 <div >
                  <input type="text" name="lname" placeholder="Last Name (optional)"  />
                  
                </div>
               
            
                <div >
                  <input type="number" name="phone" id="phone" placeholder="Contact Number"required="required" />
                
                </div>
                <div >
                  <input type="email" name="email" placeholder="Email (optional)"  />
                  
                </div>
                <div>
                <script type= "text/javascript" src = "js/countries.js"></script>
	           <select id="country" name ="country"></select> </br>
	            <select name ="state" id ="state"></select>  </br> 
                </div>
                <div >
                  <input type="text" name="city" placeholder="City" required="required" />
                  
                </div>
                 <div >
                  <input type="password" name="pass" placeholder="Password" required="required" minlength="8" />
                </div>
                
                  <p>
                  I am a   &nbsp;&nbsp;<input type="radio"  name="usr" value="1" checked>farmer
                           &nbsp;&nbsp;
                            <input type="radio"  name="usr" value="2" >service provider<br />
                  
                    <button class="btn btn-color margintop20 " name="submit" type="submit">Register</button>
                    <br />
                    Already a Member? <a href="login.php">Login</a>
                  </p>
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
         if(trim(document.getElementById("city").value)=="")
    {
        alert("Please enter City name");
        document.getElementById("city").focus();
        return false;
    }
  if(!(document.getElementById("phone").value.match(phoneno))
     
        {
        alert("Please enter valid contact number.");
        document.getElementById("phone").focus();
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
