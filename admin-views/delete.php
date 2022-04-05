<?php 
include '../functions/admin-logic.php';

if(isset($_GET['church_id'])){
    destroy($_GET['church_id'],'id','churches');
}


?>