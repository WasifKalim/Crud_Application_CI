
<?php
$userData = $this->session->get_userdata('user');
 ?>
 <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>DTech | DataTables</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/responsive/1.0.4/css/dataTables.responsive.css'>
<link rel="stylesheet" href="<?php echo base_url('assets/');?>css/style1.css"> 

</head>
<body>
<header>
<div style="float:right; margin: 10px 35px 20px ;" class ="float-right" >
  <a href="<?php  echo base_url('account/logout'); ?>"><button style="padding: 3px 78px 3px 86px; background-color: whitesmoke;">LOGOUT</button></a>
</div>
<div style="float:right; margin: 10px 35px 20px ;" class ="float-right">
  <a href="<?php  echo base_url('account/register'); ?>"><button style="padding: 3px 78px 3px 86px; background-color: whitesmoke;" > Add</button></a>
</div>

<div class="container">
  <div class="row"> 
    <div class="col-xs-12">
      <table summary="This table shows how to create responsive tables using Datatables' extended functionality" class="table table-bordered table-hover dt-responsive">
        <thead>
          <tr>
            <th>id</th>
            <th>Full_Name</th>
            <th>Email_Id</th>
            <th>Phone_Number</th>
            <th>Action</th>
            <th>Action</th>
          </tr>
        </thead>
		    <tbody>
            <?php
            foreach($users as $user):// data is in user
            ?>
          <tr>
            <td><?php echo  $user->id // $user['id']; ?></td>
            <td><?php echo $user->Full_Name // $user['Full_Name']; ?></td>
            <td><?php echo $user->Email_Id // $user['Email_Id']; ?></td>
            <td><?php echo $user->Phone_Number // $user['Phone_Number']; ?></td>

            <td><a href="<?php echo base_url('account/edit/'.$user->id) ?>" class="btn btn-success btn-sm" >Edit</a>
            <td><a href="<?php echo base_url('account/delete/'.$user->id)  ?>" class="btn btn-danger btn-sm" >Delete</a>
          </tr>
			    <?php endforeach; ?>
		    </tbody>
        
        <!-- <tfoot>
          <tr>/
            <td colspan="5" class="text-center">Data retrieved from <a href="" target="_blank">infoplease</a> and <a href="#" target="_blank">worldometers</a>.</td>
          </tr>
        </tfoot> -->
      </table>
    </div>
  </div>
</div>