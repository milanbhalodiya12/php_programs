<?php

$target = "milan/";
$a= $_FILES['file_uplode'];
$targetfile= $target.basename($_FILES['file_uplode']['name']);
$move= move_uploaded_file($_FILES['file_uplode']['tmp_name'], $targetfile);

?>