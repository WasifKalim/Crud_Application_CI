<?php $this->load->view('page/header'); ?>
<div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
        <?php echo form_open("account_login", ['method' => 'post', 'class' => 'col-md-9']); ?>
            <!-- <form action="account_login.php" method="POST" class="col-md-9"> -->
                <div class="AppForm shadow-lg">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <div class="AppFormLeft">

                                <h1>Login</h1>
                                <?php
                                 if(isset($_GET['message'])) { 
                                    echo $_GET['message'];
                                 }
                                 if(isset($_GET['password'])) {
                                    echo "Your one time password  is ".$_GET['password'];
                                 }
                                 ?>
                                <div class="form-group position-relative mb-4">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" id="username" name="email" placeholder="Username">
                                        <i class="fa fa-user-o"></i>
                                </div>
                                <div class="form-group position-relative mb-4">
                                    <input type="password" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" id="password" name="password" placeholder="Password">
                                        <i class="fa fa-key"></i>
                                </div>
                                <div class="row  mt-4 mb-4">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="forgot.php">Forgot Password?</a>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success btn-block shadow border-0 py-2 text-uppercase ">
                                    Login
                                </button>

                                <p class="text-center mt-5">
                                    Don't have an account is?
                                    <a href="<?php echo base_url('register');?>">
                                        <span>
                                            Create your account
                                        </span>
                                    </a>
                                </p>

                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="AppFormRight position-relative d-flex justify-content-center flex-column align-items-center text-center p-5 text-white">
                                <h2 class="position-relative px-4 pb-3 mb-4"><a href="index.html">
                                <img class="logo" src="<?php echo base_url('assets/'); ?>img/logo_light.png"></a></h2>
                                
                            </div>
                        </div>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    <?php $this->load->view('page/footer'); 