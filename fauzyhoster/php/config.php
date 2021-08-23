<?php
    $conn = mysqli_connect("localhost", "root", "", "studenthost");

    if(!$conn){
        echo 'Not Connected Database' .mysqli_connect_error();
    }

?>