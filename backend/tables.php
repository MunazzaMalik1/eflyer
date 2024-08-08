<?php
include_once('db.php');

// var_dump($connect);
// die();
// if($connect){
    $user="CREATE TABLE user(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(191) NOT NULL,
        fname VARCHAR(191) NOT NULL,
        email VARCHAR(191) NOT NULL,
        password VARCHAR(191) NOT NULL,
        phone VARCHAR(191) NOT NULL,
        role VARCHAR(191) NOT NULL
    )";
    $userRun=mysqli_query($connect,$user);
    var_dump("usr table create succesfully".$userRun);
// }


?>