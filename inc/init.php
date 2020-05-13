<?php
    $db = mysqli_connect('127.0.0.1','root','','shopping');
    if(mysqli_connect_error()){
        echo 'connect fail'.mysqli_connect_error();
        die();
    }

    define('BASEURL','/shopping/'); 
?> 