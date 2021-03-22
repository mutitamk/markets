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
        $userID=$_SESSION['users']['user_id'];
        $user_session = $_SESSION['users']['name_last'];
        $sql = "SELECT * FROM system_chanels
        LEFT JOIN zone_chanel ON zone_chanel.lock_id = system_chanels.id_lock
        LEFT JOIN users ON users.user_id = system_chanels.id_user";
        $que = mysqli_query($conn,$sql);
        

        date_default_timezone_set("Asia/Bangkok");
        $Date = date("Y-m-d");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST PAGE</title>
</head>
<body>
    <div class="container-fluid mt-1">
<?php
    navbar($user_session);
?>
        <div class="container">
<?php
       
?> 
        <table class="table table-hover table-striped" style="margin-top:8%">
            <thead class="thead bg-warning">
                <tr>
                    <th>#</th>
                    <th>zone</th>
                    <th>lock</th>
                    <th>size</th>
                    <th>price</th>
                    <th>category</th>
                    <th>startDate</th>
                    <th>endDate</th>
                    <th>status</th>
                    <th>slip</th>
                </tr>
            </thead>
            <tbody>
<?php
        $x=1;  
        while($x <= $row = mysqli_fetch_assoc($que)){
            if($userID == $row['id_user']){
                    
?>
            <tr>
                <td><?php echo $x++; ?></td>
                <td><?php echo $row['zone']; ?></td>
                <td><?php echo $row['loc_k']; ?></td>
                <td><?php echo $row['size']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php 
                if($row['category']=='day'){
                    echo "รายวัน";
                }else{
                    echo "รายเดือน";
                } 
                ?></td>
                <td><?php echo $row['start_date']; ?></td>
                <td><?php echo $row['end_date']; ?></td>
                <td><?php 
                    if($row['status_ar']==(int)0){
                        echo "<div class=\"text-warning font-weight-bold\">ยังไม่อนุมัติ กรุณารอ</div>";
                    }else if($row['status_ar']==(int)1){
                        echo "<div class=\"font-weight-bold text-success\">อนุมัติการเช่าแล้ว</div>";
                    }else if($Date > $row['end_date']){
                        echo "<div class=\"text-danger font-weight-bold \">ล็อคนี้สิ้นสุดการเช่าแล้ว</div>";
                    }
                ?></td>
                
                <td><a class="btn btn-xs btn-primary" href="../myPDF/path1.php?id=<?php echo $row['id']; ?>">ดูสลิป</a></td>
            </tr>
<?php

        }
        
    }
?>
            </tbody>
        </table>

        </div>
    </div>
</body>
</html>

<?php
    }
?>