         <div class="span4">
            <aside class="right-sidebar">
              <div class="widget">
                <h5 class="widgetheading">Portfolio information</h5>
                <ul class="folio-detail">
                  <li><label>Name :</label> <?php echo $s11['fname'];echo " " ;echo $s11['lname'];?></li>
                  <li><label>Contact Number :</label> <?php echo $s11['phone'];?></li>
                  <li><label>Email Id :</label> <?php echo $s11['email'];?> </li>
                  <li><label>Country :</label>  <?php echo $s11['country'];?></li>
                  <li><label>State :</label>  <?php echo $s11['state'];?></li>
                  <li><label>City :</label>  <?php echo $s11['city'];?></li>
                </ul>
                <a href="editsellerprofile.php" class="btn btn-color margintop10"> Edit Information</a>
              </div>
              <div class="widget">
                <li><i class="icon-angle-right"></i> <a href="selleraddproduct.php">Add Product</a></li>
                  <li><i class="icon-angle-right"></i> <a href="seller.php">View All Products</a></li>
                  <li><i class="icon-angle-right"></i> <a href="rentableprod.php">Rentable Products</a></li>
                  <li><i class="icon-angle-right"></i> <a href="rentalorders.php">Rental Orders</a></li>
                  <li><i class="icon-angle-right"></i> <a href="sellersellorders.php">Sell Orders</a></li>
                  <li><i class="icon-angle-right"></i> <a href="execrentalorders.php">Executed Rental Orders</a></li>
                  <li><i class="icon-angle-right"></i> <a href="execsellorders.php">Executed Sell Orders</a></li>                 

              </div>
            </aside>
          </div>