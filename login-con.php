<?php
    //this line is a anounce to connect to database you must have any page
    session_start();
    include('config.inc.php');
    
    //This line is a valuse in index.php you have name
    $username = $_POST['love_username'];
    $password = $_POST['love_password'];

    //This line is a condition to check status if you have
    if((isset($_POST['LL_login'])) && ($_POST['LL_login']== 'form1')){
        $sql = "SELECT * FROM login_love WHERE love_user = '$username' AND love_pass = '$password'";
        $result = $con->query($sql);
        $data = $result->fetch_assoc();
        if(($result->num_rows > 0) && ($data['love_status'] == 'girlfriend')){
            $_SESSION['love_id'] = $data['love_id'];
            $_SESSION['love_user'] = $data['love_user'];
            $_SESSION['love_pass'] = $data['love_pass'];
            session_write_close();
            header('Location: love-story/');
            exit;
        }elseif(($result->num_rows > 0) && ($data['love_status'] == 'not a girlfriend' )){
            $_SESSION['love_id'] = $data['love_id'];
            $_SESSION['love_user'] = $data['love_user'];
            $_SESSION['love_pass'] = $data['love_pass'];
            session_write_close();
            header('Location: nothing/');
            exit;
        }else{
            session_write_close();
            header('Location: who/');
            exit;
        }
    }

?>