<?php
include ("connection.php");


$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];


$sql = "insert into signup values('','$f_name', '$l_name', '$email', '$password', '$gender' )";

$data = mysqli_query($conn,$sql);

if ($data) {
    
  
header("location: login.php"); 
} else
 {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>