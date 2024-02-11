<?php
include_once "../database/env.php";

//* STATUS == 0 CHANGE => 1
//* STATUS == 1 CHANGE => 0


$id = $_REQUEST['id'];
$status = $_REQUEST['status'];

if ($status == false) {
    $query = "UPDATE categories SET status=true WHERE id = '$id'";
} else if ($status == true) {
    $query = "UPDATE categories SET status=false WHERE id = '$id'";
}

$res = mysqli_query($conn, $query);
if($res){
    header("Location: ../backend/categories.php");
}