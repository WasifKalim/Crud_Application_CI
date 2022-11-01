<?php 
// For update
if(isset($_POST['id'])) {
  $id = $_POST['id'];
  $fullname = $_POST['Full_Name'];
  $emailId = $_POST['Email_Id'];
  $phoneNumber = $_POST['Phone_Number'];
  $sql = "UPDATE `test` SET
   `Full_Name`='$fullname',
   `Email_Id`='$emailId',
   `Phone_Number`='$phoneNumber'
  WHERE id = $id";
  if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
    header('Location: datatable'); 
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// For the insertion 
else {
$sql = "INSERT INTO `test`( `Full_Name`, `Email_Id`, `Phone_Number`, `Password`, `Create_at`, `Update_at`) VALUES  ('".$_POST['Full_Name']."','".$_POST['Email_Id']."','".$_POST['Phone_Number']."','".sha1($_POST['Password'])."','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    header('Location: register'); 
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
} 
  $conn->close();
// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//     //header('Location: user_list.php'); // It tell the link where to go next location after submission
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
  
//   $conn->close();

  // echo $id = $_GET['id'];
?>