<?php 
include '../functions/admin-logic.php';
include '../html/head.html';
$type = $_GET['type'];

?>

<div class="container-fluid">
    <?php include 'admin-navbar.php'; ?>
</div>

<div class="container my-5 p-5">
    <ul class="list-group">
        <?php if( !empty(show_data_multiple('events','type',$type)) ): ?>
            <ul class="list-group">
                <?php foreach(show_data_multiple('events','type',$type) as $row): ?>
                    <li class="list-group-item">
                       <a href="finalize-event.php?id=<?php echo $row['id'] ?>" class="text-decoration-none"> <?php echo $row['name'] ?>
                        <button class="btn btn-danger float-end">Cancel</button>
                    </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
           <div class="bg-light w-50 mx-auto p-5 text-center">
               <h2>No Events here yet</h2>
               <p class="text-muted">Create an <a href="create-event.php" class="text-decoration-none">event</a></p>
           </div>
        <?php endif; ?>
    </ul>    

</div>



<?php
include '../html/foot.html';
?>