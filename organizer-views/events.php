<?php
include '../functions/admin-logic.php';
include '../html/head.html';






?>

<?php include 'navbar.php';

if (isset($_POST['get_event'])) :



endif;
?>


<div class="container my-5 p-5">

    <h1 class="display-5 text-center">
        ACCEPTED EVENTS!
    </h1>

    <ul class="list-group">
        <?php if(!empty( show_data_multiple('events','organizer',$_SESSION['id']) )): ?>
           <?php foreach(show_data_multiple('events','organizer',$_SESSION['id']) as $row): ?>
                <li class="list-group-item">
                    <a href="event-details.php?id=<?php echo $row['id'] ?>" class="text-decoration-none"><?php echo $row['name'] ?></a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>

</div>



<?php
include '../html/foot.html';
?>