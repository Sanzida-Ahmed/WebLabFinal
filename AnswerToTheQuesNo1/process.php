﻿<?php
include_once 'database.php';
if(isset($_POST['btn-save']))
{
$name = $_POST['name'];
$age = $_POST['age'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
mysqli_query($conn,"insert into student(Name,Age,user_name,password) values ('$name','$age','$user_name','$password')") or die(mysqli_error());
echo "<p align=center>Data Added Successfully.</p>";
}
?> 