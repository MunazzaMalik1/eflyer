<?php
// ==connection with database==
include('../connection.php');
// var_dump($connect);
// die();
$id=isset($_POST['id'])?$_POST['id']:null;
$name=isset($_POST['name'])?$_POST['name']:null;
$email=isset($_POST['email'])?$_POST['email']:null;
$password=isset($_POST['password'])?$_POST['password']:null;
$role=isset($_POST['role'])?$_POST['role']:null;
$phone=isset($_POST['phone'])?$_POST['phone']:null;
// var_dump($phone);
// die();
$insert="INSERT INTO user(name,email,phone,password,role)
         VALUES('$name','$email','$phone','$password','$role')";
         $insertRun=mysqli_query($connect,$insert);
        //  var_dump($insertRun);
        //  die();
?>
<?php
include('../../layouts/head.php');
?>

<body class="bg-primary">

    <section class="register">
        <div class="container">
            <div class="row  h-100 d-flex justify-content-center align-items-center">
                <div class="col-md-8 col-lg-8 col-sm-11">
                    <div class="card shadow">
                        <div class="card-header bg-transparent border-0">
                            <h1 class="alert-link display-4 text-center text-info">Eflyer</h1>
                        </div>
                        <div class="card-body pt-0">
                            <form class="row px-2" action="" method="POST">
                                <div class="col-md-12">
                                    <!-- <input type="text" hidden name="id"> -->
                                    <input type="text" name="name" class="form-control my-2 fw-bold  br-0"
                                        placeholder="User Name">
                                </div>
                                <div class="col-md-12 ">
                                    <input type="email" name="email" required class="form-control my-2 fw-bold  br-0"
                                        placeholder="Email">
                                </div>
                                <div class="col-md-12 ">
                                    <input type="number" name="phone" required class="form-control my-2 fw-bold  br-0"
                                        placeholder="Contact Number">
                                </div>
                                <div class="col-md-12 ">
                                    <input type="password" name="password" required
                                        class="form-control my-2  fw-bold  br-0" placeholder="Password">
                                </div>
                                <div class="col-md-12 ">
                                    <input type="password" name="repassword" required
                                        class="form-control my-2 fw-bold  br-0" placeholder="Re Inter Password">
                                </div>
                                <div class="col-12 users">
                                    <select type="text" name="role" required
                                        class="form-control form-select my-2 fw-bold  br-0">
                                        <option value="">Choose type</option>
                                        <option value="user ">Users</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <button href="register.php" type="submit" name="submit"
                                                class="btn btn-primary btn-user mt-2">Register
                                                Now</button>
                                        </div>
                                        <div class="col-auto d-flex justify-content-between align-items-center fw-bold">
                                            <p>Already have an account?</p>
                                            <a href="login.php" class="text-danger nav-link p-0 ps-2">login now</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>