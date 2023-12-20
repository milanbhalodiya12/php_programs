<?php

$connect=mysqli_connect("localhost","root","","milan");
/* print_r($connect); */

$query="SELECT * FROM `detail`";

$execute=mysqli_query($connect,$query);

$query_number=mysqli_num_rows($execute);

/* print_r($query_number); */
echo "<form action=practice_delete.php method=REQUEST>";

echo "<center><table border=2>
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>Username</td>
    <td>Email</td>
    <td>Mobile</td>
    <td>Delete</td>
</tr>";

for($i=1; $i<=$query_number; $i++)
{
    $fetch_data=mysqli_fetch_row($execute);
    echo "<tr><td>$fetch_data[0]</td><td>$fetch_data[1]</td><td>$fetch_data[5]</td><td>$fetch_data[3]</td><td>$fetch_data[4]</td><td><input type='checkbox' name='delete[]' value=$fetch_data[0]</tr>";

}

echo "</table>";
echo "<input type='submit' name='submit'> ";
echo "</form>";





?>