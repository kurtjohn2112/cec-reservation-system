<?php
include '../functions/admin-logic.php';
include '../html/head.html';

if(isset($_POST['register_user'])){
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $location = $_POST['location'];
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    register_user($fullname,$address,$contact,$location,$role,$username,$password);

}


?>

<div class="container-fluid">
    <?php include 'admin-navbar.php';

    ?>
</div>

<div class="container my-5 p-5">
    <p class="small text-muted">
        <span class="text-danger">Note:</span>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, quia.
    </p>
    <div class="card">
        <div class="card-header">
            <p class="font-monospace">Create a user</p>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <input type="text" name="fullname" id="" class="form-control">
                        <div class="form-text">Enter fullname</div>
                    </div>
                    <div class="col">
                        <input type="text" name="address" id="" class="form-control">
                        <div class="form-text">Enter address</div>
                    </div>
                    <div class="col">
                        <input type="text" name="contact" id="" class="form-control">
                        <div class="form-text">Enter contact information</div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <input type="text" name="location" id="" class="form-control">
                        <div class="form-text">Enter location</div>
                    </div>
                    <div class="col">
                        <select name="role" id="" class="form-select">
                            <option value="U">User</option>
                            <option value="A">Admin</option>
                            <option value="O">Organizer</option>
                        </select>
                        <div class="form-text">Enter role</div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <input type="text" name="username" id="" class="form-control">
                        <div class="form-text">Enter username</div>
                    </div>
                    <div class="col">
                        <input type="text" name="password" id="" class="form-control">
                        <div class="form-text">Enter password</div>
                    </div>
                </div>
                <button type="submit" name="register_user" class="btn btn-success px-3 mt-3">Register user</button>
            </form>

        </div>
    </div>

    <table class="table table-bordered mt-5">
        <thead class="table-dark">
            <td>FULLNAME</td>
            <td>ADDRESS</td>
            <td>CONTACT INFO</td>
            <td>LOCATION</td>
            <td>ROLE</td>
            <td>USERNAME</td>
            <td>ACTION</td>
        </thead>
        <tbody>
            <?php if(!empty(show('users'))): ?>
                <?php foreach(show('users') as $row): ?>
                    <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['contact'] ?></td>
                        <td><?php echo $row['location'] ?></td>
                        <td><?php echo $row['role'] ?></td>
                        <td><?php echo $row['username'] ?></td>
                        <td>
                            <a href="#" class="btn btn-danger"> <i class="fas fa-trash"></i> </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>     
        </tbody>
    </table>


</div>



<?php
include '../html/foot.html';
?>