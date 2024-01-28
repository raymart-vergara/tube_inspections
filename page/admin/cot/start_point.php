<?php include 'plugins/navbar.php'; ?>
<?php include 'plugins/sidebar/start_point_bar.php'; ?>

<section class="container-lg">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-white">
        <h4 class="font-weight-bold my-3">| START POINT</h4>
        <div class="row m-0 p-0">
            <div class="col-5 p-0 m-0">
                <div class="form-group row p-0 m-0">
                    <label for="cs_part_name" class="col-sm-4 col-form-label">Part Name</label>
                    <select id="cs_part_name" name="cs_part_name"
                        class="form-control form-control-sm form-control-sm col-sm-8">
                        <!-- <option selected>Choose...</option> -->
                    </select>
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Quantity(m)</label>
                    <input type="number" class="form-control  form-control-sm col-sm-8" id="cs_quantity">
                </div>
                <div class="form-group row m-0">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Time Start
                    </label>
                    <div class="input-group col-sm-8 m-0 p-0">
                        <div class="input-group-prepend">
                            <button class="btn btn-sm  bg-teal" id="cs_tstart_btn" onclick="cs_tstart_btn()"
                                type="button">&nbsp;Start&nbsp;</button>
                        </div>
                        <input type="text" class="form-control" id="cs_tstart_input" placeholder="" aria-label=""
                            aria-describedby="basic-addon1" disabled>
                    </div>
                </div>
                <div class="form-group row m-0 mt-1">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Time End
                    </label>
                    <div class="input-group col-sm-8 m-0 p-0">
                        <div class="input-group-prepend">
                            <button class="btn btn-danger btn-sm" id="cs_tend_btn" onclick="cs_tend_btn()" disabled
                                type="button">&nbsp; End
                                &nbsp;</button>
                        </div>
                        <input type="text" class="form-control" id="cs_tend_input" placeholder="" aria-label=""
                            aria-describedby="basic-addon1" disabled>
                    </div>
                </div>
            </div>
            <div class="col-2 p-0 m-0"> </div>
            <!-- ============================================== -->
            <div class="col-5 p-0 m-0">
                <div class="form-group row p-0 m-0">
                    <label for="inputEmail3" class="col-sm-4 col-form-label text-start">Inspected By</label>
                    <input type="email" class="form-control form-control-sm col-sm-8" id="cs_inspby"
                        value=" <?= htmlspecialchars($_SESSION['name']); ?>" disabled></input>
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="partName" class="col-sm-4 col-form-label text-start">Shift</label>
                    <select id="cs_shift" class="form-control form-control-sm col-sm-8">
                        <option selected>Select Shift</option>
                        <option>Day Shift</option>
                        <option>Night Shift</option>
                    </select>
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="" class="col-sm-4 col-form-label text-start"">Inspection Date</label>
                    <input type=" date" class="form-control form-control-sm col-sm-8" id="cs_ins_date"
                        value=" <?= $server_date_only; ?>" disabled>
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="inputEmail3" class="col-sm-4 col-form-label text-start">Total Mins</label>
                    <input type="text" class="form-control form-control-sm col-sm-8" id="total_cs_mins" disabled>
                </div>
            </div>
        </div>
        <hr>
        <!-- ================================================================================================================================ -->
        <h4 class="font-weight-bold my-3">| Appearance Inspection</h4>
        <div class="col-12">
            <div class="form-group row p-0 m-0">
                <label for="" class="col-sm-4 col-form-label">Outside Appearance</label>
                <select id="cs_outside_app" class="form-control form-control-sm col-sm-8">
                    <option selected>Choose...</option>
                    <option>OK</option>
                    <option>NG</option>
                </select>
            </div>
            <div class="form-group row p-0 m-0">
                <label for="" class="col-sm-4 col-form-label">Inside Appearance</label>
                <select id="cs_inside_app" class="form-control form-control-sm col-sm-8">
                    <option selected>Choose...</option>
                    <option>OK</option>
                    <option>NG</option>
                </select>
            </div>
            <div class="form-group row p-0 m-0">
                <label for="" class="col-sm-4 col-form-label">Slit Condition</label>
                <select id="cs_color_app" class="form-control form-control-sm col-sm-8">
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
                        <span class="col-1 text-center px-1"> + </span><input type="text"
                            class="form-control form-control-sm col-sm-3" id="cs_id_tol_add" disabled>
                        <span class="col-1 text-center px-1"> - </span><input type="text"
                            class="form-control form-control-sm col-sm-3" id="cs_id_tol_min" disabled>
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="" class="col-sm-4 col-form-label text-start">Start</label>
                        <input type="text" class="form-control form-control-sm col-sm-8" id="cs_id_start">
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="" class="col-sm-4 col-form-label text-start">End</label>
                        <input type="text" class="form-control form-control-sm col-sm-8" id="cs_id_end">
                    </div>
                </div>
                <div class="col-sm-2">

                </div>
                <div class="col-sm-5">
                    <h4 class="font-weight-bold my-3">| Outside Diameter</h4>
                    <div class="form-group row p-0 m-0">
                        <label for="" class="col-sm-4 col-form-label text-start">Tolerance</label>
                        <span class="col-1 text-center px-1"> + </span><input type="text"
                            class="form-control form-control-sm col-sm-3" id="cs_od_tol_add" disabled>
                        <span class="col-1 text-center px-1"> - </span><input type="text"
                            class="form-control form-control-sm col-sm-3" id="cs_od_tol_min" disabled>
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="" class="col-sm-4 col-form-label text-start">Start</label>
                        <input type="text" class="form-control form-control-sm col-sm-8" id="cs_od_start">
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="" class="col-sm-4 col-form-label text-start">End</label>
                        <input type="text" class="form-control form-control-sm col-sm-8" id="cs_od_end">
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
                <label for="partName" class="col-sm-3 col-form-label p-0 m-0">Tolerance</label>
                <span class="col-1 text-center"> + </span><input type="text"
                    class="form-control form-control-sm col-sm-2" id="cs_wt_tol_add" disabled>
                <span class="col-1 text-center"> - </span><input type="text"
                    class="form-control form-control-sm col-sm-2" id="cs_wt_tol_min" disabled>
            </div>
        </div>

        <div class="row p-0 m-0">
            <div class="col-sm-4 mt-1">
                <h4 class="text-center p-0 m-0">Start</h4>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q1</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="cs_q1_start" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q2</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="cs_q2_start" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q3</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="cs_q3_start" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q4</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="cs_q3_start" placeholder="">
                </div>
            </div>
            <div class="col-sm-4 mt-1">
                <h4 class="text-center p-0 m-0">Middle</h4>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q1</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="cs_q1_middle" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q2</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="cs_q2_middle" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q3</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="cs_q3_middle" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q4</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="cs_q4_middle" placeholder="">
                </div>
            </div>
            <div class="col-sm-4 mt-1">
                <h4 class="text-center p-0 m-0">End</h4>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q1</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="cs_q1_end" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q2</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="cs_q2_end" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q3</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="cs_q3_end" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q4</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="cs_q4_end" placeholder="">
                </div>
            </div>
        </div>
        <hr>
        <!-- ================================================================================================================================ -->
        <div class="col-12">

            <h4 class="font-weight-bold my-3">| Tube Breaking</h4>
            <div class="form-group row p-0 m-0">
                <label for="" class="col-sm-6 col-form-label">Using Round Bar</label>
                <select class="form-control form-control-sm col-sm-6" id="cs_tb_round">
                    <option selected>Choose...</option>
                    <option>OK</option>
                    <option>NG</option>
                </select>
            </div>
            <div class="form-group row p-0 m-0">
                <label for="" class="col-sm-6 col-form-label">Using Bare Hands</label>
                <select class="form-control form-control-sm col-sm-6" id="cs_tb_bare">
                    <option selected>Choose...</option>
                    <option>OK</option>
                    <option>NG</option>
                </select>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group row p-0 m-0">
                        <label for="partName" class="col-sm-6 col-form-label ">Appearance Judgement</label>
                        <input type="email" class="form-control form-control-sm col-sm-6" id="cs_app_judge">
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="partName" class="col-sm-6  col-form-label ">Dimension Judgement</label>
                        <input type="email" class="form-control form-control-sm col-sm-6" id="cs_dim_judge">
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="partName" class="col-sm-6  col-form-label ">NG Quantity</label>
                        <input type="email" class="form-control form-control-sm col-sm-6" id="cs_ng_qua">
                    </div>
                </div>
                <div class="col-2">

                </div>
                <div class="col-sm-5">
                    <div class="form-group row p-0 m-0">
                        <label for="partName" class="col-sm-6  col-form-label">Defect Type</label>
                        <input type="email" class="form-control form-control-sm col-sm-6" id="cs_defect">
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="partName" class="col-sm-6  col-form-label">Confirmed by</label>
                        <input type="email" class="form-control form-control-sm col-sm-6" id="cs_confirmed_by">
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="partName" class="col-sm-6 col-form-label">Remarks</label>
                        <input type="email" class="form-control form-control-sm col-sm-6" id="cs_remaks">
                    </div>
                </div>
            </div>
        </div>
        <button class="btn bg-teal btn-lg btn-block my-4" id="cs_save">SAVE</button>
    </div>
</section>

<!-- /.row -->

<?php include 'plugins/footer.php'; ?>
<?php include 'plugins/js/start_point_script.php'; ?>