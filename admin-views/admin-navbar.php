<?php
$previous = "javascript:history.go(-1)";
if (isset($_SERVER['HTTP_REFERER'])) {
  $previous = $_SERVER['HTTP_REFERER'];
}


?>


<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">CEC-RESERV</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">CEC-RESERV</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Pending Reservations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Approved Reservations</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
            <div class="dropdown-menu" aria-labelledby="dropdownId">
              <a class="dropdown-item" href="dash-church.php">Manage Churches</a>
              <a class="dropdown-item" href="dash-hotel.php">Manage Hotels</a>
              <a class="dropdown-item" href="add_user.php">Manage users</a>
              <a class="dropdown-item" href="create-event.php">Create events</a>
              <a class="dropdown-item" href="dash-message.php">Manage Messages <span class="badge bg-danger"><?php //echo count(show('messages')) ?></span></a>
            </div>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
</nav>