  
<?php
session_start();
    include('../db/db.php');
    $e_id = $_GET['user_id'];
    $De = mysqli_query($conn,"DELETE FROM users WHERE user_id='$e_id' LIMIT 1");
    if($De){
        echo "
            <script>
                alert('ทำการลบ เรียบร้อยแล้ว');
                window.location = 'user.on.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('error เกิดข้อผิดพลาด');
                window.location = 'user.on.php';
            </script>
        ";
    }
    mysqli_close($conn);

?>