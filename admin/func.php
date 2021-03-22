<?php
session_start();
    include('../db/db.php');
    $e_id = $_GET['id'];
    $update = "UPDATE system_chanels SET status_ar='1' WHERE id='$e_id'";
    $query=mysqli_query($conn,$update);
        if($query == TRUE){
            echo "
            <script>
                alert('ทำการอนุมัติ เรียบร้อยแล้ว');
                window.location = 'list.php';
            </script>
        ";
        }else{
            echo "error";
        }
?>