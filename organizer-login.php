<?php
include 'functions/admin-logic.php';
include 'html/head.html';

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];


        login($username,$password);

        

    }


?>

<style>
    body {
        background-color: black;
    }
</style>



<div class="container my-5 p-5">

    <p class="text-danger text-center fs-3">Login</p>

    <div class="card bg-dark border-0 w-50 mx-auto">


        <div class="card-body text-light ">
            <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <input type="text" name="username" placeholder="Username" id="" class="form-control bg-dark border-start-0 border-end-0 border-top-0 shadow-none text-light rounded-0">
                    </div>
                    <div class="col">
                        <input type="text" placeholder="Password" name="password" id="" class="form-control bg-dark border-start-0 border-end-0 border-top-0 shadow-none text-light rounded-0">
                    </div>



                </div>
                <div class="d-grid">
                    <button type="submit" name="login" class="btn btn-secondary mt-3 px-3">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>



<?php
include 'html/foot.html';
?>