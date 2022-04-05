<?php
include '../functions/admin-logic.php';
include '../html/head.html';
$id = $_GET['id'];
$label = $_GET['label'];


if (isset($_POST['upload-img'])) {
    $img_dir = '../img/';
    $img = $_FILES['img']['name'];
    $target_file = $img_dir . basename($img);

    $validate = upload_img($img, $id,$label);

    if ($validate) {
        move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
    }
}
?>

<div class="container-fluid">
    <?php include 'admin-navbar.php'; ?>
</div>

<div class="container my-5 p-5">
<a href="dash-church.php"> <i class="fa fa-arrow-left fa-3x" aria-hidden="true"></i></a>
    <div class="card mt-3 w-50 mx-auto shadow">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">

                <div class="input-group">
                    <input type="file" name="img" id="" class="form-control">
                    <button type="submit" name="upload-img" class="btn btn-success"> <i class="fas fa-upload"></i> </button>
                </div>

            </form>
        </div>
    </div>
</div>
<div class="container my-5">
    <?php $images = show_uploaded_images($id,$label) ;
   
    ?>


    <?php if(!empty($images)){ ?>
        <?php foreach($images as $row): ?>
            <img src="../img/<?php echo $row['img_name'] ?>" class="img-thumbnail"  alt="" style="height: 250px;" >
        <?php endforeach; ?>
    <?php } ?>

</div>



<?php
include '../html/foot.html';
?>