<?php
include('config.inc.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valentine</title>

</head>
<style>
    @font-face {
        font-family: poppins;
        src: url(fonts/Poppins/Poppins-SemiBoldItalic.ttf);
    }

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .cover {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        width: 100%;
        background: #1d212d;
        color: #fff;


    }

    .card-login {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .header-txt {
        font-family: 'poppins', sans-serif;
        margin-bottom: 15px;
        font-size: 30px;
        text-align: center;
    }

    .header-txt b {
        font-size: 70px;
        text-shadow: 0 0 45px rgb(233, 105, 126);
    }

    .input-box {
        font-family: 'poppins', sans-serif;
        margin-bottom: 25px;
        width: 400px;
        position: relative;
    }

    .input-box input {

        height: 40px;
        width: 100%;
        padding: 10px;
        border: none;
        border: 1px solid rgb(222, 148, 160);
        outline: none;
        background: none;
        border-radius: 5px;
        color: rgb(233, 105, 126);
        font-family: 'poppins', sans-serif;

    }

    .input-box span {
        color: rgb(222, 148, 160);
        position: absolute;
        left: 0;
        font-size: 13px;
        padding: 10px;
        font-family: 'poppins', sans-serif;
        transition: 0.3s;
        pointer-events: none;
        text-transform: uppercase;
    }

    .input-box input:valid~span,
    .input-box input:focus~span {
        color: rgb(233, 105, 126);
        transform: translateX(8px) translateY(-9px);
        background: #1d212d;
        border-left: 1px solid rgb(233, 105, 126);
        border-right: 1px solid rgb(233, 105, 126);
        transition: 0.3s;
        padding: 0 10px;
        font-size: 10px;
    }

    .btn {
        width: 400px;
        position: relative;
    }

    .btn button {
        width: 100%;
        height: 40px;
        border: none;
        border-radius: 5px;
        font-size: 20px;
        font-family: 'poppins', sans-serif;
        font-weight: bold;
        background-color: rgb(233, 105, 126);
        cursor: pointer;
        color: #fff;
        transition: 0.3s;
    }

    .btn button:hover {
        border: 1px solid rgb(233, 105, 126);
        background: none;
        transition: 0.3s;
        color: rgb(233, 105, 126);
    }
</style>

<body>
    <div class="cover">
        <div class="card-login">
            <div class="header-txt">
                <h1>Valentine Log <b style="color: rgb(233, 105, 126);">LOVE </b></h1>
            </div>
            <form action="login-con.php" method="post" enctype="multipart/form-data">

                <div class="input-box">
                    <input type="text" name="love_username" required="required">
                    <span>username</span>
                </div>
                <div class="input-box">
                    <input type="password" name="love_password" id="swpass" required="required">
                    <span>password</span>
                </div>
                <!-- <input type="checkbox" onclick="showpass()"> -->
                <div class="btn">
                    <input type="hidden" name="LL_login" value="form1">
                    <button type="submit">Log-love</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<script src="script.js"></script>