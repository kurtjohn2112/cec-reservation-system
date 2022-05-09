<?php
include '../functions/admin-logic.php';
include '../html/head.html';

// print_r($sess);

?>

<?php include 'navbar.php'; ?>

<div class="container my-5 p-5">
    <?php if (!empty(show('events'))) : ?>
        <?php foreach (show('events') as $row) : ?>
            <div class="card w-50 mx-auto mt-3 ">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <p class="font-monospace text-center"><?php echo $row['type'] ?> Event </p>
                        </div>
                        <div class="col">
                            <?php if ($row['organizer'] == $_SESSION['id']) :  ?>
                                <span class="badge bg-success float-end">You have taken this event</span>
                            <?php elseif ($row['organizer'] != 0) :  ?>
                                <span class="badge bg-danger float-end">Event taken</span>
                            <?php else : ?>
                                <span class="badge bg-primary float-end">Available!</span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="font-monospace text-center">
                        Additional Details
                        <hr>
                        Owner: <?php echo show_data('users', 'id', $row['user_id'])['name'] ?>
                    </p>
                </div>
                <div class="card-footer text-end">
                    <a href="view-event.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">View</a>
                </div>
            </div>

        <?php endforeach; ?>
    <?php else : ?>
        <div class="alert alert-dark">No events available yet</div>
    <?php endif; ?>

</div>



<?php
include '../html/foot.html';
?>