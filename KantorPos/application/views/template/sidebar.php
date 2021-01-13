	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Monitoring <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo site_url('Welcome')?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Data:</h6>
            <a class="collapse-item" href="<?php echo site_url('Kecamatan')?>">Koordinat</a>
            <!--<a class="collapse-item" href="cards.html">Cards</a>-->
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-map"></i>
          <span>Peta Wilayah Antaran</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Peta:</h6>
            <a class="collapse-item" href="<?php echo base_url();?>index.php/Map/malang">Malang</a>
            <a class="collapse-item" href="<?php echo base_url();?>index.php/Map/w_wjk">Kprk Wajak</a>
            <a class="collapse-item" href="<?php echo base_url();?>index.php/Map/k_ksmbn">Kprk Kasembon</a>
            <a class="collapse-item" href="<?php echo base_url();?>index.php/Map/b_bntr">Kprk Bantur</a>
            <a class="collapse-item" href="<?php echo base_url();?>index.php/Map/a_ampel">Kprk Ampel Gading</a>
          </div>
        </div>
      </li>

      <!-- menu mapbox 
      <li class="nav-item">
        <a class="nav-link collapse" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expaned="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-map"></i>
          <span>Peta mapbox</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Peta :</h6>
            <a class="collapse-item" href="<?php echo base_url();?>index.php/Map/map_mlg">Wilayah Malang</a>
            <a class="collapse-item" href="<?php echo base_url();?>index.php/Map/w_wajak">Wajak</a>
            <a class="collapse-item" href="<?php echo base_url();?>index.php/Map/k_kasembon">Kasembon</a>
            <a class="collapse-item" href="<?php echo base_url();?>index.php/Map/b_bantur">Bantur</a>
            <a class="collapse-item" href="<?php echo base_url();?>index.php/Map/a_ampelgading">Ampel Gading</a>

            
          </div>
        </div>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading 
      <div class="sidebar-heading">
        Addons
      </div>
-->
      <!-- Nav Item - Pages Collapse Menu -->
      <!--
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>
-->
      <!-- Nav Item - Charts -->
      <!--
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
        </li>
-->
        <!-- Nav Item - Tables -->
  <!--
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
          </li>
-->
          <!-- Divider -->
   <!--
          <hr class="sidebar-divider d-none d-md-block">
-->
          <!-- Sidebar Toggler (Sidebar) -->
   
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

        </ul> 