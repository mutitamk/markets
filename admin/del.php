  
<?php
session_start();
    include('../db/db.php');
    $e_id = $_GET['id'];
    $De = mysqli_query($conn,"DELETE FROM system_chanels WHERE id='$e_id' LIMIT 1");
    if($De){
        echo "
            <script>
                alert('ทำการลบ เรียบร้อยแล้ว');
                window.location = 'list.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('error เกิดข้อผิดพลาด');
                window.location = 'list.php';
            </script>
        ";
    }
    mysqli_close($conn);

?>