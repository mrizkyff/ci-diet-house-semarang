<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?php echo base_url() ?>/asset/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Inventory Barang</span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
                <img src="<?php echo base_url() ?>/asset/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url().'administrator' ?>" class="nav-link">
             
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'administrator/produk' ?>" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'administrator/laporan' ?>" class="nav-link">
              <i class="nav-icon fas fa-swatchbook"></i>
              <p>
                Laporan Penjualan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'administrator/user_list' ?>" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                User List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'administrator/log_system' ?>" class="nav-link">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Log System
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'administrator/setting' ?>" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Pengaturan Program
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'administrator/profile' ?>" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('login/logout')?>" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Log-Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>