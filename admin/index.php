<?php
    session_start();
    include('../db/db.php');
    include('../db/link.php');
    include('../db/component.php');
    include('../db/get_zone.php');

    if(!isset($_SESSION['users'])){
        echo "
            <script>
                alert('กรุณาเข้าสู่ระบบก่อน');
                window.location = '../index.php';
            </script>
        ";
    }else{
        $user_session = $_SESSION['users']['name_last'];
        date_default_timezone_set("Asia/Bangkok");
        $datenow = time();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/index.admin.css">
    <title>HOME PAGER</title>
</head>
<body>
<div class="container-fluid mt-1">

<!-- ****************code running php********************** -->
<?php
    navbarAdmin($user_session);
?> 
<!-- *************************************** -->
  <div class="row">
    <div class="tab">
        <button class="tablinks" onclick="openZone(event, 'ZoneA')" id="defaultOpen">ZONE A</button>
        <button class="tablinks" onclick="openZone(event, 'ZoneB')">ZONE B</button>
        <button class="tablinks" onclick="openZone(event, 'ZoneC')">ZONE C</button>
        <button class="tablinks" onclick="openZone(event, 'ZoneD')">ZONE D</button>
        <button class="tablinks" onclick="openZone(event, 'ZoneE')">ZONE E</button>
        <button class="tablinks" onclick="openZone(event, 'ZoneF')">ZONE F</button>
    </div>
    <div class="tabcontent" id="ZoneA">
        <h3 class="logo">ZONE A</h3>
        <div class="row">
<?php
    while($row = mysqli_fetch_assoc($zone_a)){
        if($row['id_lock'] != $row['lock_id']){
            contentZone($row['loc_k'],$row['size'],$row['price']);
        }else if($row['status_ar'] == (int)0){
            contentZoneFuck($row['loc_k'],$row['size'],$row['price']); 
        }else{
            contentZoneFalse($row['loc_k'],$row['size'],$row['price']);   
        }
    }
?>
        </div>
    </div>
    
    <div class="tabcontent" id="ZoneB">
        <h3 class="logo">ZONE B</h3>
        <div class="row">
<?php
    while($rowB = mysqli_fetch_assoc($zone_b)){
        if($rowB['id_lock'] != $rowB['lock_id']){
            contentZone($rowB['loc_k'],$rowB['size'],$rowB['price']);
        }else if($rowB['status_ar'] == (int)0){
            contentZoneFuck($rowB['loc_k'],$rowB['size'],$rowB['price']); 
        }else{
            contentZoneFalse($rowB['loc_k'],$rowB['size'],$rowB['price']);   
        }
    }
?>
        </div>
    </div>
    <div class="tabcontent" id="ZoneC">
        <h3 class="logo">ZONE C</h3>
        <div class="row">
<?php
    while($rowC = mysqli_fetch_assoc($zone_c)){
        if($rowC['id_lock']!= $rowC['lock_id']){
            contentZone($rowC['loc_k'],$rowC['size'],$rowC['price']);
        }else if($rowC['status_ar']== (int)0){
            contentZoneFuck($rowC['loc_k'],$rowC['size'],$rowC['price']);
        }else{
            contentZoneFalse($rowC['loc_k'],$rowC['size'],$rowC['price']);
        }
        
    }
?>
        </div>
    </div>
    <div class="tabcontent" id="ZoneD">
        <h3 class="logo">ZONE D</h3>
        <div class="row">
<?php
    while($rowD = mysqli_fetch_assoc($zone_d)){
        if($rowD['id_lock'] != $rowD['lock_id']){
            contentZone($rowD['loc_k'],$rowD['size'],$rowD['price']);
        }else if($rowD['status_ar'] == (int)0){
            contentZoneFuck($rowD['loc_k'],$rowD['size'],$rowD['price']);
        }else {
            contentZoneFalse($rowD['loc_k'],$rowD['size'],$rowD['price']);   
        }
    }
?>
        </div>
    </div>
    <div class="tabcontent" id="ZoneE">
        <h3 class="logo">ZONE E</h3>
        <div class="row">
<?php
    while($rowE = mysqli_fetch_assoc($zone_e)){
        if($rowE['id_lock'] != $rowE['lock_id']){
            contentZone($rowE['loc_k'],$rowE['size'],$rowE['price']);
        }else if($rowE['status_ar'] == (int)0){
            contentZoneFuck($rowE['loc_k'],$rowE['size'],$rowE['price']);
        }else{
            contentZoneFalse($rowE['loc_k'],$rowE['size'],$rowE['price']);   
        }
    }
?>
        </div>
    </div>
    <div class="tabcontent" id="ZoneF">
        <h3 class="logo">ZONE F</h3>
        <div class="row">
<?php
    while($rowF = mysqli_fetch_assoc($zone_f)){
        if($rowF['id_lock'] != $rowF['lock_id']){
            contentZone($rowF['loc_k'],$rowF['size'],$rowF['price']);
        }else if($rowF['status_ar'] == (int)0){
            contentZoneFuck($rowF['loc_k'],$rowF['size'],$rowF['price']);
        }else{
            contentZoneFalse($rowF['loc_k'],$rowF['size'],$rowF['price']);   
        }
    }
?>
        </div>
    </div>
  </div>
</div>
<script src="../src/js/index.admin.js"></script>
</body>
</html>
<?php
    }
?>