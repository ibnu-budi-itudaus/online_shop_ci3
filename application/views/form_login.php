
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="row">
                            <div class="col-lg-12">
                                <img height="300rm" class="d-block w-100" src="<?php echo base_url('assets/img/logo_toko.png') ?>" alt="logo open store">
                            </div>
                         </div>

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                         
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Form Login</h1>
                                    </div>
                                    <?php echo $this->session->flashdata('pesan') ?>
                                    <form method="post" action="<?php echo base_url('auth/login') ?>" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" name="username"
                                                placeholder="Masukkan Username Anda...">
                                                <?php echo form_error('username', '<div class="text-danger small ml-2">','</div'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" name="password" placeholder="Masukkan Password Anda...">
                                                 <?php echo form_error('password', '<div class="text-danger small ml-2">','</div'); ?>
                                        </div>
                                        
                                       <button type="submit" class="btn btn-primary btn-user form-control-user btn-block">Login</button>
                                        
                                    </form>
                                    <hr>
                                    
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('registrasi/index') ?>">Belum punya akun? Daftar!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

   
</body>

