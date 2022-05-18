<?php 

include 'connection-db.php';


# general queries -------------------------------------------------
function show($table_name){
    $conn = connect();
    $sql = "SELECT  * FROM $table_name ORDER BY id DESC";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
       $rows = array();
       while($row  = $result->fetch_assoc()){
           $rows[] = $row;
       }
       return $rows;
    }else{
        return FALSE;
    }

}
function destroy($id,$pk,$table_name){
    $conn = connect();
    $sql = "DELETE FROM $table_name WHERE $pk = '$id'";
    $result = $conn->query($sql);

    if($result == TRUE){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      
    }


}
function show_data($table_name,$pk,$id){
    $conn = connect();
    $sql = "SELECT * FROM $table_name WHERE $pk = '$id'";
    $result = $conn->query($sql);

    if($result == TRUE){
        return $result->fetch_assoc();
      
    }

}

function upload_img($img_name,$img_src_id,$label){
    $conn = connect();
    $sql = "INSERT INTO images(img_name,img_src_id,label)VALUES('$img_name','$img_src_id','$label')";
    $result = $conn->query($sql);

    if($result == TRUE){
      return 1;
      
    }else{
        die('ERROR: '.$conn->error);
    }

}

function show_uploaded_images($id,$label){
    $conn = connect();
    $sql = "SELECT * FROM images WHERE img_src_id = '$id' AND label  = '$label'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $rows = array();
        while($row  = $result->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
     }else{
         return FALSE;
     }
    
    

}

function show_data_multiple($table_name,$pk,$id){
    $conn = connect();
    $sql = "SELECT * FROM $table_name WHERE $pk = '$id'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $rows = array();
        while($row  = $result->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
     }else{
         return FALSE;
     }
}
#---------------------------------------------------------------------------------------
// hotel 
function add_hotel($name,$location){
    $conn = connect();
    $sql = "INSERT INTO hotels(name,location)VALUES('$name','$location')";
    $result = $conn->query($sql);

    if($result == TRUE){
        // header('refresh: 0');
        return TRUE;
    }else{
       // die("ERROR: ".$conn->error);
    }

}
function update_hotel($name,$location,$id){
    $conn = connect();
    $sql = "UPDATE hotels SET name = '$name', location = '$location' WHERE id = '$id'";
    $result = $conn->query($sql);

    if($result == TRUE){
        header('location: dash-hotel.php');
      
    }else{
        die('ERROR: '.$conn->error);
    }
}


// church ------------------------------------------------------------------------------

function add_church($name,$location){
    $conn = connect();
    $sql = "INSERT INTO churches(name,location)VALUES('$name','$location')";
    $result = $conn->query($sql);

    if($result == TRUE){
        // header('refresh: 0');
        return TRUE;
    }

}

function add_cater($name,$price,$descrption){
    $conn = connect();
    $sql = "INSERT INTO cater(name,price,description)VALUES('$name','$price','$descrption')";
    $result = $conn->query($sql);

    if($result == TRUE){
        // header('refresh: 0');
        return TRUE;
    }

}
function update_church($name,$location,$id){
    $conn = connect();
    $sql = "UPDATE churches SET name = '$name', location = '$location' WHERE id = '$id'";
    $result = $conn->query($sql);

    if($result == TRUE){
        header('location: church-dash.php');
      
    }else{
        die('ERROR: '.$conn->error);
    }
}

// user ------------
function register_user($name,$email,$contact,$location,$role,$username,$password){
    $conn = connect();
    $sql = "INSERT INTO users(name,email,contact,location,role,username,password)VALUES('$name','$email','$contact','$location','$role','$username','$password')";
    $result = $conn->query($sql);

    if($result == TRUE){
        // header('refresh: 0');
        return TRUE;
    }else{
       die("ERROR: ".$conn->error);
    }
    

}

function create_event($name,$user_id,$organizer,$type,$date,$unique_id){
    $conn = connect();
    $name = $conn->real_escape_string($name);
    $sql = "INSERT INTO events(name,user_id,organizer,type,event_date,unique_id)VALUES('$name','$user_id','$organizer','$type','$date','$unique_id')";
    $result = $conn->query($sql);

    if($result == TRUE){
        // header('refresh: 0');
        return TRUE;
    }else{
       die("ERROR: ".$conn->error);
    }
    

}

function login($username,$password){
    $conn = connect();
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
    $result = $conn->query($sql);

    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['role'] = $row['role'];

        if($row['role'] == 'O'){
            header('location: organizer-views/dashboard.php');

        }else{
            header('location: admin-views/');

        }
      
    }

}
function book_event($organizer_id,$event_id){
    $conn = connect();
    $sql = "UPDATE events SET organizer = '$organizer_id' WHERE id = '$event_id'";
    $result = $conn->query($sql);

    if($result == TRUE){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Event booked successfully! Check profile to get event details</strong> 
            </div>';
       
        
    }else{
       die("ERROR: ".$conn->error);
    }

}

function update_event_user($location,$bundle,$price,$event_id){
    $conn = connect();
    $sql = "UPDATE events SET location = '$location', bundle = '$bundle', price = '$price' WHERE id = '$event_id' ";
    $result = $conn->query($sql);

    if($result == TRUE){
        header('refresh: 0');
        // return TRUE;
    }else{
       die("ERROR: ".$conn->error);
    }
}



