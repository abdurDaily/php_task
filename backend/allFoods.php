<?php

include_once "./backendLayout/header.php";

include '../database/env.php';
$allData = 'SELECT * FROM foods';
$test = mysqli_query($conn, $allData);
$fetchData = mysqli_fetch_all($test,1);

// echo "<pre>";
// print_r($fetchData);
// echo "</pre>";

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Welcome to our dashboard <?= ucwords($_SESSION['auth']['fname']) ?? '' ?></h1>
   
   
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <table class="table table-responsive table-hover table-striped">
                        <tr>
                            <th>#</th>
                            <th>category</th>
                            <th>title</th>
                            <th>detail</th>
                            <th>price</th>
                            <th>food_image</th>
                            <th>action</th>
                        </tr>



                        <?php
                        foreach ($fetchData as $key => $data) { 
                        ?>

                        <tr>
                            <td><?= ++$key ?></td>
                            <td><?= $data['category'] ?></td>
                            <td><?= $data['title'] ?></td>
                            <td><?= $data['detail'] ?></td>
                            <td><?= $data['price'] ?></td>
                            <td>
                                <img style="width: 100px;" src="../uploads/foods/<?= $data['food_image'] ?>" alt="">
                            </td>
                            <td>
                                <a href="./editfoods.php?editid=<?= $data['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>

                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- /.container-fluid -->










<?php

include_once "./backendLayout/footer.php";

?>

