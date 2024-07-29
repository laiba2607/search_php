<?php
$conn = mysqli_connect("localhost","root","","live_search");

if(!$conn){
    echo "connection failed".mysqli_connect_error();
}

?>