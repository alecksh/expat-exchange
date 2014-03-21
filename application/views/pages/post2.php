<div class="content row">
        <section class="main col col-lg-12">
          <div class="row">
           <h3 class="loc-heading">Choose your location</h3>
            <div class="col-lg-10 col-lg-offset-1 picsloc-main">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#line1" data-toggle="tab">Subway Line 1</a></li>
                <li><a href="#line2" data-toggle="tab">Subway Line 2</a></li>
                <li><a href="#districts" data-toggle="tab">Districts</a></li>
                <li><a href="#bases" data-toggle="tab">Military Bases</a></li>
              </ul> <!-- nav-tabs -->
              <div class="tab-content tab-content-style">
                <?php include "application/views/templates/locations.php"; ?>
              </div>  <!-- tab-conten -->
            </div> <!-- picsloc-main -->
          </div>
          <div class="row">
          <h3 class="loc-heading">Choose your pictures</h3>
            <div class="col-lg-10 col-lg-offset-1 pics-upload">
              <div class="form-group">
                <label for="postPic">Upload Pictures</label>
                <input type="file" id="postPic">
                <p class="help-block">You can choose up to four pictures. The first picture will be used as the 
                                      featured picture for your post.</p>
                <img src="<?php echo base_url().'assets/imgs/image1.jpg' ?>" class="img-thumbnail">
                <img src="<?php echo base_url().'assets/imgs/image2.jpg' ?>" class="img-thumbnail">
                <img src="<?php echo base_url().'assets/imgs/image3.jpg' ?>" class="img-thumbnail">
                <img src="<?php echo base_url().'assets/imgs/image4.jpg' ?>" class="img-thumbnail">

              </div>
            </div>
            </div>
        </section> <!-- main -->
      </div> <!-- content -->