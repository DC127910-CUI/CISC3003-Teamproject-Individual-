<?php
//connect to the database
    $conn = mysqli_connect("localhost", "root", "", "rentsys");
    if(!$conn){
        die("Failed to connect to the database server");
    }
    //Setting character set
    mysqli_query($conn, "SET NAMES 'utf8'");

