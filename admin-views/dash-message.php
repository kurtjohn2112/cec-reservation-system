<?php
include '../html/head.html';
include '../functions/admin-logic.php';

?>

<div class="container-fluid">
    <?php include 'admin-navbar.php'; ?>
</div>

<div class="container my-5">
    <?php if (!empty(show('messages'))) : ?>
        <?php foreach (show('messages') as $message) : ?>
            <div class="row justify-content-center mt-3">
                <div class="col-10 border-bottom  text-truncate p-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam ut sunt neque at animi consequuntur in itaque corporis recusandae dignissimos corrupti culpa vel incidunt dolor, eaque nulla rerum minima maiores.

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