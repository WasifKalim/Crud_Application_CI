<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login 2</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
<link rel="stylesheet" href="<?php echo base_url('assets/');?>css/style1.css"> 
<!--  echo base_url('assets/css/style1.css'); another way to acces css --> 
</head>
<body>
<header>
  <div class="container">
    <div class="col-md-12" style="display: flex; justify-content: space-between; align-items: center;">
      <a href="<?php echo base_url();?>"><img class="logo" src="<?php echo base_url('assets/');?>img/logo.png"></a>
      <h2 style="text-align: right;"><?php echo (isset($_SESSION['name']))?$_SESSION['name']:''; ?> </h2>
    </div>
  </div>
</header>