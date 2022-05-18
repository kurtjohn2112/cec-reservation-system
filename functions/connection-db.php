<?php 
session_start();
function connect(){
    return $conn = new mysqli('localhost','root','root','cec-reservation');
}



?>