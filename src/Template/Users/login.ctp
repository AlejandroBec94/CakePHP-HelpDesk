<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login-2 | Equation - Multipurpose Bootstrap Dashboard Template </title>
    <!--<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>-->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <?= $this->Html->css('/template/bootstrap/css/bootstrap.min.css') ?>
    <?= $this->Html->css('/template/assets/css/plugins.css') ?>
    <?= $this->Html->css('/template/assets/css/users/login-2.css') ?>

    <?= $this->Html->script('/template/assets/js/libs/jquery-3.1.1.min.js') ?>
    <?= $this->Html->script('/template/bootstrap/js/popper.min.js') ?>
    <?= $this->Html->script('/template/bootstrap/js/bootstrap.min.js') ?>

    <!-- END GLOBAL MANDATORY STYLES -->
</head>
<body class="login">

<form class="form-login">
    <div class="row">

        <div class="col-md-12 text-center mb-4">
            <!--<img alt="logo" src="/template/assets/img/logo-3.png" class="theme-logo">-->
            <?= $this->Html->image('/template/assets/img/logo-3.png',['class'=>'theme-logo','alt'=>'logo']) ?>

        </div>

        <div class="col-md-12">

            <label for="inputEmail" class="sr-only">Email address</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="icon-inputEmail"><i class="flaticon-user-7"></i> </span>
                </div>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email Address" aria-describedby="inputEmail" required >
            </div>

            <label for="inputPassword" class="sr-only">Password</label>
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="icon-inputPassword"><i class="flaticon-key-2"></i> </span>
                </div>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" aria-describedby="inputPassword" required >
            </div>

            <div class="checkbox d-flex justify-content-center mt-3">
                <div class="custom-control custom-checkbox mr-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" value="remember-me">
                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                </div>
            </div>

            <button class="btn btn-lg btn-gradient-warning btn-block btn-rounded mb-4 mt-5" type="submit">Login</button>

            <div class="forgot-pass text-center">
                <a href="user_pass_recovery_2.html">Forgot Password ?</a>
            </div>

        </div>

        <div class="col-md-12">
            <div class="login-text text-center">
                <p class="mt-3 text-white">New Here? <a href="user_register_2.html" class="">Register </a> a new user !</p>
            </div>
        </div>

    </div>
</form>
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->


<!-- END GLOBAL MANDATORY SCRIPTS -->
</body>
</html>
