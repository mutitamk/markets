<?php
    session_start();
    include('../db/db.php');
    include('../db/link.php');
    include('../db/component.php');

    if(!isset($_SESSION['users'])){
        echo "
            <script>
                alert('กรุณาเข้าสู่ระบบก่อน');
                window.location = '../index.php';
            </script>
        ";
    }else{
        $user_session = $_SESSION['users']['name_last'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map Document</title>
  
</head>
<body>
    <div class="container-fluid mt-1">
<?php
    navbarAdmin($user_session);
?> 
        <div class="container" style="margin-top:4%;">
            <img src="../src/img/xxx.jpg" class="h-75 p-3 w-90 rounded mx-auto d-block" alt="...">
            <div class="card text-center">
            <div class="card-header bg-warning">
                <p class="text-uppercase">contack</p>
            </div>
            <div class="card-body">
                <h5 class="card-titlee"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;KU Market @ Sriracha 199 ม.6 ต.ทุ่งสุขลา อ.ศรีราชา จ.ชลบุรี  20230</h5>
                <p class="card-text"><strong><i class="fa fa-phone" aria-hidden="true"></i> 0753148890</strong>&nbsp; &nbsp; &nbsp; <i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;KU_Market@domain.com</p>
            </div>
        </div>
        <br><br><br>
    </div>
</body>
</html>

<?php
    }
?>