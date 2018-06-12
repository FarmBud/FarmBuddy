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
   
    
    $insert= "insert into user(`fname`,`lname`,`email`,`phone`, `pass`, `country`, `state`, `utype`) values ('".mysql_real_escape_string($_REQUEST['fname'])."','".mysql_real_escape_string($_REQUEST['lname'])."','".mysql_real_escape_string($_REQUEST['email'])."', '".mysql_real_escape_string($_REQUEST['phone'])."','".mysql_real_escape_string($_REQUEST['pass'])."','".mysql_real_escape_string($_REQUEST['country'])."','".mysql_real_escape_string($_REQUEST['state'])."','".mysql_real_escape_string($_REQUEST['usr'])."')";
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
?>
<!DOCTYPE html>
<html lang="en">
<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
<head>
  <meta charset="utf-8">
  <title>Remember - Multipurpose bootstrap site template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- Theme skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Remember
    Theme URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
              <ul class="topmenu">
                <li><a href="#">Home</a> &#47;</li>
                <li><a href="#">Terms</a> &#47;</li>
                <li><a href="#">Privacy policy</a></li>
              </ul>
            </div>
            <div class="span6">

              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-circled icon-bglight icon-facebook"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-circled icon-bglight icon-twitter"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-circled icon-linkedin icon-bglight"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-circled icon-pinterest  icon-bglight"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-circled icon-google-plus icon-bglight"></i></a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="container">


        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <h1><a href="index.html"><i class="icon-tint"></i> Remember</a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li><a href="index.html">Home</a></li>
                    <li class="dropdown">
                      <a href="#">Features <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="components.html">Components</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="icon-variations.html">Icon variations</a></li>

                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Pages <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="pricingbox.html">Pricing boxes</a></li>
                        <li><a href="404.html">404</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Portfolio <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                        <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                        <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                        <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Blog <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                        <li><a href="post-left-sidebar.html">Post left sidebar</a></li>
                        <li><a href="post-right-sidebar.html">Post right sidebar</a></li>
                      </ul>
                    </li>
                    <li class="active">
                      <a href="contact.html">Contact </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->

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

    <footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <div class="footer_logo">
                <h3><a href="index.html"><i class="icon-tint"></i> Remember</a></h3>
              </div>
              <address>
							  <strong>Remember company Inc.</strong><br>
  							Somestreet KW 101, Park Village W.01<br>
  							Jakarta 13426 Indonesia
  						</address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
              </p>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="#">Our company</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Press release</a></li>
                <li><a href="#">What we have done</a></li>
                <li><a href="#">Our support forum</a></li>
              </ul>

            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">From flickr</h5>
              <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; Remember Inc. All right reserved</span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Remember
                -->
                Created by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/animate.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>
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
