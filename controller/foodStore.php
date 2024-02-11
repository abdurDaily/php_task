<?php
session_start();
include_once "../database/env.php";

$foodImage = $_FILES['food_img'];
$title = $_REQUEST['title'];
$category = $_REQUEST['category'];
$detail = $_REQUEST['detail'];
$price = $_REQUEST['price'];
$extension = pathinfo($foodImage['name'])['extension'] ?? null;

$acceptedTypes = ['jpeg','jpg','png'];
//* ERRORS
$errors = [];

//* IMAGE VALIDATION
// echo "<pre>";
// print_r($foodImage);
// echo "</pre>";


if($foodImage['size'] == 0){
    $errors['food_img'] = "Select an image!";
} else if(!in_array($extension,$acceptedTypes)){
    $errors['food_img'] = "Select an image with an extension of jpg,png,jpeg";
}



//* IF NO ERROR FOUND
if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    header("Location: ../backend/addFood.php");
}


else{

    //* SERVER IMAGE UPLOAD PROCESSING
    $path = "../uploads/foods";

    if(!file_exists($path)){
        mkdir($path);
    }


    //* IMAGE NAME
    $imageName = "menu-" . uniqid() . ".$extension";
    //* UPLOAD
    $upload = move_uploaded_file( $foodImage["tmp_name"], "$path/$imageName");


    if($upload){
        $query = "INSERT INTO foods(category, title, detail, price, food_image) VALUES ('$category','$title','$detail','$price','$imageName')";
        $res = mysqli_query($conn, $query);

        $res && header("Location: ../backend/allFoods.php");

    }


}