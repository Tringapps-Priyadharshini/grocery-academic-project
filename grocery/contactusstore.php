<?php
include 'config.php'; 
if(isset($_POST['submit'])){
 $cname = $_POST['cname']; 
 $shopname = $_POST['shopname'];
 $email = $_POST['email']; 
 $msg = $_POST['message']; 
 if($conn->connect_error){ 
 die("connection failed : ".$conn->connect_error); 
 } 
 else{ 
 mysqli_query($conn,"insert into 
contactus(name,shopname,email,message)values('".$cname."','".$shopname."','".$email."','".$msg."')") or die('query failed'); 
 echo "<script>alert('Message sent Successfully');</script>"; 
 header('location:contactus1.php');
 } 
} 
?>
