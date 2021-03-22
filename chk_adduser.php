<?php
    session_start();
    include('./db/db.php');

    $name = $_POST['names'];
    $last = $_POST['last'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $phone = $_POST['phone'];
    $status = "user";

    $fulluser = join(array($name, ' ' ,$last));

    $chk = mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");
    $num = mysqli_num_rows($chk);
    if($num > (int)0){
        echo "
            <script>
                alert('username นี้ มี อยู่แล้ว');
                window.location = 'addUSer.php';
            </script>
            ";
    }else{
        $insert = mysqli_query($conn,"INSERT INTO users SET
            name_last='$fulluser',username='$username',password='$pass',phone='$phone',status='$status'");
            if($insert){
                echo "
                    <script>
                        alert('สมัคสมาชิก เรียบร้อยแล้ว');
                        window.location = 'index.php';
                    </script>
            ";
            }else{
                echo "
                    <script>
                        alert('เพิ่มข้อมูลล้มเหลว');
                        window.location = 'addUser.php';
                    </script>
                ";
            }
    }
    mysqli_close($conn);

?>