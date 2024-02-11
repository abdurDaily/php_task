<?php
include './backendLayout/header.php';

include '../database/env.php';
$fetchData = "SELECT * FROM banners";
$test = mysqli_query($conn, $fetchData);
$testData = mysqli_fetch_all($test, 1);


// echo "<pre>";
// print_r($testData);
// echo "</pre>";
?>


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 card">
                <div class="card-header">
                    <h5>All Banner List</h5>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td>Sn</td>
                            <td>heading</td>
                            <td>image</td>
                            <td>details</td>
                            <td>button_title</td>
                            <td>button_url</td>
                            <td>video_url</td>
                            <td>ststus</td>
                            <td>action</td>
                        </tr>

                        <?php
                        foreach ($testData as $key => $data) {
                        ?>
                            <tr>
                                <td><?= ++$key ?> </td>
                                <td><?= $data['heading'] ?> </td>
                                <td>
                                    <img width="100" src="../controller/banners/uploads/<?= $data['featured_img'] ?> " alt="">
                                </td>
                                <td><?= $data['details'] ?> </td>
                                <td><?= $data['button_title'] ?> </td>
                                <td><?= $data['button_url'] ?> </td>
                                <td><?= $data['video_url'] ?> </td>
                                <td>
                                    <!-- <i class="fa-solid fa-star"></i> -->
                                    <a href="../controller/banners/status.php?status_id=<?= $data['id'] ?>"><i class="<?= $data['status'] == 1 ? 'fa-solid' : 'fa-regular' ?> fa-star"></i></a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
include './backendLayout/footer.php';

?>