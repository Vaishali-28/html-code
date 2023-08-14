<?php
  $FullName=$_POST['FullName'];
  $Username=$_POST['Username'];
  $Email=$_POST['Email'];
  $PhoneNumber=$_POST['PhoneNumber'];
  $Password=$_POST['Password'];
  $ConfirmPassword=$_POST['ConfirmPassword'];
  $Gender=$_POST['Gender'];

  $conn=new mysqli('localhost','root','','dashboard');
  if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
  }
  else{
    $stmt=$conn->prepare("insert into register(FullName,Username,Email,PhoneNumber,Password,ConfirmPassword,Gender)values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssisss",$FullName,$Username,$Email,$PhoneNumber,$Password,$ConfirmPassword,$Gender);
    $stmt->execute();
    echo"registration Successfully...";
    $stmt->close();
    $conn->close();
  }
?>