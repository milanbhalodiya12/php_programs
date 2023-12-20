<?php

$selected_id=$_REQUEST['delete'];

$connect=mysqli_connect("localhost","root","","milan");
/* print_r($connect); */

foreach($selected_id as $myquery)
{
    $query="DELETE FROM `detail` WHERE Id='$myquery'";
    $execute=mysqli_query($connect,$query);
}

header("Location:practice_view.php");   




?>