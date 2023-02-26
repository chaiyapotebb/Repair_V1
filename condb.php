<?php
    error_reporting(0);
    $con= mysqli_connect("localhost","root","","repair_db") or die("Error: " . mysqli_error($con));
    mysqli_query($con, "SET NAMES 'utf8' ");
    error_reporting( error_reporting() & ~E_NOTICE );
    date_default_timezone_set('Asia/Bangkok');

    // Check connection
    // if ($con->connect_error) {
    // } else {
    //     echo "เชื่อมต่อฐานข้อมูลสําเร็จ";
    // }
?>