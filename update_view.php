<?php

$connect= mysqli_connect("localhost","root","","milan");
//print_r($connect);

$query= "SELECT * FROM data";

$execute = mysqli_query($connect, $query);
//print_r($execute);

//$row= mysqli_num_rows($execute);


$data=mysqli_fetch_array($execute);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="get">

    ID:    <input type="" name="id" value=" <?php  echo $data['0']?>"> <br>
    Name: <input type="text" name="name" value=" <?php  echo $data['1']?>"> <br>
    Email: <input type="text" name="email" value=" <?php  echo $data['2']?>"> <br>
    Mobile: <input type="text" name="mobile" value=" <?php  echo $data['3']?>"><br>
    <input type="submit" value="update" name="update">
    </form>
</body>
</html>