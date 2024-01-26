<?php
require 'process/login.php';

// if (isset($_SESSION['username'])) {
//     if ($_SESSION['role'] == 'admin') {
//         header('location: page/admin/admin_dashboard.php');
//         exit;
//     } elseif ($_SESSION['role'] == 'user') {
//         header('location: page/user/user_dashboard.php');
//         exit;
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tube Inspections System</title>

    <link rel="icon" href="dist/img/tir-logo.png" type="image/x-icon" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="dist/css/font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page" style="background-image: url(./dist/img/tubebg.jpg); background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
    <!-- /.login-logo -->
    <div class="card bg-teal shadow">
        <div class="login-box">
            <div class="login-logo pt-3">
                <img src="dist/img/tir-logo.png" style="height:120px;">
                <h1 class="text-center text-bold">TUBE <br /> INSPECTIONS</h1>
            </div>
        </div>
        <div class="card-body login-card-body">
            <form action="" method="POST" id="login_form">
                <div class="input-group mb-1">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                        autocomplete="off">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-1">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                        autocomplete="off">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control">
                        <option value="cot">COT Tube Inspection</option>
                        <option value="pvc">PVC Tube Inspection</option>
                        <span class="fas fa-lock"></span>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-sync-alt"></span>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="input-group mb-3">
                    <button type="submit" class="btn bg-teal btn-block" name="login_btn" value="login">
                        SignIn</button>
                    <a href="#" class="btn bg-secondary btn-block" target="_blank">Work Instruction</a>
                </div>
                <!-- /.col -->
            </form>
        </div>
    </div>
</body>

<!-- jQuery -->
<script src="plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>

</html>