<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="navbar">
                        <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>dashboard" id="alertsDropdown">
                <i class="fas fa-home fa-fw text-primary"></i>
                <span class="ml-2 d-none d-lg-inline text-primary">Beranda</span>
              </a>
                    </li>
                <div class="topbar-divider d-none d-sm-block"></div>
                    <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-list fa-fw text-primary"></i>
                <span class="ml-2 d-none d-lg-inline text-primary">Kategori Barang</span>
                <!-- Counter - Alerts -->
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('kategori/pakaian_pria') ?>">
                  <div class="mr-2">
                      <i class="fa fa-mars text-primary"></i>
                  </div>
                  <div>
                    <span class="font-weight-bold">Fhasion Pria</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('kategori/pakaian_wanita') ?>">
                  <div class="mr-2">
                      <i class="fa fa-venus text-primary"></i>
                  </div>
                  <div>
                    <span class="font-weight-bold">Fhasion wanita</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('kategori/pakaian_anak') ?>">
                  <div class="mr-2">
                      <i class="fa fa-child text-primary"></i>
                  </div>
                  <div>
                    <span class="font-weight-bold">Fhasion Anak</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('kategori/elektronik') ?>">
                  <div class="mr-2">
                      <i class="fas fa-fw fa-tv text-primary"></i>
                  </div>
                  <div>
                    <span class="font-weight-bold">Perangkat Elektronik</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('kategori/peralatan_olahraga') ?>">
                  <div class="mr-2">
                      <i class="fas fa-futbol text-primary"></i>
                  </div>
                  <div>
                    <span class="font-weight-bold">Peralatan Olahraga</span>
                  </div>
                </a>
                
              </div>
            </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php 
                                        $keranjang = '<i class="fas fa-shopping-bag mr-2 d-none d-lg-inline"></i>  Keranjang <span class="badge badge-danger badge-counter">'.$this->cart->total_items().'</span>'
                                     ?>
                                     <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                                </li>
                            </ul>

                             <div class="topbar-divider d-none d-sm-block"></div>


                                    <?php if($this->session->userdata('username')){ ?>

                                        <li class="nav-item dropdown no-arrow float-right">
                                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class=" fas fa-user img-profile rounded-circle mt-3 text-primary"></i>
                                                    <span class="ml-1 d-none d-lg-inline text-primary"><?php echo $this->session->userdata('username') ?></span>
                                                </a>
                                                <!-- Dropdown - User Information -->
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                                    <a class="dropdown-item" href="<?=site_url('auth/Logout')?>">
                                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                    Logout
                                                    </a>
                                                </div>
                                                </li>
                                        
                                    <?php }else{ ?>
                                        <li><?php echo anchor('auth/login', 'Login') ?></li>
                                    <?php } ?>
                                       
                                
                        </div>

                        

                       



                    </ul>

                </nav>
                <!-- End of Topbar -->