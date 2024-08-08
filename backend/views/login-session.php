<?php
session_start();
include('../connection.php');
// var_dump($connect);
// die();
// if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=isset($_POST['email'])?$_POST['email']:null;
    $password=isset($_POST['passwotd'])?$_POST['passwotd']:null;
    $select="SELECT * FROM user WHERE email='$email'AND password='$password'";
    $selectRun=mysqli_query($connect,$select);
    // var_dump($selectRun);
    // die();
    if($selectRun->num_rows>0){
        $data=$selectRun->fetch_assoc();
        $_SESSION['login_check']=true;
        $_SESSION['admin_name']=$data['name'];
        $_SESSION['user']=$email;
        header('Location: ../../index.php');
    }
// }

?>