<?php
include 'functions/admin-logic.php';
$event_id = $_GET['event_id'];
$data =  show_data('events', 'unique_id', $event_id);
$type = $data['type'];

// print_r($data);

if (isset($_POST['submit_detail'])) :
    $arr = explode('/', $_POST['bundle']);
    $price = 5000 + 3000 + $arr[0];
    $location  = $_POST['location'];
    $cater = $arr[1];



    update_event_user($location, $cater, $price, $data['id']);
endif;



?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <section class="mt-5">
        <div class="container">
            <h1 class="text-center">
                Event Details
            </h1>
            <p class="text-muted">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi eligendi aliquam explicabo dolores, mollitia libero voluptate! Molestias recusandae aliquid fugit nihil dicta sequi ipsum voluptate culpa repellendus veritatis. Neque esse quod incidunt commodi, facere minima eveniet iure iste quidem repellat inventore earum labore? A nisi deserunt, voluptatum tempore nihil maxime?
            </p>
        </div>
       
        <div class="container mt-5">
        <p>Event Organizer: <?php echo show_data('users','id',$data['organizer'])['name'] ?></p>
        <hr>
            <form action="" method="post">
                <?php
                if ($data['location'] === null) : ?>
                    <div class="mb-3">
                        <select name="location" id="" class="form-select">
                            <?php if ($type == "wedding") : ?>
                                <?php foreach (show('churches') as $row) : ?>
                                    <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                                <?php endforeach; ?>
                            <?php elseif ($type == "birthday") : ?>
                                <?php foreach (show('hotels') as $row) : ?>
                                    <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                                <?php endforeach; ?>
                            <?php elseif ($type == "baptism") : ?>
                                <?php foreach (show('churches') as $row) : ?>
                                    <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        <div class="form-text small text-danger">Select a location *</div>
                    </div>
                <?php
                else :
                ?>
                    <input type="text" name="" value="<?php echo $data['location'] ?>" id="" class="form-control" disabled>
                    <div class="form-text">Event Location</div>
                <?php
                endif;
                ?>
                <?php if ($data['bundle'] === null) : ?>
                    <select name="bundle" id="" class="form-select">
                        <?php foreach (show('cater') as $row) : ?>
                            <option value="<?php echo $row['price'] ?>/<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                        <?php endforeach; ?>

                    </select>
                    <div class="form-text">Select catering services</div>
                <?php else : ?>
                    <input type="text" name="cater" disabled value="<?php echo $data['bundle'] ?> " id="" class="form-control mt-3">
                    <div class="form-text">Event Catering Service</div>
                <?php endif; ?>

                <!-- Button trigger modal -->
                <?php
                if ($data['bundle'] === null and $data['location'] === null) :
                ?>
                    <button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#modelId">
                        Finalize
                    </button>

                <?php else: ?>
                    <input type="text" name="" id="" value="P <?php echo number_format($data['price'],2) ?>" class="form-control mt-3 mb-3" disabled>
                    <div class="form-text">Event Price</div>
                    <button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#modelId" disabled>
                         Event Finalized
                    </button>
                    <div class="form-text text-danger">
                        For event changes , please contact the organizer and please specify the changes needed. <br> Please take note that changes will reflect in a couple of days and can cause delays on your events. <br> Thank you for your patience
                    </div>
                <?php endif; ?>
                <!-- Modal -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog border-success" role="document">
                        <div class="modal-content border-success border-3">
                            <div class="modal-header bg-success bg-gradient rounded-0">
                                <h5 class="modal-title text-light fw-light">Confirmation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="">Event price is: P5000</p>
                                <p class="">Organizer fee is: P3000</p>
                                <p class="small text-muted">For location and cater prices, please refer <a href="" class="text-decoration-none text-info">here</a>
                                    ,Or for more detailed information. You can contact your organizer
                                </p>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="submit_detail" class="btn btn-success">Submit event details</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </section>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
<script>
    var alertList = document.querySelectorAll('.alert');
    alertList.forEach(function(alert) {
        new bootstrap.Alert(alert)
    })

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

</html>