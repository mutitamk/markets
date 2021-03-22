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
        $select = "SELECT * FROM system_chanels LEFT JOIN zone_chanel ON zone_chanel.lock_id = system_chanels.id_lock
            LEFT JOIN users ON users.user_id = system_chanels.id_user";
        $query = mysqli_query($conn,$select);

        date_default_timezone_set("Asia/Bangkok");
        $Date = date("Y-m-d");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/list.admin.css">
    <title>LIST PAGE</title>
</head>
<body>
    <div class="container-fluid mt-1">
<!-- ****************code running php********************** -->
<?php
    navbarAdmin($user_session);
?> 
<!-- *************************************** -->
     <div class="" style="margin-top:5%">
        <div class="jumbotron ml-4">
            <table class="table table-bordered">
 
                <thead class="thead bg-warning">
                    <tr>
                        <th>zone</th>
                        <th>lock</th>
                        <th>username</th>
                        <th>phone</th>
                        <th>start date</th>
                        <th>end date</th>
                        <th>category</th>
                        <th>price</th>
                        <th class="text-center">status</th>
                        <th class="text-center">action</th>
                    </tr>
                </thead>
                <tbody>
<?php
    $i=1;
    while($i <= $row = mysqli_fetch_assoc($query)){
?>
                    <tr>
                        <td><?php echo $row['zone']; ?></td>
                        <td><?php echo $row['loc_k']; ?></td>
                        <td><?php echo $row['name_last']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['start_date']; ?></td>
                        <td><?php echo $row['end_date']; ?></td>
                        <td>
<?php 
                            if($row['category'] == "day"){
                                echo "รายวัน";
                            }else{
                                echo "รายเดือน";
                            }    
?>
                        </td>
                        <td><?php echo $row['price']; ?></td>
                        <td class="text-center">
<?php
                            if($row['status_ar'] == (int)0){
                                echo "ยังไม่อนุมัติ";
                            }else if($Date >= $row['end_date']){
                                echo "สิ้นสุดการเช่า";
                            }else if($row['status_ar']== (int)1){
                                echo "กำลังเช่า";
                            }
?>
                        </td>
                        <td class="text-center">
<?php
                            if($row['status_ar'] == (int)0){
?>
                                <a href="func.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">อนุมัติ</a> <a href="../myPDF/path1.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success">สลิป</a>
<?php
                            }else if($Date >= $row['end_date']){
?>
                                <a href="del.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">ลบ</a> <a href="../myPDF/path1.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success">สลิป</a>
<?php
                            }else if($row['status_ar']== (int)1){
?>
                                <a href="del.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">ยกเลิก</a> <a href="../myPDF/path1.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success">สลิป</a>
<?php
                            }
?>                        
                        </td>
                    </tr>
<?php
    }
?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
</body>
</html>

<?php
    }
?>
