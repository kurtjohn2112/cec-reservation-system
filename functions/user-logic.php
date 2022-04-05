<?php 
include 'connection-db.php';

function send_message($name,$email,$phone, $message){

    
    $conn = connect();
    $message = $conn->real_escape_string($message);
    $sql = "INSERT INTO messages(name,email,number,message)VALUES('$name','$email','$phone', '$message')";
    $result = $conn->query($sql);

    if($result){
        header('location: messages/success-message.html');
    }else{
        die("ERROR: ". $conn->error);
    }
}



?>