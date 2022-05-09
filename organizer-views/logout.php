<?php 

session_start();

session_destroy();

header('location: ../organizer-login.php');


?>