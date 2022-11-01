<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php print_r($users);?>   
<body>
    <h1>
        users accounts details.
    </h1>
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email.</td>
            <td>phone no.</td>
        </tr>
        <?php
        foreach($users as $user):
        ?>
        <tr>
            <td><?php echo $user->id    ?>    </td>
            <td><?php echo $user->name  ?>   </td>
            <td><?php echo $user->email ?>  </td>
            <td><?php echo $user->phoneno?></td>
        </tr>   
<?php endforeach; ?>
    </table>
</body>
         
</html>
   <!--     <td> <?php echo $user['id']; ?></td>
            <td> <?php echo $user['name']; ?></td>
            <td> <?php echo $user['email'];?></td>
            <td> <?php echo $user['phone'];?></td> -->