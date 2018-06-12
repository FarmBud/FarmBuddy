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
    $select="select * from cropfeas where crop='".$_REQUEST['crop']."' and soil='".$_REQUEST['soil']."' and city='".$_REQUEST['city']."'";
 
    $select_rs= mysqli_query($link,$select) or die("cannot execute query");
    if(mysqli_num_rows($select_rs)>0)
    {
             $select_row= mysqli_fetch_array($select_rs);
             $cfcheck= $select_row['id'];
            header("location:cropfeasres.php?cf=$cfcheck");
    }
    else
    { 
       $msg= "Sorry, we dont have data for your entered combination. Please try another combination!";
    }
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
                      <h3>Crop Feasibility <small>Get crop feasibility for your farm </small></h3> 
                   
                  
                 
                    
                  
                </div>
              </div>
            </article>

            <article>
              <div class="row">

                <div class="span8">
              
                 <h2><small style="color: black;">Input</small></h2>
                    <?php
if(isset($msg)) echo "<font color='red'>".$msg."</font>";
?>
                  <div class="post-entry">
               
                    <form action="" method="post" onsubmit="return show();">
                         <div class="row">
                
                <div >
                <p style="color: black;">For which crop do you want to know crop feasibility?<br /></p>
                   <select name = "crop" >
               <option value = "Cotton">Cotton</option>
               <option value = "Groundnut">Groundnut</option>
               <option value = "Maize">Maize</option>
               <option value = "Mustard">Mustard</option>
                <option value = "Paddy">Paddy</option>
                 <option value = "Potato">Potato</option>
                  <option value = "Sugarcane">Sugarcane</option>
                   <option value = "Wheat">Wheat</option>
             </select>
                
                </div>
                  <p style="color: black;">Select the type of soil you have<br /></p>
                   <select name = "soil" >
               <option value = "Clayey">Clayey</option>
               <option value = "Loamy">Loamy</option>
               <option value = "Sandy">Sandy</option>
               
             </select>
                     <p style="color: black;">Select the city<br /></p>
                   <select name = "city" >
               <option value = "Meerut">Meerut</option>
               <option value = "Amritsar">Amritsar</option>
               <option value = "Coorg">Coorg</option>
               
             </select>
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

</html>
<script>
function show()
{
    return true;
}
</script>