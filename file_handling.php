<?php
// ---------------------Raed File---------------------
/* $file = fopen("example.txt","r");
$read = fread($file,filesize("example.txt"));
echo "$read";
*/

// ------------Write in File----------------------
/* 
$file= fopen("example.txt","w");
$content = "Hello World!";
$write = fwrite($file,$content); 
*/


//  --------------------------Appende File-------------------
$file = fopen("example.txt","a");
$add = "My name is Milan Bhalodiya";
$append = fwrite($file,$add);



?>