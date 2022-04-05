<?php 

include 'connection-db.php';


# general queries -------------------------------------------------
function show($table_name){
    $conn = connect();
    $sql = "SELECT  * FROM $table_name";
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
?>