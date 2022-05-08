<?php
include '../functions/admin-logic.php';
include '../html/head.html';

?>

<div class="container-fluid">
    <?php include 'admin-navbar.php'; ?>
</div>

<div class="container my-5 p-5">
    <div class="row justify-content-center text-light">
        <div class="col p-5 text-center bg-info mx-1">
            <a href="finalize.php?type=baptism" class="text-decoration-none text-light">Baptisms</a>
        </div>
        <div class="col  p-5 text-center bg-danger mx-1">
            <a href="finalize.php?type=birthday" class="text-decoration-none text-light">Birthdays</a>
        </div>
    </div>
    <div class="row mt-3 justify-content-center text-light">
        <div class="col w-25 p-5 text-center bg-primary mx-1 bg-gradient ">
            <a href="finalize.php?type=wedding" class="text-decoration-none text-light">Weddings</a>
        </div>
    </div>
</div>



<?php
include '../html/foot.html';
?>