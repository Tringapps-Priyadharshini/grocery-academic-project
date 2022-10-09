<?php
include 'config.php'; 
if(isset($_POST['submit'])){ 
 $sname = $_POST['sname']; 
 $shopname = $_POST['shopname'];
 $email = $_POST['email']; 
 $msg = $_POST['message']; 
 if($conn->connect_error){ 
 die("connection failed : ".$conn->connect_error); 
 } 
 else{ 
 mysqli_query($conn,"insert into 
adminContact(name,shopname,email,message)values('$sname','$shopname','$email','$msg')") or die('query failed'); 
 echo "<script>alert('Message sent Successfully');</script>"; 
 header('location:sellernav.php');
 } 
} 
?>
