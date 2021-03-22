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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/index.user.css">
    <title>HOME PAGER</title>
</head>
<body style="">
<div class="container-fluid mt-1">

<!-- ****************code running php********************** -->
<?php
    navbar($user_session);
?> 
<!-- *************************************** -->
  <div class="container col-md-8" style="margin-top:5%">
    <div class="bs-example">
        <div class="card text-center">
            <div class="card-header bg-warning">
                <p class="text-uppercase ">zone marketing</p>
            </div>
            <div class="card-body">
                <h5 class="card-title text-uppercase"><strong>hello <?php echo $user_session; ?></strong></h5>
                <p class="card-text">ระบบนี้ เป็นระบบ การจัดการที่เช่าพื่นที่ในตลาด สามารดูได้ว่า ล็อคหนว่าง ล็อคไหนไม่ว่าง มีทั้งรายละเอียดของล็อคอาทิ เช่น ขนาดของล็อค ราคาของล็อค ล็อคไหนอยู่โซนไหน และสามารถดูได้ว่า เราเช่าล็อคใหนระยะเวลาเท่าไหร่</p>
            </div>
        </div>    
    </div>
  </div>
  <div class="row md-2 mt-4">
   <div class="text-center col-md-12 ml-md-auto">
    <div class="btn-group true" style="margin: 12px;">
        ฺ<button type="button" class="">
            <a class="nav-link" href="page/zone_a.php">
                <strong class="text-uppercase">zone a</strong>
            </a>
        </button>
    </div>
    <div class="btn-group true" style="margin: 12px;">
        ฺ<button type="button" class="">
            <a class="nav-link" href="page/zone_b.php">
                <strong class="text-uppercase">zone b</strong>
            </a>
        </button>
    </div>
    <div class="btn-group true" style="margin: 12px;">
        ฺ<button type="button" class="">
            <a class="nav-link" href="page/zone_c.php">
                <strong class="text-uppercase">zone c</strong>
            </a>
        </button>
    </div>
    <div class="btn-group true" style="margin: 12px;">
        ฺ<button type="button" class="">
            <a class="nav-link" href="page/zone_d.php">
                <strong class="text-uppercase">zone d</strong>
            </a>
        </button>
    </div>
    <div class="btn-group true" style="margin: 12px;">
        ฺ<button type="button" class="">
            <a class="nav-link" href="page/zone_e.php">
                <strong class="text-uppercase">zone e</strong>
            </a>
        </button>
    </div>
    <div class="btn-group true" style="margin: 12px;">
        ฺ<button type="button" class="">
            <a class="nav-link" href="page/zone_f.php">
                <strong class="text-uppercase">zone f</strong>
            </a>
        </button>
    </div>
   </div>
  </div>
  <div class="container col-10 mt-4" style="border: 2px solid black;border-style: outset; background-color:#ffff80">
        <h4 class="text-center mt-4 pxp "> Promotion จองวันนี้ !</h4>
        <div class="row">
        <p class="card-text text-center col-4 ppx text-danger ">รายเดือนโซน A เหลือเพียง 620 บาทจาก 720 บาท !!</p>
        <p class="card-text text-center col-4 ppx text-danger"> รายเดือนโซน B เหลือเพียง 700 บาทจาก 800 บาท !!</p>
        <p class="card-text text-center col-4 ppx text-danger"> รายเดือนโซน C เหลือเพียง 620 บาทจาก 720 บาท !!</p>
        <p class="card-text text-center col-4 ppx text-danger"> รายเดือนโซน D เหลือเพียง 620 บาทจาก 720 บาท !!</p>
        <p class="card-text text-center col-4 text-danger" id="h3-1">  รายเดือนโซน E เหลือเพียง 620 บาทจาก 720 บาท !!</p>
        <p class="card-text text-center col-4 text-danger" id="h3-2"> รายเดือนโซน F เหลือเพียง 620 บาทจาก 720 บาท !!</p>
        </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script>
    tl = new TimelineMax( {yoyo: true, } );

tl.from('.pxp', 2, {autoAlpha: 0, y:250, ease: Power2.easeOut}, 0 )
  .from('.ppx', 2, {autoAlpha: 0, y:200, ease: Power2.easeOut}, .25 )
  .from('#h3-1', 2, {autoAlpha: 0, y:200, ease: Power2.easeOut}, .35 )
  .from('#h3-2', 2, {autoAlpha: 0, y:230, ease: Power2.easeOut}, .35 )
;
</script>
</body>
</html>
<?php
    }
?>