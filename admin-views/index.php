<?php
include '../html/head.html';
include '../functions/admin-logic.php';
?>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 sticky-top">
    <div class="container">
        <a href="#" class="navbar-brand">CEC-RSRV</a>


        <button class="navbar-toggler" type="button" data-bs-target='#navbar-collapse' data-bs-toggle='collapse'>
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="dash-message.php" class="nav-link">Messages <i class="bi bi-chat-left-dots"></i> </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Manage Hotels</a>
                </li>
                <li class="nav-item">
                    <a href="dash-church.php" class="nav-link">Manage Churches</a>
                </li>
            </ul>
        </div>
    </div>


</nav>
<section class="bg-dark text-light pt-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="p-3">
                <h1>Manage Reservations in one</h1>
                <p class="text-light">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro provident impedit reiciendis, voluptas animi alias?
                </p>
            </div>
            <img src="../site-svg/undraw_futuristic_interface_re_0cm6.svg" class="img-fluid w-50" alt="">
        </div>

    </div>
</section>

<section class="pt-5 mb-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-4">
                <div class="card bg-dark p-3 text-light">
                    <div class="h1 mb-3"><i class="bi bi-file-earmark-check"></i></div>
                    <h3 class="card-title mb-3">Approved Reservations</h3>
                    <a href="#" class="btn btn-primary">Check Now</a>
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-secondary p-3 text-light">
                    <div class="h1 mb-3"><i class="bi bi-question-square-fill"></i></div>
                    <h3 class="card-title mb-3">Pending Requests</h3>
                    <a href="#" class="btn btn-dark">Check Now</a>
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-dark p-3 text-light">
                    <div class="h1 mb-3"><i class="bi bi-inbox"></i></div>
                    <h3 class="card-title mb-3">Messages</h3>
                    <a href="#" class="btn btn-primary">Check Now</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pt-5 mb-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <img src="../site-svg/undraw_services_re_hu5n.svg" class="img-fluid" alt="">
            <div class="p-3">
                <h1>Hassle Free Management</h1>
                <p class="text-muted"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quis mollitia corrupti distinctio ullam? Molestiae temporibus libero cupiditate! Modi doloribus asperiores rerum, nisi necessitatibus incidunt quos molestiae odit quaerat odio!</p>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
                        Manage Now
                    </button>
                    <div class="dropdown-menu">
                        <a href="dash-church.php" class="dropdown-item">Manage Churches</a>
                        <a href="dash-hotel.php" class="dropdown-item">Manage Hotels</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include '../html/foot.html';
?>