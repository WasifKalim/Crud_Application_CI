<?php $userData = $this->session->get_userdata('user');?>
<?php $userData = $userData['user']??[];
// print_r()
?>
<div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
        <?php echo form_open("changepassword_process", ['method' => 'post', 'class' => 'form-register']); ?>
                <div class="AppForm shadow-lg">
                    <?php echo $this->session->flashdata('message');?>
                    <?php echo $this->session->flashdata('success');?>
                    <?php echo $this->session->flashdata('error');?>
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <div class="AppFormLeft">

                                <h1>Change Password</h1>
                                <div class="form-group position-relative mb-4">
                                    <input type="text" 
                                    class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none"
                                      id="username" 
                                      name="email" 
                                      value="<?php echo isset($userData['email']) ? $userData['email'] : ''; ?>"
                                      readonly
                                      placeholder="Enter email">
                                        <i class="fa fa-user-o"></i>
                                </div>
                                <div class="form-group position-relative mb-4">
                                    <input type="password" 
                                    class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none"
                                    id="current_password" 
                                    name="current_password" 
                                    placeholder="Current Password">
                                        <i class="fa fa-key"></i>
                                </div>
                                <div class="form-group position-relative mb-4">
                                    <input type="password" 
                                    class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none"
                                    id="new_password"
                                    name="new_password" 
                                    placeholder="New Password">
                                        <i class="fa fa-key"></i>
                                </div>
                                <div class="form-group position-relative mb-4">
                                    <input type="password" 
                                    class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none"
                                    id="confirm_password" 
                                    name="confirm_password"
                                    placeholder="Confirm Password">
                                        <i class="fa fa-key"></i>
                                </div>

                                <button class="btn btn-success btn-block shadow border-0 py-2 text-uppercase ">
                                    Change Password
                                </button>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="AppFormRight position-relative d-flex justify-content-center flex-column align-items-center text-center p-5 text-white">
                                <h2 class="position-relative px-4 pb-3 mb-4"><a href="index.html"><img class="logo" src="<?php echo base_url('assets/')?>img/logo_light.png"></a></h2>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
        </div>
    </div>

