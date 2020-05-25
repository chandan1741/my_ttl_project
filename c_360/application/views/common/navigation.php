
    <!-- Header Navbar: style can be found in header.less -->
    <!-- <nav class="navbar navbar-static-top"> -->
      <!-- Sidebar toggle button-->
    <!--   <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a> -->

      <!-- <div class="navbar-custom-menu"> -->
        <?php //if($this->session->userdata('user_name') !=''){?>
        <!-- <ul class="nav navbar-nav"> -->
          <!-- User Account: style can be found in dropdown.less -->
          <!-- <li class="dropdown user user-menu"> -->
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <?php if($this->session->userdata('user_name') !=''){?>
              <span class="hidden-xs"><?php echo $this->session->userdata('user_name');?></span>
            <?php } ?>
            </a> -->
            <!-- <ul class="dropdown-menu"> -->
              <!-- User image -->
              
              <!-- <li class="user-header">
                <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('user_name');?>
                  
                </p>
              </li> -->
              
              <!-- Menu Footer-->
              <!-- <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url();?>login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li> -->
            <!-- </ul> -->
          <!-- </li> -->
        <!-- </ul> -->
        <?php //} ?>
      <!-- </div> -->
 <!--    </nav>
  </header> -->
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('user_name');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <!-- <li class="treeview active">
          <a href="<?php echo base_url();?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="<?php echo base_url();?>search/index">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="<?php echo base_url();?>customer/index">
            <i class="fa fa-th"></i> <span>Data</span>
          </a>
        </li> -->
        <li>
          <a href="<?php echo base_url();?>login/logout">
            <i class="fa fa-sign-out"></i> <span>Sign out</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
     

