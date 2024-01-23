<?php include 'plugins/navbar.php'; ?>
<?php include 'plugins/sidebar/home_bar.php'; ?>

<section class="container-fluid m-0 p-0">
    <!-- Content Wrapper. Contains page content -->
    <div class="CenterMain content-wrapper bg-white">
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="row">
            <div class="CenterDiv container-fluid">
                <!-- /.card-header -->
                <section class="container-lg mt-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="cardHead card widget-user shadow">
                                <div class="SPoint widget-user-header text-white"
                                    style="background: url('../../../dist/img/bgstart.jpg') center center;">
                                </div>
                                <a href="start_point.php">
                                    <div class="widget-user-image">
                                        <img class="img-circle elevation-2" src="../../../dist/img/play.png"
                                            alt="User Avatar">
                                    </div>
                                </a>
                                <div class="card-footer text-center bg-primary">
                                    <span class="h5"><b>S t a r t &nbsp;P o i n t</b></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cardHead card card-widget widget-user shadow">
                                <div class="SPoint widget-user-header text-white"
                                    style="background: url('../../../dist/img/bgmass.jpg') center center;">
                                </div>
                                <a href="mass_production.php">
                                    <div class="widget-user-image">
                                        <img class="img-circle elevation-2" src="../../../dist/img/growth.png"
                                            alt="User Avatar">
                                    </div>
                                </a>
                                <div class="card-footer text-center bg-teal">
                                    <span class="h5"><b>M a s s &nbsp;P r o d u c t i o n</b></span>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cardHead card card-widget widget-user shadow">
                                <div class="SPoint widget-user-header text-white"
                                    style="background: url('../../../dist/img/bgend.jpg') center center;">
                                </div>
                                <a href="end_point.php">
                                    <div class="widget-user-image">
                                        <img class="img-circle elevation-2" src="../../../dist/img/stop.png"
                                            alt="User Avatar">
                                    </div>
                                </a>
                                <div class="card-footer text-center bg-warning">
                                    <span class="h5 text-white"><b>E n d &nbsp;P o i n t</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<!-- /.row -->

<?php include 'plugins/footer.php'; ?>