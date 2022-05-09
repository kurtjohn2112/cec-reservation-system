<?php 
session_start();
function connect(){
    return $conn = new mysqli('localhost','root','','cec-reservation');
}



?>