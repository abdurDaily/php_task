<?php
include_once "./backendLayout/header.php";
include "../database/env.php";
$editId  = $_REQUEST['editid'];
$query = "SELECT * FROM foods  WHERE id = $editId";
$res = mysqli_query($conn, $query);
$test = mysqli_fetch_assoc($res);

$test_res = 'SELECT * FROM categories';
$cat_res = mysqli_query($conn, $test_res);
$categories = mysqli_fetch_all($cat_res,1);

// echo "<pre>";
// print_r($categories);
// echo "</pre>";



?>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Food info</div>
                    <div class="card-body">

                        <form enctype="multipart/form-data" action="../controller/updateFood.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="d-block" for="profileInput">
                                        <img style="max-width:100% ;" class="profileImage" src="../uploads/foods/<?= $test['food_image'] ?>" alt="">
                                    </label>
                                    <input accept=".png,.jpg,.jpeg" name="food_img" class="d-none" type="file" id="profileInput">
                                    <span class="text-danger">
                                        <?= $_SESSION['errors']['food_img'] ?? '' ?>
                                    </span>
                                </div>
                                <div class="col-lg-6">
                                    <input name="updateId" hidden type="text" value="<?= $test['id'] ?>">
                                    <input value="<?= $test['title'] ?>" type="text" class="form-control my-3" name="title" placeholder="Food Name">
                                    <textarea value="" name="detail" class="form-control my-3" placeholder="Food Detail"><?= $test['detail'] ?></textarea>
                                    <input value="<?= $test['price'] ?>" type="text" class="form-control my-3" name="price" placeholder="Food Price">
                                    <select name="category" class="form-control my-3">
                                        <option disabled selected>Select an category</option>
                                        <?php
                                        foreach ($categories as $category) {
                                        ?>
                                            <option value="<?= $category['category_title'] ?>"><?= ucwords($category['category_title']) ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>


                                    <button name="store_btn" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include_once "./backendLayout/footer.php";
unset($_SESSION['errors']);
?>

<script>
    let profileInput = document.querySelector("#profileInput")
    let profileImage = document.querySelector('.profileImage')

    function updatePreviewImage(event) {
        let url = URL.createObjectURL(event.target.files[0])
        profileImage.src = url;

    }

    profileInput.addEventListener('change', updatePreviewImage)
</script>