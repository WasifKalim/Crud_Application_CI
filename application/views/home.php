<?php $userData = $this->session->get_userdata('user');?>
<?php $userData = $userData['user']??[]; ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login 2</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
<!-- <link rel="stylesheet" href="<?php // echo base_url('assets/');?> css/style1.css"> -->
<link rel="stylesheet" href="<?php echo base_url('assets/');?>css/style1.css"> 

</head>
<body style="background-image: url('https://i.ibb.co/tDLqQtj/bg.jpg'); background-size: cover;">
<div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <form class="col-md-9">
                <div class="AppForm">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center align-items-center">
                            <div class=" position-relative d-flex justify-content-center flex-column ,align-items-center text-center p-5 text-white">
                                <h2 class="position-relative px-4 pb-3 mb-4"><img class="logo2" src="<?php echo base_url('assets/');?>img/logo_light.png"></h2>
                                
                                <p class="menu">
                                <?php if(isset($userData['logged_in']) && $userData['logged_in']==1){ ?>
                                    <a href="<?php echo base_url('account/logout');?>">Logout</a> | <a href="<?php echo base_url('account/datatable');?>">Datatable</a> | <a href="<?php echo base_url('account/change');?>">Change Password</a> 
                                <?php } else { ?>
                                    <a href="<?php echo base_url('account/login');?>">Login</a> | <a href="<?php echo base_url('account/register');?>">Register</a> 
                                <?php } ?>    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
</body>

</html>
<!-- <?php echo base_url('assets/');?>img/logo.png"> -->