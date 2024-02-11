<?php

include '../database/env.php';
$updateId = $_REQUEST['updateId'];
// $img = $_REQUEST['food_img'];
// $title = $_REQUEST['title'];
// $detail = $_REQUEST['detail'];
// $price = $_REQUEST['price'];
// $category = $_REQUEST['category'];

$updateData = "SELECT * FROM foods WHERE id = '$updateId' ";
$result = mysqli_query($conn, $updateData);
$categories = mysqli_fetch_assoc($result);


echo "<pre>";
print_r($categories);
echo "</pre>";


// $updateSql = 'UPDATE foods SET id='[value-1]',category='[value-2]',title='[value-3]',detail='[value-4]',price='[value-5]',food_image='[value-6]',status='[value-7]' WHERE 1';

?>