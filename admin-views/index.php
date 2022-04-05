<?php 
include '../html/head.html';
?>

<div class="container-fluid">
    <?php include 'admin-navbar.php'; ?>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-4 p-5 shadow me-3">
            APPROVED RESERVATIONS <span class="badge bg-success">5</span>
        </div>
        <div class="col-4 p-5 shadow">
            PENDING RESERVATIONS <span class="badge bg-danger">5</span>
        </div>
    </div>
</div>



<?php
include '../html/foot.html';
?>