<?php
    session_start();
    include('./db/db.php');
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$user' && password='$pass'";
    $query = mysqli_query($conn,$sql) or die(mysqli_error());
    $num = mysqli_fetch_assoc($query);
    $_SESSION['status'] = $num['status'];
    if($num['status'] == 'user'){
        $_SESSION['users'] = $num;
        echo "
            <script>
                alert('wellcom to user !');
                window.location = 'user';
            </script>
        ";
    }else if($num['status'] == 'admin'){
        $_SESSION['users'] = $num;
        echo "
            <script>
                alert('wellcom to admin !');
                window.location = 'admin';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('username or password is not success');
                window.location = 'index.php';
            </script>
        ";
    };

?>
