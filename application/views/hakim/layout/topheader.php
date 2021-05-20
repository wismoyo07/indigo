<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url(); ?>assets/images/jaksa.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$this->session->userdata('display_name');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url(); ?>assets/images/jaksa.png" class="img-circle" alt="User Image">

                <p>
                  <?=$this->session->userdata('display_name');?> - <?=$this->session->userdata('level');?>
                  <small>Tanggal : <?php echo date('d-M-Y'); ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-success btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                  <a style="width:260px" href="<?php echo site_url('logout'); ?>" class="btn btn-success btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>