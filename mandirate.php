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
$s= $_REQUEST['s'];

    $select="select * from mandi where id='$s'";
    $select_rs= mysqli_query($link,$select) or die("cannot execute query");

     $select_row= mysqli_fetch_array($select_rs);
     
     $c= $select_row['state'];
   
     $result= "select* from mandi where state='$c'";
     $res= mysqli_query($link,$result) or die("cannot execute query");
 

include "header.php";
?>
<!---------------------------------------------->
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
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
 <h3>Market Prices<small>Get prices for your city</small></h3>  
                   
 <table>
  <tr>
    <th>Commodity</th>
    <th>Rate/kg</th>
    
  </tr>
  <?php 
  while($p= mysqli_fetch_array($res))
  {
 
  ?>
  <tr>
    <td><?php echo $p['name'];?></td>
    <td>Rs<?php echo " ";echo $p['price'];?></td>
   
  </tr> 
 
 <?php }?> 
 </table>         
                 
                    
                  
                </div>
              </div>
            </article>

            <article>
              <div class="row">

                <div class="span8">
              
                 
              

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