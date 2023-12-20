<?php

$connect=mysqli_connect("localhost","root","","milan");
$id=$_GET['id'];
$name=$_GET['name'];
$email=$_GET['email'];
$mobile=$_GET['mobile'];

$query="UPDATE `data` SET `Name`='$name',`Email`='$email',`Mobile`='$mobile' WHERE id='$id'";

$execute=mysqli_query($connect, $query);




?>