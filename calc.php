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
               <small>Calculation of fertilizers in Kg & Bags if NPK is given</small>   
                <form name = "NPK" class="row">
                <table>
<thead>
                                            <tr>
                                                <th>Recommended Dose</th>
                                                <th>(kg/ha)</th>
                                                <th>Fertilizer</th>
                                                <th>Kg/ha</th>
                                                <th>(50 kg bag)</th>
                                            </tr>
                                        </thead>
                                          <tr>
                                                <td style="text-align:center">N</td>
                                                <td><input type="text" class="form-control" id="nitrogen" value="" /></td>
                                                <td style="text-align:center">Urea</td>
                                                <td><input type="text" class="form-control" id="nhecter" value=""  /></td>
                                                <td><input type="text" class="form-control" id="nhecterB" value="" /></td>
                                            </tr>
                                         <tr>
                                                <td style="text-align:center">P</td>
                                                <td><input type="text" class="form-control"  id="posphorous"  value=""/></td>
                                                <td style="text-align:center">Super Phosphate</td>
                                                <td><input type="text" class="form-control" id="phecter" value="" /></td>
                                                <td><input type="text" class="form-control" id="phecterB" value="" /></td>
                                            </tr>
                                         <tr>
                                                <td style="text-align:center">K</td>
                                                <td><input type="text" class="form-control"  id="potassium"  value=""/></td>
                                                <td style="text-align:center">Muriate of Potash</td>
                                                <td><input type="text" class="form-control" id="khecter" value="" /></td>
                                                <td><input type="text" class="form-control" id="khecterB" value="" /></td>
                                            </tr>

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

var nqty = document.getElementById('nitrogen').value;

var pqty = document.getElementById('posphorous').value;

var kqty = document.getElementById('potassium').value;

var nans = Number(nqty) *  2.17;
var pans = Number(pqty) *  6.25;
var kans = Number(kqty) *  1.67;

var nansB = Number(nqty) *  0.04;
var pansB = Number(pqty) *  0.13;
var kansB = Number(kqty) *  0.03;
 
document.NPK.nhecter.value = nans;   
document.NPK.phecter.value = pans; 
document.NPK.khecter.value = kans; 

document.NPK.nhecterB.value = nansB;   
document.NPK.phecterB.value = pansB; 
document.NPK.khecterB.value = kansB; 

}



</script>