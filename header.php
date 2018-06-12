<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Farm Buddy</title>
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

             

            </div>
          </div>
        </div>
      </div>
      <div class="container">


        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <h1><a href="index.php"><i class="icon-tint"></i> Farm Buddy</a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    
                 
                  <?php  if(!isset($_SESSION['projectadmin']) or ($_SESSION['projectadmin']==""))
                    {?>
                     <li>
                      <a href="user.php">Profile</a>
                    </li>
                    <li>
                      <a href="contact.php">Contact </a>
                    </li>
                      <li >
                      <a href="signup.php">Signup</a>
                    </li>
                  <?php }
                  else
                  {
                    if($s11['utype']==1){?>  
                     <li>
                      <a href="user.php">Profile</a>
                    </li>
                     <li>
                      <a href="trackreq.php">Requests </a>
                    </li>
                       <li class="dropdown">
                      <a href="#">Cart <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="rentcart.php">Rent Cart</a></li>
                        <li><a href="buycart.php">Buy Cart</a></li>
						
                      </ul>
                    </li>
                    
                     <li class="dropdown">
                      <a href="#">Orders <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="rentorders.php">Rental Orders</a></li>
                        <li><a href="orders.php">Buy Orders</a></li>
						
                      </ul>
                    </li>
                   <li>
                      <a href="contact.php">Contact </a>
                    </li>
                       <li >
                      <a href="logout.php">Logout</a>
                    </li>
                  <?php }
                  
                  if($s11['utype']==2){?>
                    <li>
                      <a href="seller.php">Profile</a>
                    </li>
                    <li>
                      <a href="selleraddproduct.php">Add Product</a>
                    </li>
                      <li class="dropdown">
                      <a href="#">Orders <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="rentalorders.php">Rental Orders</a></li>
                        <li><a href="sellersellorders.php">Sell Orders</a></li>
						
                      </ul>
                    </li>
                     <li>
                      <a href="contact.php">Contact </a>
                    </li>
                     <li >
                      <a href="logout.php">Logout</a>
                    </li>
                  <?php }}?>
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
