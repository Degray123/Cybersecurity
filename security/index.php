<?php

$useremail = $_POST['Email'];
$userpassword = $_POST['password'];

$correctemail ='securepass@gmail.com';
$correctpassword ='hqs5123';

if ( $useremail === $correctemail && $userpassword === $correctpassword){
    header('location: back.html');
    exit();
}
else{
    echo 'incorect cridential';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Security</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/awesome-bootstrap-checkbox.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
  <span class="header-ribbon"/>
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-centered">
            <form action="" method="post">
            <div class="login-panel">
                <h4 class="login-panel-title">fund recovery gateway</h4>
                <p class="login-panel-tagline">only members allowed</p>
                <div class="login-panel-section">
                    
                    <div class="form-group">

                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
                            <input class="form-control" name="Email" type="text" placeholder="Email address">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
                            <input class="form-control" name="password" type="password" placeholder="Password">
                        </div>
                    </div>
                   
                    <div class="checkbox checkbox-circle checkbox-success checkbox-small">
                        <input type="checkbox" id="checkbox1">
                        <label for="checkbox1">Keep me logged in</label>
                        <a href="#" class="pull-right">Forget your password?</a>
                    </div>
                </div>
                <div class="login-panel-section">
                    <button type="submit" class="btn btn-default" ><i class="fa fa-sign-in fa-fw" aria-hidden="true"></i> Login</button> <a href="#">Create Your Account</a>
                </div>
            </div>
             </form>
        </div>
      </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

