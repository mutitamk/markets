<?php
session_start()
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="src/css/adduser.css">
    <link rel="icon" type="image/png" href="src/img/logos.png"/>
<!------ Include the above in your HEAD tag ---------->

<div class="container register-form col-md-6" style="margin-top:5%">
            <div class="form">
                <div class="note">
                    <p>Register</p>
                </div>
              <form action="chk_adduser.php" method="POST" enctype="multipart/form-data">
                <div class="form-content bg-light">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                              <div class="col-12">
                                <input type="text" name="names" class="form-control" placeholder="ชื่อ *" required >
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-12">
                                <input type="text" name="last" class="form-control" placeholder="นามสกุล *" required>
                              </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="เบอร์โทร *" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="username / email *" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password *" required>
                            </div>
                            
                        </div>
                    </div>
                    <button type="submit" class="btnSubmit btn-block">Submit</button>
                </div>
              </form>
            </div>
        </div>