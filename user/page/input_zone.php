<?php
session_start();
include('../../db/db.php');
$u_id = $_POST['userid'];
$lockid = $_POST['lockid'];
$category = $_POST['category'];
$startdate = $_POST['strdate'];
$enddate = $_POST['enddate'];
$price = $_POST['price'];
    $insert = "INSERT INTO system_chanels(id_user,id_lock,end_date,start_date,category,price,status_ar)
    VALUES('$u_id','$lockid','$enddate','$startdate','$category','$price','0')";
    $que = mysqli_query($conn,$insert);
    if($que){
            echo "
                 <script>
                     alert('ทำการจองเรียบร้อย');
                        window.location = '../index.php';
                 </script>
            ";
        }else{
            echo "
                 <script>
                     alert('เกิดข้อผิดพลาด ไม่ สามารถทำรายการได้');
                        window.location = '../index.php';
                 </script>
            ";
        }
?>