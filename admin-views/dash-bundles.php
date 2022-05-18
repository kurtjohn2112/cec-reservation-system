<?php


include '../html/head.html';
include '../functions/admin-logic.php';
?>

<div class="container-fluid">
    <?php include 'admin-navbar.php'; ?>
</div>
<?php
if (isset($_POST['save_cater'])) {
    $name = $_POST['cater-name'];
    $price = $_POST['cater-price'];
    $description = $_POST['cater-desc'];
    $result =  add_cater($name, $price,$description);

    if ($result == TRUE) {
        echo '<div class="mt-5 container alert alert-warning alert-dismissible fade show" role="alert">
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         <strong>Cater Service Added Successfully</strong> 
       </div>';
    }
}

?>
<div class="container my-5">
    <a href="<?php echo $previous ?>"> <i class="fa fa-arrow-left fa-3x" aria-hidden="true"></i></a>
    <div class="row mt-5">
        <form action="" method="post">
            <div class="col-10">
                <div class="input-group">
                    <input type="text" name="cater-name" placeholder="Catering name" id="" class="form-control">
                    <input type="text" name="cater-price" placeholder="Cater price" id="" class="form-control">
                </div>
                <input type="text" name="cater-desc" placeholder="Cater cuisine descrption" id="" class="form-control mt-3">
                <button type="submit" name="save_cater" class="btn btn-success mt-3"> Save <i class="fas fa-check"></i> </button>

            </div>

        </form>

    </div>
</div>

<div class="container my-5">
    <?php
    $caterings = show('churches');

    if (!empty($cater)) { ?>
        <table class="table table-bordered">
            <thead class="table-dark">
                <td>Name</td>
                <td>Price</td>
                <td>Descriptions</td>
                <td colspan="3">Actions</td>
            </thead>
            <tbody>

                <?php foreach ($caterings as $cater) : ?>
                    <tr>
                        <td><?php echo $cater['name']; ?></td>
                        <td><?php echo $cater['price']; ?></td>
                        <td><?php echo $cater['description']; ?></td>
                        <td class="text-center">
                            <!-- <a href="upload-img.php?id=<?php echo $cater['id'] ?>&label=church"><i class="fas fa-camera text-info"></i></a> -->
                            <a href="edit-church.php?cater_id=<?php echo $cater['id'] ?>"><i class="fas mx-3 fa-edit text-warning"></i></a>
                            <a href="delete.php?cater_id=<?php echo $cater['id'] ?>"><i class="fas fa-trash text-danger"></i></a>

                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

    <?php } ?>

</div>



<?php
include '../html/foot.html';
?>