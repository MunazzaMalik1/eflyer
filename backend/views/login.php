<?php
session_start();
include('../connection.php');
// var_dump($connect);
// die();
// $loginFail=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=isset($_POST['email'])?$_POST['email']:null;
    $password=isset($_POST['password'])?$_POST['password']:null;
    $select="SELECT * FROM user WHERE email='$email'AND password='$password'";
    $selectRun=mysqli_query($connect,$select);
    // var_dump($selectRun);
    // die();
    
    if($selectRun->num_rows>0){
        $data=$selectRun->fetch_assoc();
        $_SESSION['login_check']=true;
        $_SESSION['name']=$data['name'];
        
    // var_dump( $_SESSION['name']);
    // die();
        $_SESSION['role']=$email;
        header('Location: ../../index.php');
    }
    else {
        $_SESSION['error']  = 1;
         header('Location:login.php');
        // $erro = true;
      }
}

?>
<?php
include('../../layouts/head.php');
?>

<body class="bg-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row h-100 d-flex justify-content-center align-items-center">

            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card border-0 shadow-lg px-4">
                    <div class="card-header bg-transparent border-0">
                        <h1 class="alert-link display-4 text-center text-info">Eflyer</h1>
                    </div>
                    <div class="card-body p-0">
                        <?php if (!empty($_SESSION['error']) && $_SESSION['error'] == 1) { ?>

                        <strong class="text-danger">Please Enter Valid Email or Password</strong>

                        <?php
                        unset($_SESSION['error']);
                        }
                        ?>
                        <form method="POST" action="login.php">
                            <input type="email" name="email" class="form-control my-4" id="exampleInputEmail"
                                aria-describedby="emailHelp" placeholder="Enter Email Address">
                            <input type="password" name="password" class="form-control" id="exampleInputPassword"
                                placeholder="Password">
                            <div class="custom-control custom-checkbox my-4">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Remember
                                    Me</label>
                            </div>
                            <button class="btn btn-primary btn-user btn-block">
                                Login
                            </button>
                            <div class="w-100 d-flex align-items-center justify-content-between  fw-bold">
                                <!-- <input type="submit" name="submit" value="register now" class="form-btn"> -->
                                <p class="ml-0">Already have an account?</p>
                                <a href="register.php" class="text-danger nav-link p-0 ps-2">Register now</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    $(document).ready(function() {
    $('#repassword').on('keyup', function() {
    var password = $('#password').val();
    var repassword = $(this).val();

    if (password === repassword) {
    $('#message').text('Passwords match').css('color', 'green');
    } else {
    $('#message').text('Passwords do not match').css('color', 'red');
    }
    });

    $('#passwordForm').on('submit', function(e) {
    var password = $('#password').val();
    var repassword = $('#repassword').val();

    if (password !== repassword) {
    e.preventDefault();
    $('#message').text('Passwords do not match. Please try again.').css('color', 'red');
    }
    });
    });
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>