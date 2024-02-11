<?php

include '../../database/env.php';
$status_id = $_REQUEST['status_id'];



$allStatusData = "SELECT status FROM banners WHERE id= $status_id";
$test = mysqli_query($conn, $allStatusData);
$test_2 = mysqli_fetch_assoc($test);

// echo "<pre>";
// print_r($test_2['status']);
// echo "</pre>";


// exit(); 
if($test_2['status'] == 1){
    $satusQuery = "UPDATE banners SET status = 0";
    mysqli_query($conn, $satusQuery);
}else{


    $satusQuery = "UPDATE banners SET status = 0";
    mysqli_query($conn, $satusQuery);


    $satusQuery = "UPDATE banners SET status = 1 WHERE id = $status_id";
    mysqli_query($conn, $satusQuery);

}

header("Location:../../backend/allBanners.php");
