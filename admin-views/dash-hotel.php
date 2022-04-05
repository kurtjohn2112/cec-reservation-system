<?php
include '../html/head.html';
include '../functions/admin-logic.php';
?>

<div class="container-fluid">
    <?php include 'admin-navbar.php'; ?>
</div>
<?php
if (isset($_POST['add_hotel'])) {
    $name = $_POST['hotel-name'];
    $location = $_POST['hotel-location'];
    $result =  add_hotel($name, $location);

    if ($result == TRUE) {
        echo '<div class="mt-5 container alert alert-success alert-dismissible fade show" role="alert">
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         <strong>Hotel Added Successfully</strong> 
       </div>';
    }
}

?>
<div class="container my-5">
    <div class="row">
        <form action="" method="post">
            <div class="col-10">
                <div class="input-group">
                    <input type="text" name="hotel-name" placeholder="Hotel name" id="" class="form-control">
                    <input type="text" name="hotel-location" placeholder="Hotel location" id="" class="form-control">
                    <button type="submit" name="add_hotel" class="btn btn-success"> <i class="fas fa-check"></i> </button>
                </div>
            </div>

        </form>
       
    </div>
</div>

<div class="container my-5">
    <?php
    $hotels = show('hotels');

  

    if (!empty($hotels)) { ?>
       <table class="table table-bordered">
           <thead class="table-info">
               <td>Name</td>
               <td>Location</td>
               <td colspan="3">Actions</td>
           </thead>
           <tbody>
               
               <?php foreach($hotels as $hotel): ?>
                   <tr>
                       <td><?php echo $hotel['name']; ?></td>
                       <td><?php echo $hotel['location']; ?></td>
                       <td class="text-center">
                            <a href="upload-img.php?id=<?php echo $hotel['id'] ?>&label=hotel"><i class="fas fa-camera text-info"></i></a>
                            <a href="edit-hotel.php?id=<?php echo $hotel['id'] ?>"><i class="fas mx-3 fa-edit text-warning"></i></a>
                            <a href="delete.php?hotel_id=<?php echo $hotel['id'] ?>"><i class="fas fa-trash text-danger"></i></a>

                       </td>
                   </tr>
                <?php endforeach; ?>
                
           </tbody>
       </table>

    <?php } ?>

</div>



<?php
include '../html/foot.html';
?>