<?php
session_start();
include('../config.inc.php');
$sql = "SELECT * FROM login_love WHERE love_id = '".$_SESSION['love_id']."'";
$result = $con->query($sql);
$rows = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome <?php echo $rows['love_user']?></h1>
</body>

</html>