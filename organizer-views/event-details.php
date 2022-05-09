<?php
include '../functions/admin-logic.php';
include '../html/head.html';

$id = $_GET['id'];
$event = show_data('events', 'id', $id);




?>

<?php include 'navbar.php';

if (isset($_POST['get_event'])) :



endif;
?>


<div class="container my-5 p-5">

    <!-- <div class="border border-1 p-5">
        <p class="font-monospace">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quas natus nostrum magni quisquam tempore. Nisi molestiae qui esse ratione, incidunt accusantium sint consectetur vitae itaque? Illum inventore, repellendus odit aut, ea dicta dolorem cumque deleniti vero velit pariatur veniam eveniet laboriosam asperiores dolores expedita. Ea neque dolore quod tenetur.
        </p>
        <div class="form-check mt-3">
            <input type="checkbox" name="" id="agreement" class="form-check-input" id="">
            <label for="agreement" class="form-check-label">
                I agree Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque illum recusandae aliquid nulla voluptates inventore vero placeat non omnis cupiditate!
            </label>
        </div>
    </div> -->


 
    <div class="border shadow p-5">
        <h1 class="display-6 text-center"><?php echo $event['name'] ?></h1>
        <hr>
        <p class="font-monospace">Event Owneer: Mr/Ms <?php echo show_data('users', 'id', $event['user_id'])['name'] ?> </p>
        <p class="font-monospace">Event ID: <?php echo $event['unique_id'] ?> </p>

        <form action="" class=" mt-5" method="post">
            <input type="hidden" name="event_id" value="<?php echo $id ?>">
            <input type="hidden" name="organizer_id" value="<?php echo $_SESSION['id'] ?>">
            <?php
            if ($event['organizer'] == 0) : ?>
                <button type="submit" name="get_event" class="btn btn-outline-secondary">Take this event?</button>

            <?php elseif ($event['organizer'] == $_SESSION['id']) : ?>
                <button class="btn btn-secondary" disabled>You have taken this event. Check Profile</button>
            <?php else : ?>
                <button type="submit" name="get_event" class="btn btn-outline-secondary" disabled>Event Taken</button>
            <?php endif; ?>

        </form>
    </div>

</div>



<?php
include '../html/foot.html';
?>