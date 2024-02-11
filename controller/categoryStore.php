<?php
include_once "../database/env.php";
$category_title = $_REQUEST['category_title'];

//* VALIDATION


//* END OF VALIDATION

//* DATA INSERT

$query = "INSERT INTO categories(category_title) VALUES ('$category_title')";
$res = mysqli_query($conn, $query);

if($res){
    header("Location: ../backend/categories.php");
}