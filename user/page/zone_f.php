<?php
    session_start();
    include('../../db/db.php');
    include('../../db/link.php');
    include('../../db/component.php');

        date_default_timezone_set("Asia/Bangkok");
        //$datenow =  time();
        //$minute = date("H:i:s", $datenow);

    if(!isset($_SESSION['users'])){
        echo "
            <script>
                alert('pless your login');
                window.location = '../../index.php';
            </script>
        ";
    }else{
        $user_session = $_SESSION['users']['name_last'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/css/page_css/zone_a.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>ZONE F</title>
</head>
<body class="bg-default">
<?php
    navbarPage($user_session);
?>
  <div class="main-content">
    <div class="header bg-gradient-primary pb-8 pt-2">
      <div class="container-fluid">
        <!-- <h2 class="mb-5 text-white" style="margin-top:5%">Stats Card</h2> -->
        <div class="header-body" style="margin-top:5%">
          <div class="row">

<?php
   $Date = date("Y-m-d");
$x=1;
$sql = "SELECT * FROM zone_chanel LEFT JOIN system_chanels ON zone_chanel.lock_id = system_chanels.id_lock WHERE zone='f'";
$zone_a = mysqli_query($conn,$sql);

while($x <=$row = mysqli_fetch_assoc($zone_a)){
    if($row['lock_id'] != $row['id_lock']){
      //
?>
            <div class="col-xl-3 col-lg-6 mt-2">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                 <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">ว่าง</h5>
                      <span class="h2 font-weight-bold mb-0"><?php  echo $row['loc_k']; ?></span>
                    </div>
                    <div class="col-auto">
                      <a href="#myModal" role="button" class="btn btn-sm btn-primary modalT" data-id="<?php echo $row['lock_id'];?>" data-name="<?php  echo $row['loc_k']; ?>" data-toggle="modal">กดเช่า</a>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2">รายเดือน : ฿620</span>
                    <span class="text-info">รายวัน : ฿180</span>
                  </p>
                </div>
              </div>
            </div>

<?php
     // }
    }else{
        if($row['status_ar']== (int)1){
?>

            <div class="col-xl-3 col-lg-6 mt-2">
              <div class="card card-stats mb-4 mb-xl-0" style="background-color:#fd8080">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0 disabled">ไม่ว่าง</h5>
                      <span class="h2 font-weight-bold mb-0"><?php  echo $row['loc_k']; ?></span>
                    </div>
                    <div class="col-auto">
                      <p class="btn btn-sm btn-primary">ถูกเช่าแล้ว</p>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2">&nbsp; <?php echo $row['end_date']; ?></span>
                    <span class="text-nowrap"> </span>
                  </p>
                </div>
              </div>
            </div>
<?php
        }else if($row['status_ar']== (int)0){
?>
            <div class="col-xl-3 col-lg-6 mt-2">
              <div class="card card-stats mb-4 mb-xl-0" style="background-color:#ffd600">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0 disabled">ไม่ว่าง</h5>
                      <span class="h2 font-weight-bold mb-0"><?php  echo $row['loc_k']; ?></span>
                    </div>
                    <div class="col-auto">
                      <p class="btn btn-sm btn-primary">รออนุมัติ</p>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2">&nbsp; <?php echo $row['end_date']; ?></span>
                    <span class="text-nowrap"> </span>
                  </p>
                </div>
              </div>
            </div>
<?php
        }
    }
}
?>

          </div>
        </div>

        <div id="myModal<?php echo $row['zone_id'];?>" class="modal fade " tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">บันทึกข้อมูลการเช่า</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <form action="input_zone.php" method="POST">
                    <div class="text-center">
                      <span id="lockName" class="h2 font-weight-bold mb-0"></span>
                    </div>
                    <div class="row mt-4">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">วันที่เช่า</label>
                          <input type="date" name="strdate" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">วันที่สิ้นสุดเช่า</label>
                          <input type="date" name="enddate" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">ประเภทการเช่า</label>
                          <select class="select custom-select" name="category" id="onlytxt" required>
                            <option value="">-- เลือกปรเภท --</option>
                            <option value="Month">รายเดือน</option>
                            <option value="day">รายวัน</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">ราคา</label>
                          <select class="select custom-select" name="price" id="onlytxt" required>
                            <option value="">-- เลือกปรเภท --</option>
                            <option value="620">รายเดือน 620 ฿</option>
                            <option value="180">รายวัน 180 ฿</option>
                          </select>
                        </div>
                      </div>
                      <input type="hidden" id="lockID" name="lockid">
                      <input type="hidden" name="userid" value="<?php echo $_SESSION['users']['user_id'] ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <input type="submit" class="btn btn-primary" value="save">
                </div>
                 </form>
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../../src/js/modal.js"></script>
</body>
</html>

<?php
    }
?>