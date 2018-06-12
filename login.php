<?php
include"connect.php";
$_SESSION['projectadmin']="";
if(isset($_REQUEST['submit']))
{
    $select="select * from user where  (phone='".$_REQUEST['cred']."' OR email='".$_REQUEST['cred']."') and pass='".$_REQUEST['pwd']."' and utype='".$_REQUEST['usr']."'";
 
    $select_rs= mysqli_query($link,$select) or die("cannot execute query");
    if(mysqli_num_rows($select_rs)>0)
    {
        $select_row= mysqli_fetch_array($select_rs);
        $_SESSION['projectadmin']= $select_row['id'];
             $v= $select_row['id'];
             $t=$select_row['utype'];
             if($t==1)
            header("location:user.php?val=$v");
            else
            header("location:seller.php?val=$v");
    }
    else
    {
       $msg= "Entered credentials are wrong ";
    }

}
include"header.php";
?>

    <section id="inner-headline">
      <div class="container">
      
      </div>
    </section>

    <section id="content">
    
      <div class="container">
        <div class="row">
          
         <center><h4 style="margin-left: -12px;">Log In</h4>

                        <?php
if(isset($msg)) echo "<font color='red'>".$msg."</font>";
?>

            <form  onsubmit="return show()" method="post" role="form" >

            

              <div class="row">
                
                <div >
                  <input type="text" name="cred" placeholder="Contact Number/Email" required="required" />
                
                </div>
                
                  <input type="password" name="pwd" placeholder="Password" required="required" />
                </div>
                
                  <p>
                  I am a   &nbsp;&nbsp;<input type="radio"  name="usr" value="1" checked>farmer
                           &nbsp;&nbsp;
                            <input type="radio"  name="usr" value="2" >service provider<br />
                  
                    <button class="btn btn-color margintop20 " name="submit" type="submit">Login</button>
                    <br />
                    Not a Member? <a href="signup.php">SignUp</a>
                  </p>
                </div>
           
            </form>
            </center>
          </div>
         
        </div>
      </div>
    </section>

<?php include"footer.php";?>

</body>
<script>
function show()
{
    return true;
}
</script>
</html>
