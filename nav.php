    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-top: 12px;
        margin-right: 12px;
        padding-bottom: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 0px 0 0px;
        text-overflow: ellipsis;
        width: 90%;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
    </style>
    <section id="content">
      <div class="container">
        <div class="row">

          <div class="span4">

            <aside class="left-sidebar">

              <div class="widget">
                <form>
                  <div class="input-append">
                    <div class="pac-card" id="pac-card">
                     <div id="pac-container">
        <input id="pac-input" type="text"
            placeholder="Enter a location">
      </div>
      <div id="map"></div>
       <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>
                    </div>
                  </div>
                </form>
              </div>

              <div class="widget">

                <h5 class="widgetheading">Main Navigation</h5>

                <ul class="cat">
                  
                  <li><i class="icon-angle-right"></i> <a href="#">Mandi Information</a></li>
                  <li><i class="icon-angle-right"></i> <a href="cropmanage.php">Crop Management</a></li>
                  <li><i class="icon-angle-right"></i> <a href="#">Farm Management</a></li>
                  <li><i class="icon-angle-right"></i> <a href="#">Water Management</a></li>
                  <li><i class="icon-angle-right"></i> <a href="services.php">Useful Services</a></li>
                  <li><i class="icon-angle-right"></i> <a href="#">Weather Information</a></li>
                  <li><i class="icon-angle-right"></i> <a href="#">Share Resources</a></li>
                  <li><i class="icon-angle-right"></i> <a href="#">Get Resources</a></li>
                </ul>
              </div>

              
            </aside>
          </div>