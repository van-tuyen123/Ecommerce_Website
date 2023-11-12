<?php

$con=mysqli_connect('localhost','root','','mystore');
// if(!$con){
//     echo "connect successful";
// }
if(!$con){
    die(mysqli_error($con));
}
?>



