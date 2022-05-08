<?php 
include '../functions/admin-logic.php';
include '../html/head.html';
$id = $_GET['id'];
$details = show_data_multiple('events','id',$id);

?>

<div class="container-fluid">
    <?php include 'admin-navbar.php'; ?>
</div>

<div class="container my-5 p-5">
    
</div>



<?php
include '../html/foot.html';
?>