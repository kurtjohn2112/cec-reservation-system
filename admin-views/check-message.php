<?php
include '../html/head.html';
include '../functions/admin-logic.php';
$id = $_GET['msg_id'];
$msg = show_data('messages', 'id', $id);
?>


<div class="container-fluid">
    <?php include 'admin-navbar.php'; ?>
</div>

<div class="container my-5 p-5">
    <a href="<?php echo $previous ?>"> <i class="fa fa-arrow-left fa-3x" aria-hidden="true"></i></a>
    <div class="card mt-3 w-50 mx-auto shadow">
        <div class="card-body p-5">
            <div class="d-flex">
                <p> Sender: <span class="text-muted text-capitalize"><?php echo $msg['name'] ?></span></p>
                <p class="ms-auto"> Phone #: <span class="text-muted"><?php echo $msg['number'] ?></span></p>

            </div>
            <p class="align-items-center mt-5 fst-italic fw-bold text-capitalized">
                <?php echo $msg['message'] ?>
            </p>


        </div>
        <div class="card-footer d-flex">
            <div class="justify-content-start">
                <button class="btn btn-success" title="Create Reservation" data-bs-placement='top' data-bs-toggle='tooltip'> <i class="fas fa-check    "></i></button>
            </div>
            <div class="input-group justify-content-end">

                <button class="btn btn-danger" title="DELETE" data-bs-placement='top' data-bs-toggle='tooltip'> <i class="fas fa-trash    "></i></button>
                <button class="btn btn-warning" title="ARCHIVE" data-bs-placement="bottom" data-bs-toggle="tooltip"> <i class="fas fa-archive     "></i> </button>

            </div>
        </div>
    </div>
</div>

<?php
include '../html/foot.html';

?>