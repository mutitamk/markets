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
        $select = "SELECT * FROM users";
        $query = mysqli_query($conn,$select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Document</title>
</head>
<body>
    <div class="container-fluid mt-1">
<!-- ****************code running php********************** -->
<?php
    navbarAdmin($user_session);
?> 
<!-- ****************************************************** -->
      <div class="container" style="margin-top:5%">
        <div class="jumbotron">
            
            <table class="table table-bordered border-primary table-light">
                <thead class="table bg-warning">
                  <tr>
                    <th><strong class="text-uppercase">number</strong></th>
                    <th><strong class="text-uppercase">name lastname</strong></th>
                    <th><strong class="text-uppercase">username</strong></th>
                    <th><strong class="text-uppercase">phone</strong></th>
                    <th><strong class="text-uppercase">delete</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
<?php
    $x=1;
    while($x <=$row=mysqli_fetch_assoc($query) ){;
        if($row['status']=='user'){
?>
                  <tr>
                    <td><?php echo $x++; ?></td>
                    <td><strong class="text-center"> <?php echo $row['name_last']; ?></strong></td>
                    <td><strong class="text-center"><?php echo $row['username']; ?></strong></td>
                    <td><strong class="text-center"><?php echo $row['phone']; ?></strong></td>
                    <td><a href="delete.user.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> ลบ</a></td>
                  </tr>
<?php
        }
        
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