<?php

session_start();
if(isset($_SESSION['username'])){
echo "Welcome".$_SESSION['username'];
echo "Your favourite category is ". $_SESSION['category'];
}
else
{
    echo "Please log in";
}



?>