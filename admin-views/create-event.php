<?php
include '../functions/admin-logic.php';
include '../html/head.html';



?>



<div class="container-fluid">
    <?php include 'admin-navbar.php';

    if (isset($_POST['create_event'])) :
        $name = $_POST['event_name'];
        $customer_id = $_POST['customer_id'];
        $organizer_id = $_POST['organizer_id'];
        $event_type = $_POST['event_type'];
        $event_date = $_POST['event_date'];
        $u_id = "event-".uniqid();

        create_event($name,$customer_id,$organizer_id,$event_type,$event_date,$u_id);

    endif;




    ?>
</div>

<div class="container my-5 p-5">
    <p class="small text-muted">
        <span class="text-danger">Note:</span>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, quia.
    </p>
    <div class="card">
        <div class="card-header">
            <p class="font-monospace">Create an event</p>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <input type="text" name="event_name" id="" class="form-control">
                        <div class="form-text">Event name</div>
                    </div>
                    <div class="col">
                        <select name="customer_id" id="" class="form-select">
                            <option value="" selected hidden disabled>---</option>
                            <?php foreach (show_data_multiple('users', 'role', 'U') as $row) : ?>
                                <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                            <?php endforeach; ?>
                        </select>

                        <div class="form-text">Event Customer</div>
                    </div>
                    <div class="col">
                        <select name="organizer_id" id="" class="form-select">
                            <option value="" selected hidden disabled>---</option>
                            <option value="0"> Post event to organizers page </option>
                            <?php foreach (show_data_multiple('users', 'role', 'O') as $row) : ?>
                                <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="form-text">Event Organizer</div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <select name="event_type" id="" class="form-select">
                            <option value="" selected hidden disabled>---</option>
                            <option value="baptism">Baptism</option>
                            <option value="birthday">Birthday</option>
                            <option value="wedding">Wedding</option>

                        </select>
                        <div class="form-text">Event Type</div>
                    </div>

                </div>
                <div class="row mt-2">
                    <div class="col">
                        <input type="date" name="event_date" id="" class="form-control">
                        <div class="form-text">Event Date</div>
                    </div>

                </div>
                <button type="submit" name="create_event" class="btn btn-success px-3 mt-3">Create Event</button>
            </form>

        </div>
    </div>




</div>



<?php
include '../html/foot.html';
?>