<?php
//SESSION
include '../../../process/login.php';

// if (!isset($_SESSION['username'])) {
//   header('location:../../');
//   exit;
// } else if ($_SESSION['role'] == 'user') {
//   header('location: ../../page/user/dashboard.php');
//   exit;
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <link rel="icon" href="../../../dist/img/tir-logo.png" type="image/x-icon" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="../../../dist/css/font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="../../../plugins/sweetalert2/dist/sweetalert2.min.css">

    <style>
        .CenterMain {
            position: relative;
        }

        .CenterDiv {
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .SPoint {
            opacity: 0.5;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .cardHead:hover {
            .SPoint {
                transition: transform 1s;
                opacity: 1.0;
            }

            .img-circle {
                transform: scale(1.3);
            }

            transition: transform 0.2s;
            transform: translateY(-0.5rem) scale(1.0125);
            box-shadow: 0 0.5em 3rem -1rem rgba(0, 0, 0, 0.5);

        }

        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #536A6D;
            width: 50px;
            height: 50px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(1080deg);
            }
        }



        /* scrollbar */
        /* width */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #332D2D;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center bg-dark">
            <img class="animation__shake" src="../../../dist/img/tir-logo.png" alt="logo" height="300" width="300">
        </div>
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-teal  border-0 ">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars text-white"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <h5 class="m-0 p-0">COT TUBE INSPECTIONS</h5>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt text-white"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->