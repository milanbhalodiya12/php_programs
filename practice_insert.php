<?php

$name=$_REQUEST['name'];
$Roll_no=$_REQUEST['rollno'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$address=$_REQUEST['address'];


/* echo $name;
echo $Roll_no;
echo $email;
echo $mobile;
echo $username;
echo $password;
echo $address;
 */

 $connect=mysqli_connect("localhost","root","","milan");
 /* print_r($connect); */

 $query="INSERT INTO `detail`(`name`, `roll_no`, `email`, `mobile`, `username`, `password`, `address`) VALUES ('$name','$Roll_no','$email','$mobile','$username','$password','$address')";

 $execute=mysqli_query($connect,$query);

?>

