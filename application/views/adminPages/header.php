
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url(); ?>" class="site_title"><span>Mini Things</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
               <?php echo "<img src='" . base_url('/assets/images/admin/') . $image . "'alt='...' class='img-circle profile_img'>"; ?>
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <?php echo "<h2>" . $user . "</h2>"; ?>
              </div>
            </div>
            <!-- /menu profile quick info -->