<?php
include "connect.php";

if(!isset($_SESSION['projectadmin']) and ($_SESSION['projectadmin']==""))
{
    header("location:login.php");
}


$val= $_SESSION['projectadmin'];
$s= "select * from user where `id`= '$val' and `utype`='1'";
$s1= mysqli_query($link,$s) or die("cannot execute queryy".mysqli_error($link));
$s11= mysqli_fetch_array($s1);

if(isset($_REQUEST['submit']))
{
    $city= $_REQUEST['city'];

    $state="select * from mandi where `state`= '$city' LIMIT 1";   
    $state_rs= mysqli_query($link,$state) or die("cannott execute query");
    if(mysqli_num_rows($state_rs)>0)
    {
             $state_row= mysqli_fetch_array($state_rs);
             $sp= $state_row['id'];
             echo $sp;
            header("location:mandirate.php?s=$sp");
    }
    else
    { 
       $msg= "Bad Request";
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
                      <h3>Market Prices<small>Get prices for your city</small></h3> 
                   
                  
                 
                    
                  
                </div>
              </div>
            </article>

            <article>
              <div class="row">

                <div class="span8">
              
                 
                    <?php
if(isset($msg)) echo "<font color='red'>".$msg."</font>";
?>
                  <div class="post-entry">
               
                    <form action="" method="post" onsubmit="return show();">
                         <div class="row">
             
                  
                     <p style="color: black;">Select the city<br /></p>
                   <select name = "city" >
               <option selected="selected">-Select-</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#000000"><i>-Top Metropolitan Cities-</i></font></option>
<option value="Karnataka">Ahmedabad</option> 
<option value="Andhra Pradesh">Bengaluru/Bangalore</option>
<option value="Tamil Nadhu">Chandigarh</option>
<option value="Tamil Nadhu">Chennai</option>
<option value="Karnataka">Delhi</option>
<option value="Tamil Nadhu">Gurgaon</option>
<option value="Andhra Pradesh">Hyderabad/Secunderabad</option>
<option value="Tamil Nadhu">Kolkatta</option>
<option value="Andhra Pradesh">Mumbai</option>
<option value="Gujarat">Noida</option>
<option value="Karnataka">Pune</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Andhra Pradesh-</i></font></option>
<option value="Andhra Pradesh">Anantapur</option>
<option value="Tamil Nadhu">Guntakal</option>
<option value="Karnataka">Guntur</option>
<option value="Tamil Nadhu">Hyderabad/Secunderabad</option>
<option value="Gujarat">kakinada</option>
<option value="Andhra Pradesh">kurnool</option>
<option value="Gujarat">Nellore</option>
<option value="Andhra Pradesh">Nizamabad</option>
<option value="Maharashtra">Rajahmundry</option>
<option value="Tamil Nadhu">Tirupati</option>
<option value="Gujarat">Vijayawada</option>
<option value="Andhra Pradesh">Visakhapatnam</option>
<option value="Gujarat">Warangal</option>
<option value="Tamil Nadhu">Andra Pradesh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Arunachal Pradesh-</i></font></option>
<option value="Gujarat">Itanagar</option>
<option value="Tamil Nadhu">Arunachal Pradesh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Assam-</i></font></option>
<option value="Tamil Nadhu">Guwahati</option>
<option value="Tamil Nadhu">Silchar</option>
<option value="Gujarat">Assam-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Bihar-</i></font></option>
<option value="Gujarat">Bhagalpur</option>
<option value="Karnataka">Patna</option>
<option value="Tamil Nadhu">Bihar-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Chhattisgarh-</i></font></option>
<option value="Gujarat">Bhillai</option>
<option value="Andhra Pradesh">Bilaspur</option>
<option value="Tamil Nadhu">Raipur</option>
<option value="Gujarat">Chhattisgarh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Goa-</i></font></option>
<option value="Maharashtra">Panjim/Panaji</option>
<option value="Tamil Nadhu">Vasco Da Gama</option>
<option value="Gujarat">Goa-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Gujarat-</i></font></option>
<option value="Maharashtra">Ahmedabad</option>
<option value="Tamil Nadhu">Anand</option>
<option value="Gujarat">Ankleshwar</option>
<option value="Karnataka">Bharuch</option>
<option value="Gujarat">Bhavnagar</option>
<option value="Tamil Nadhu">Bhuj</option>
<option value="Gujarat">Gandhinagar</option>
<option value="Tamil Nadhu">Gir</option>
<option value="Gujarat">Jamnagar</option>
<option value="Gujarat">Kandla</option>
<option value="Karnataka">Porbandar</option>
<option value="Gujarat">Rajkot</option>
<option value="Tamil Nadhu">Surat</option>
<option value="Gujarat">Vadodara/Baroda</option>
<option value="Tamil Nadhu">Valsad</option>
<option value="Karnataka">Vapi</option>
<option value="Gujarat">Gujarat-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Haryana-</i></font></option>
<option value="Gujarat">Ambala</option>
<option value="Gujarat">Chandigarh</option>
<option value="Maharashtra">Faridabad</option>
<option value="Gujarat">Gurgaon</option>
<option value="Gujarat">Hisar</option>
<option value="Karnataka">Karnal</option>
<option value="Gujarat">Kurukshetra</option>
<option value="Maharashtra">Panipat</option>
<option value="Tamil Nadhu">Rohtak</option>
<option value="Gujarat">Haryana-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Himachal Pradesh-</i></font></option>
<option value="Tamil Nadhu">Dalhousie</option>
<option value="Gujarat">Dharmasala</option>
<option value="Andhra Pradesh">Kulu/Manali</option>
<option value="Tamil Nadhu">Shimla</option>
<option value="Gujarat">Himachal Pradesh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Jammu and Kashmir-</i></font></option>
<option value="Maharashtra">Jammu</option>
<option value="Tamil Nadhu">Srinagar</option>
<option value="Gujarat">Jammu and Kashmir-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Jharkhand-</i></font></option>
<option value="Tamil Nadhu">Bokaro</option>
<option value="Gujarat">Dhanbad</option>
<option value="Andhra Pradesh">Jamshedpur</option>
<option value="Tamil Nadhu">Ranchi</option>
<option value="Gujarat">Jharkhand-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Karnataka-</i></font></option>
<option value="Tamil Nadhu">Bengaluru/Bangalore</option>
<option value="Gujarat">Belgaum</option>
<option value="Andhra Pradesh">Bellary</option>
<option value="Tamil Nadhu">Bidar</option>
<option value="Gujarat">Dharwad</option>
<option value="Andhra Pradesh">Gulbarga</option>
<option value="Tamil Nadhu">Hubli</option>
<option value="Gujarat">Kolar</option>
<option value="Maharashtra">Mangalore</option>
<option value="Tamil Nadhu">Mysoru/Mysore</option>
<option value="Gujarat">Karnataka-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Kerala-</i></font></option>
<option value="Gujarat">Calicut</option>
<option value="Tamil Nadhu">Cochin</option>
<option value="Gujarat">Ernakulam</option>
<option value="Tamil Nadhu">Kannur</option>
<option value="Andhra Pradesh">Kochi</option>
<option value="Gujarat">Kollam</option>
<option value="Andhra Pradesh">Kottayam</option>
<option value="Tamil Nadhu">Kozhikode</option>
<option value="Gujarat">Palakkad</option>
<option value="Andhra Pradesh">Palghat</option>
<option value="Tamil Nadhu">Thrissur</option>
<option value="Andhra Pradesh">Trivandrum</option>
<option value="Gujarat">Kerela-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Madhya Pradesh-</i></font></option>
<option value="Gujarat">Bhopal</option>
<option value="Andhra Pradesh">Gwalior</option>
<option value="Gujarat">Indore</option>
<option value="Andhra Pradesh">Jabalpur</option>
<option value="Tamil Nadhu">Ujjain</option>
<option value="Gujarat">Madhya Pradesh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Maharashtra-</i></font></option>
<option value="Maharashtra">Ahmednagar</option>
<option value="Tamil Nadhu">Aurangabad</option>
<option value="Gujarat">Jalgaon</option>
<option value="Karnataka">Kolhapur</option>
<option value="Tamil Nadhu">Mumbai</option>
<option value="Gujarat">Mumbai Suburbs</option>
<option value="Karnataka">Nagpur</option>
<option value="Tamil Nadhu">Nasik</option>
<option value="Gujarat">Navi Mumbai</option>
<option value="Karnataka">Pune</option>
<option value="Tamil Nadhu">Solapur</option>
<option value="Gujarat">Maharashtra-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Manipur-</i></font></option>
<option value="Tamil Nadhu">Imphal</option>
<option value="Karnataka">Manipur-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Meghalaya-</i></font></option>
<option value="Tamil Nadhu">Shillong</option>
<option value="Gujarat">Meghalaya-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Mizoram-</i></font></option>
<option value="Gujarat">Aizawal</option>
<option value="Karnataka">Mizoram-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Nagaland-</i></font></option>
<option value="Tamil Nadhu">Dimapur</option>
<option value="Gujarat">Nagaland-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Orissa-</i></font></option>
<option value="Maharashtra">Bhubaneshwar</option>
<option value="Gujarat">Cuttak</option>
<option value="Andhra Pradesh">Paradeep</option>
<option value="Gujarat">Puri</option>
<option value="Maharashtra">Rourkela</option>
<option value="Gujarat">Orissa-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Punjab-</i></font></option>
<option value="Tamil Nadhu">Amritsar</option>
<option value="Karnataka">Bathinda</option>
<option value="Maharashtra">Chandigarh</option>
<option value="Karnataka">Jalandhar</option>
<option value="Karnataka">Ludhiana</option>
<option value="Gujarat">Mohali</option>
<option value="Maharashtra">Pathankot</option>
<option value="Tamil Nadhu">Patiala</option>
<option value="Gujarat">Punjab-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Rajasthan-</i></font></option>
<option value="Gujarat">Ajmer</option>
<option value="Maharashtra">Jaipur</option>
<option value="Karnataka">Jaisalmer</option>
<option value="Gujarat">Jodhpur</option>
<option value="Karnataka">Kota</option>
<option value="Gujarat">Udaipur</option>
<option value="Karnataka">Rajasthan-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Sikkim-</i></font></option>
<option value="Maharashtra">Gangtok</option>
<option value="Karnataka">Sikkim-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Tamil Nadu-</i></font></option>
<option value="Tamil Nadhu">Chennai</option>
<option value="Gujarat">Coimbatore</option>
<option value="Karnataka">Cuddalore</option>
<option value="Gujarat">Erode</option>
<option value="Tamil Nadhu">Hosur</option>
<option value="Gujarat">Madurai</option>
<option value="Tamil Nadhu">Nagerkoil</option>
<option value="Gujarat">Ooty</option>
<option value="Tamil Nadhu">Salem</option>
<option value="Andhra Pradesh">Thanjavur</option>
<option value="Gujarat">Tirunalveli</option>
<option value="Andhra Pradesh">Trichy</option>
<option value="Gujarat">Tuticorin</option>
<option value="Tamil Nadhu">Vellore</option>
<option value="Gujarat">Tamil Nadu-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Tripura-</i></font></option>
<option value="Tamil Nadhu">Agartala</option>
<option value="Gujarat">Tripura-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Union Territories-</i></font></option>
<option value="Tamil Nadhu">Chandigarh</option>
<option value="Gujarat">Dadra & Nagar Haveli-Silvassa</option>
<option value="Andhra Pradesh">Daman & Diu</option>
<option value="Gujarat">Delhi</option>
<option value="Tamil Nadhu">Pondichery</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Uttar Pradesh-</i></font></option>
<option value="Gujarat">Agra</option>
<option value="Tamil Nadhu">Aligarh</option>
<option value="Andhra Pradesh">Allahabad</option>
<option value="Tamil Nadhu">Bareilly</option>
<option value="Gujarat">Faizabad</option>
<option value="Karnataka">Ghaziabad</option>
<option value="Tamil Nadhu">Gorakhpur</option>
<option value="Gujarat">Kanpur</option>
<option value="Karnataka">Lucknow</option>
<option value="Gujarat">Mathura</option>
<option value="Karnataka">Meerut</option>
<option value="Tamil Nadhu">Moradabad</option>
<option value="Gujarat">Noida</option>
<option value="Maharashtra">Varanasi/Banaras</option>
<option value="Tamil Nadhu">Uttar Pradesh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Uttaranchal-</i></font></option>
<option value="Karnataka">Dehradun</option>
<option value="Tamil Nadhu">Roorkee</option>
<option value="Maharashtra">Uttaranchal-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-West Bengal-</i></font></option>
<option value="Tamil Nadhu">Asansol</option>
<option value="Karnataka">Durgapur</option>
<option value="Tamil Nadhu">Haldia</option>
<option value="Gujarat">Kharagpur</option>
<option value="Karnataka">Kolkatta</option>
<option value="Maharashtra">Siliguri</option>
<option value="Karnataka">West Bengal - Other</option>
               
             </select>
                </div>
                <input type="submit" class="btn btn-color" name="submit" value="Get Mandi Quotes" />
                    
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