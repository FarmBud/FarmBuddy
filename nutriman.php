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
    $select="select * from nutrition where crop='".$_REQUEST['crop']."' and soil='".$_REQUEST['soil']."' and season='".$_REQUEST['season']."' and irrigation='".$_REQUEST['irrigation']."'";
 
    $select_rs= mysqli_query($link,$select) or die("cannot execute query");
    if(mysqli_num_rows($select_rs)>0)
    {
             $select_row= mysqli_fetch_array($select_rs);
             $cfcheck= $select_row['id'];
            header("location:nutrimanres.php?cf=$cfcheck");
    }
    else
    { 
       $msg= "Unfortunately, we donot have advice for your selected combination";
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
                      <h3>Nutrition Management <small>Get essential nutrition information for your farm </small></h3> 
                   
                  
                 
                    
                  
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
                <p style="color: black;">Crop<br /></p>
                   <select name = "crop" >
               <option value = "Cotton">Cotton</option>
               <option value = "Potato">Potato</option>
               <option value = "Wheat">Wheat</option>
               <option value = "Paddy">Paddy</option>
             </select>
                
                </div>
                  <p style="color: black;">Season<br /></p>
                   <select name = "season" >
               <option value = "Kharif">Kharif</option>
               <option value = "Rabi">Rabi</option>
               <option value = "Summer">Summer</option>
               
             </select>
                 <p style="color: black;">Soil<br /></p>
                   <select name = "soil" >
               <option value = "Clayey">Clayey</option>
               <option value = "Loamy">Loamy</option>
               <option value = "Sandy">Sandy</option>
               
             </select>
             <p style="color: black;">Irrigation<br /></p>
                   <select name = "irrigation" >
               <option value = "GI">Good Irrigation</option>
               <option value = "R">Rainfed</option>
               <option value = "PI">Protective Irrigation</option>
               
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