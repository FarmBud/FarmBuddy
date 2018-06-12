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


include "header.php";
?>
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
                      <h3>NPK Calculator </h3> 
                   
                  
                 
                    
                  
                </div>
              </div>
            </article>

            <article>
              <div class="row">

                <div class="span8">
             <p><a href="calc.php">NPK to Kg and Bags</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="calc1.php">Kg and NPK</a></p>
               <small>Calculation of fertilizers in NPK if Kg is given</small>   
                <form name = "NPK_2" class="row">
                <table>
<thead>
                          <thead>
                                            <tr>
                                                <th>Fertilizer</th>
                                                <th>(kg/ha)</th>
                                                <th>Recommended Dose</th>
                                                <th>Kg/ha</th>
                                                <th>(50 kg bag)</th>
                                            </tr>
                                        </thead>
                                          <tr>
                                                <td style="text-align:center">Urea</td>
                                                <td><input type="text" class="form-control" id="urea" value="" /></td>
                                                <td style="text-align:center">N</td>
                                                <td><input type="text" class="form-control" id="nitro"  value=""  /></td>
                                                <td><input type="text" class="form-control" id="nB" value="" /></td>
                                            </tr>
                                         <tr>
                                                <td style="text-align:center">Super Phosphate</td>
                                                <td><input type="text" class="form-control"  id="sp"  value=""/></td>
                                                <td style="text-align:center">P</td>
                                                <td><input type="text" class="form-control" id="posp"  value="" /></td>
                                                <td><input type="text" class="form-control" id="pB" value="" /></td>
                                            </tr>
                                         <tr>
                                                <td style="text-align:center">Muriate of Potash</td>
                                                <td><input type="text" class="form-control"  id="potash"  value=""/></td>
                                                <td style="text-align:center">K</td>
                                                <td><input type="text" class="form-control" id="potsm"  value="" /></td>
                                                <td><input type="text" class="form-control" id="kB" value="" /></td>
                                            </tr>
							

                                    </table>

 </table>
 
 </form>      
<button class="btn btn-color margintop20" onclick="calc()">Submit</button>
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
  		
function calc() {

var uq = document.getElementById('urea').value;

var pq = document.getElementById('sp').value;

var kq = document.getElementById('potash').value;

var u_hr = Number(uq) *  0.46;
var p_hr = Number(pq) *  0.16;
var k_hr = Number(kq) *  0.06;

var u_B = Number(uq) *  0.02;
var p_B = Number(pq) *  0.02;
var k_B = Number(kq) *  0.02;
 
document.NPK_2.nitro.value = u_hr;   
document.NPK_2.posp.value = p_hr; 
document.NPK_2.potsm.value = k_hr; 

document.NPK_2.nB.value = u_B;   
document.NPK_2.pB.value = p_B; 
document.NPK_2.kB.value = k_B; 
}



</script>