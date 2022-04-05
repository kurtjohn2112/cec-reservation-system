<?php
include '../html/head.html';
include '../functions/admin-logic.php';

?>

<div class="container-fluid">
    <?php include 'admin-navbar.php'; ?>
</div>

<div class="container my-5">
<a href="index.php"> <i class="fa fa-arrow-left fa-3x" aria-hidden="true"></i></a>
    <?php if (!empty(show('messages'))) : ?>
        <?php foreach (show('messages') as $message) : ?>
            <div class="row justify-content-center mt-3">
                <div class="col-10 border-bottom  text-truncate p-3">
                <a href="check-message.php?msg_id=<?php echo $message['id'] ?>" class="text-decoration-none"> <?php echo $message['message'] ?></a>

                </div>
                <div class="col-2 border-bottom">
                    <a href="" class="btn btn-danger"> <i class="fas fa-trash fa-1x"></i></a>
                    <a href="" class="btn btn-info"> <i class="fas fa-eye"></i> </i></a>

                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>



<?php
include '../html/foot.html';
?>