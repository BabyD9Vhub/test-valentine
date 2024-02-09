<?php
    //keyword to connect database
    $servername = 'localhost';
    $serveruser = 'root';
    $serverpass = '';
    $serverdata = 'Valentine';

    //the connect to database
    $con = new mysqli($servername,$serveruser,$serverpass,$serverdata) or die ("Can't connect to information Yet".$con->connect_errno);
    $con->set_charset('utf8mb4');

    //show text when we can connect to database already we can choose to don't show and show
    // if($con->connect_error){
    // die("Connection Fail : " . $con->connect_error);
    // }else{
    //     echo("Connect Successfully");
    // }

?>