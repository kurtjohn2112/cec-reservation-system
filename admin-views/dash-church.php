<?php


include '../html/head.html';
include '../functions/admin-logic.php';
?>

<div class="container-fluid">
    <?php include 'admin-navbar.php'; ?>
</div>
<?php
if (isset($_POST['add_church'])) {
    $name = $_POST['church-name'];
    $location = $_POST['church-location'];
    $result =  add_church($name, $location);

    if ($result == TRUE) {
        echo '<div class="mt-5 container alert alert-warning alert-dismissible fade show" role="alert">
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         <strong>Church Added Successfully</strong> 
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
                    <input type="text" name="church-name" placeholder="Church name" id="" class="form-control">
                    <input type="text" name="church-location" placeholder="Church location" id="" class="form-control">
                    <button type="submit" name="add_church" class="btn btn-success"> <i class="fas fa-check"></i> </button>
                </div>
            </div>

        </form>

    </div>
</div>

<div class="container my-5">
    <?php
    $churches = show('churches');

    if (!empty($churches)) { ?>
        <table class="table table-bordered">
            <thead class="table-dark">
                <td>Name</td>
                <td>Location</td>
                <td colspan="3">Actions</td>
            </thead>
            <tbody>

                <?php foreach ($churches as $church) : ?>
                    <tr>
                        <td><?php echo $church['name']; ?></td>
                        <td><?php echo $church['location']; ?></td>
                        <td class="text-center">
                            <a href="upload-img.php?id=<?php echo $church['id'] ?>&label=church"><i class="fas fa-camera text-info"></i></a>
                            <a href="edit-church.php?id=<?php echo $church['id'] ?>"><i class="fas mx-3 fa-edit text-warning"></i></a>
                            <a href="delete.php?church_id=<?php echo $church['id'] ?>"><i class="fas fa-trash text-danger"></i></a>

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