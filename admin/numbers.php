<?php

include 'connect.php';

$run1 = mysqli_query($conn, "SELECT * FROM `users` WHERE `points` is null");
while($row = mysqli_fetch_assoc($run1)){
    echo $row['pid']."<br>";
}


?>