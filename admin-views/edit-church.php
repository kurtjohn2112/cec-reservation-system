<?php 
include '../functions/admin-logic.php';
include '../html/head.html';

$id = $_GET['id'];
$data = show_data('churches','id',$id);
if(isset($_POST['save_edit'])){
    $name = $_POST['church-name'];
    $location = $_POST['church-location'];

    update_church($name,$location,$id);
}
?>

<div class="container-fluid">
    <?php include 'admin-navbar.php'; ?>
</div>

<div class="container my-5 p-5">
    <a href="<?php echo $previous ?>"> <i class="fa fa-arrow-left fa-3x" aria-hidden="true"></i></a>
    <div class="card mt-3 w-50 mx-auto shadow">
        <div class="card-body">
            <form action="" method="post">
                <div class="input-group">
                    <span class="input-group-text"> <i class="fas fa-edit"></i></span>
                    <input type="text" name="church-name" placeholder="Enter Church Name" value="<?php echo $data['name'] ?>" id="" class="form-control">
                   
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text"> <i class="fas fa-location-arrow    "></i></span>
                    <input type="text" name="church-location" placeholder="Enter Church Name" value="<?php echo $data['location'] ?>" id="" class="form-control">
                   
                </div>
                <div class="d-grid mt-3">
                    <button type="submit" name="save_edit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>



<?php
include '../html/foot.html';
?>