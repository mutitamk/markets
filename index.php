

<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="icon" type="image/png" href="src/img/logos.png"/>
    <link rel="stylesheet" href="./src/css/login.css">
    <title>KU MARKET</title>
</head>
<body>
<div class="">
<div class="container">
	<div class="row" style="margin-top:7%">
		  <div class="col-md-4 login-sec" >
		    <h2 class="text-center">Login Now</h2>
            <form class="login-form" action="chk_login.php" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                <input type="text" name="username" class="form-control" placeholder="">

              </div>
              <div class="form-group">
                <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                <input type="password" name="password" class="form-control" placeholder="">
              </div>


                <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  <small>Remember Me</small>
                </label>
                <button type="submit" class="btn btn-login float-right">Submit</button>
              </div>

            </form>
            <div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="addUSer.php">account</a></div>
      </div>

   	  <div class="col-md-8 banner-sec">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
           <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
           </ol>
           <div class="carousel-inner">
             <div class="carousel-item active" id="">
               <img class="d-block img-fluid" src="src/img/sss.jpg" alt="First slide">
                 <div class="carousel-caption d-none d-md-block">
                   <div class="banner-text">
                     <h2></h2>
                     <p></p>
                   </div>	
                 </div>
             </div>
             <div class="carousel-item">
               <img class="d-block img-fluid" src="src/img/aaa.jpg" alt="First slide">
               <div class="carousel-caption d-none d-md-block">
                 <div class="banner-text">
                     <h2></h2>
                     <p></p>
                     </div>	
               </div>
             </div>
             <div class="carousel-item">
               <img class="d-block img-fluid" src="src/img/ccc.jpg" alt="First slide">
               <div class="carousel-caption d-none d-md-block">
                 <div class="banner-text">
                   <h2></h2>
                   <p></p>
                 </div>	
               </div>
             </div>
           </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>	   
	        </div>
        </div>
      </div>
  </div>
</div>
</section>
</body>
</html>