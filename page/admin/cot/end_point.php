<?php include 'plugins/navbar.php'; ?>
<?php include 'plugins/sidebar/end_point_bar.php'; ?>

<section class="container-md">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-white">
        <h4 class="font-weight-bold my-3">| END POINT</h4>
        <div class="row m-0 p-0">
            <div class="col-5 p-0 m-0">
                <div class="form-group row p-0 m-0">
                    <label for="" class="col-sm-4 col-form-label">Part Name</label>
                    <select id="ce_part_name" name="ce_part_name"
                        class="form-control form-control-sm form-control-sm col-sm-8">
                        <!-- <option selected>Choose...</option> -->
                    </select>
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Quantity(m)</label>
                    <input type="number" class="form-control  form-control-sm col-sm-8" id="ce_quantity">
                </div>
                <div class="form-group row m-0">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Time Start
                    </label>
                    <div class="input-group col-sm-8 m-0 p-0">
                        <div class="input-group-prepend">
                            <button class="btn btn-sm  bg-teal" id="ce_tend_btn"
                                type="button">&nbsp;Start&nbsp;</button>
                        </div>
                        <input type="text" class="form-control" id="ce_tstart" placeholder="" aria-label=""
                            aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="form-group row m-0 mt-1">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Time End
                    </label>
                    <div class="input-group col-sm-8 m-0 p-0">
                        <div class="input-group-prepend">
                            <button class="btn btn-danger btn-sm" id="ce_tend_btn" type="button">&nbsp; End
                                &nbsp;</button>
                        </div>
                        <input type="text" class="form-control" id="ce_tend" placeholder="" aria-label=""
                            aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="col-2 p-0 m-0"> </div>
            <!-- ============================================== -->
            <div class="col-5 p-0 m-0">
                <div class="form-group row p-0 m-0">
                    <label for="inputEmail3" class="col-sm-4 col-form-label text-start">Inspected By</label>
                    <input type="text" class="form-control form-control-sm col-sm-8"  value=" <?= htmlspecialchars($_SESSION['name']); ?>" disabled id="ce_inspby">
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="partName" class="col-sm-4 col-form-label text-start">Shift</label>
                    <select id="ce_shift" class="form-control form-control-sm col-sm-8">
                        <option selected>Select Shift</option>
                        <option>Day Shift</option>
                        <option>Night Shift</option>
                    </select>
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="" class="col-sm-4 col-form-label text-start"">Inspection Date</label>
                    <input type=" date" class="form-control form-control-sm col-sm-8"  value=" <?= htmlspecialchars($_SESSION['name']); ?>" disabled id="ce_ins_date">
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="inputEmail3" class="col-sm-4 col-form-label text-start">Total Mins</label>
                    <input type="text" class="form-control form-control-sm col-sm-8" id="total_ce_mins">
                </div>
            </div>
        </div>
        <hr>
        <!-- ================================================================================================================================ -->
        <h4 class="font-weight-bold my-3">| Appearance Inspection</h4>
        <div class="col-12">
            <div class="form-group row p-0 m-0">
                <label for="" class="col-sm-4 col-form-label">Outside Appearance</label>
                <select id="ce_outside_app" class="form-control form-control-sm col-sm-8">
                    <option selected>Choose...</option>
                    <option>OK</option>
                    <option>NG</option>
                </select>
            </div>
            <div class="form-group row p-0 m-0">
                <label for="" class="col-sm-4 col-form-label">Inside Appearance</label>
                <select id="ce_inside_app" class="form-control form-control-sm col-sm-8">
                    <option selected>Choose...</option>
                    <option>OK</option>
                    <option>NG</option>
                </select>
            </div>
            <div class="form-group row p-0 m-0">
                <label for="" class="col-sm-4 col-form-label">Slit Condition</label>
                <select id="part_name" class="form-control form-control-sm col-sm-8">
                    <option selected>Choose...</option>
                    <option>OK</option>
                    <option>NG</option>
                    <option>N/A</option>
                </select>
            </div>
            <div class="form-group row p-0 m-0">
                <label for="" class="col-sm-4 col-form-label">Color</label>
                <select id="part_name" class="form-control form-control-sm col-sm-8">
                    <option selected>Choose...</option>
                    <option>OK</option>
                    <option>NG</option>
                </select>
            </div>
        </div>
        <hr>
        <!-- ================================================================================================================================ -->
        <div class="col-12">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="font-weight-bold my-3">| Inside Diameter</h4>
                    <div class="form-group row p-0 m-0">
                        <label for="" class="col-sm-4 col-form-label text-start">Tolerance</label>
                        <input type="text" class="form-control form-control-sm col-sm-8" id="ce_id_tolerance">
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="" class="col-sm-4 col-form-label text-start">Start</label>
                        <input type="text" class="form-control form-control-sm col-sm-8" id="ce_id_start">
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="" class="col-sm-4 col-form-label text-start">End</label>
                        <input type="text" class="form-control form-control-sm col-sm-8" id="ce_id_end">
                    </div>
                </div>
                <div class="col-sm-2">

                </div>
                <div class="col-sm-5">
                    <h4 class="font-weight-bold my-3">| Inside Diameter</h4>
                    <div class="form-group row p-0 m-0">
                        <label for="" class="col-sm-4 col-form-label text-start">Tolerance</label>
                        <input type="text" class="form-control form-control-sm col-sm-8" id="ce_od_tolerance">
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="" class="col-sm-4 col-form-label text-start">Start</label>
                        <input type="text" class="form-control form-control-sm col-sm-8" id="ce_od_start">
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="" class="col-sm-4 col-form-label text-start">End</label>
                        <input type="text" class="form-control form-control-sm col-sm-8" id="ce_od_end">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <!-- ================================================================================================================================ -->
        <div class="col-12">

        </div>
        <div class="col-12">
            <h4 class="font-weight-bold my-3">| Wall Thickness</h4>
            <div class="form-group row p-0 m-0">
                <label for="partName" class="col-sm-4 col-form-label p-0 m-0">Tolerance</label>
                <input type="number" class="form-control form-control-sm col-sm-4 p-0 m-0" id="ce_wt_tolerance">
            </div>
        </div>

        <div class="row p-0 m-0">
            <div class="col-sm-6 mt-1">
                <h4 class="text-center p-0 m-0">Start</h4>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q1</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="ce_q1_start" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q2</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="ce_q2_start" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q3</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="ce_q3_start" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q4</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="ce_q3_start" placeholder="">
                </div>
            </div>
            <div class="col-sm-6 mt-1">
                <h4 class="text-center p-0 m-0">End</h4>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q1</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="ce_q1_end" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q2</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="ce_q2_end" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q3</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="ce_q3_end" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q4</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="ce_q4_end" placeholder="">
                </div>
            </div>
        </div>
        <hr>
        <!-- ================================================================================================================================ -->
        <div class="col-12">

            <h4 class="font-weight-bold my-3">| Tube Breaking</h4>
            <div class="form-group row p-0 m-0">
                <label for="partName" class="col-sm-6 col-form-label">Using Round Bar</label>
                <input type="email" class="form-control form-control-sm col-sm-6" id="ce_tb_round">
            </div>
            <div class="form-group row p-0 m-0">
                <label for="partName" class="col-sm-6 col-form-label">Using Bare Hands</label>
                <input type="email" class="form-control form-control-sm col-sm-6" id="ce_tb_bare">
            </div>
            <br>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group row p-0 m-0">
                        <label for="partName" class="col-sm-6 col-form-label ">Appearance Judgement</label>
                        <input type="email" class="form-control form-control-sm col-sm-6" id="ce_app_judge">
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="partName" class="col-sm-6  col-form-label ">Dimension Judgement</label>
                        <input type="email" class="form-control form-control-sm col-sm-6" id="ce_dim_judge">
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="partName" class="col-sm-6  col-form-label ">NG Quantity</label>
                        <input type="email" class="form-control form-control-sm col-sm-6" id="ce_ng_qua">
                    </div>
                </div>
                <div class="col-2">

                </div>
                <div class="col-sm-5">
                    <div class="form-group row p-0 m-0">
                        <label for="partName" class="col-sm-6  col-form-label">Defect Type</label>
                        <input type="email" class="form-control form-control-sm col-sm-6" id="ce_defect">
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="partName" class="col-sm-6  col-form-label">Confirmed by</label>
                        <input type="email" class="form-control form-control-sm col-sm-6" id="ce_confirmed_by">
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="partName" class="col-sm-6 col-form-label">Remarks</label>
                        <input type="email" class="form-control form-control-sm col-sm-6" id="ce_remaks">
                    </div>
                </div>
            </div>
        </div>
        <button class="btn bg-teal btn-lg btn-block my-4" id="ce_save">SAVE</button>
    </div>
</section>

<!-- /.row -->

<?php include 'plugins/footer.php'; ?>