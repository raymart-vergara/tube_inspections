<?php include 'plugins/navbar.php'; ?>
<?php include 'plugins/sidebar/mass_production_bar.php'; ?>

<section class="container-md">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-white">
        <div class="content-wrapper bg-white">
            <h4 class="font-weight-bold mt-3">| MASS PRODUCTION</h4>
            <div class="row m-0 p-0">
                <div class="col-5 p-0 m-0">
                    <div class="form-group row p-0 m-0">
                        <label for="cm_part_name" class="col-sm-4 col-form-label">Part Name</label>
                        <select id="cm_part_name" name="cm_part_name"
                            class="form-control form-control-sm form-control-sm col-sm-8">
                            <!-- <option selected>Choose...</option> -->
                        </select>
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Quantity(m)</label>
                        <input type="number" class="form-control  form-control-sm col-sm-8" id="cm_quantity">
                    </div>
                    <div class="form-group row m-0">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Time Start
                        </label>
                        <div class="input-group col-sm-8 m-0 p-0">
                            <div class="input-group-prepend">
                                <button class="btn btn-sm  bg-teal" id="cm_tend_btn"
                                    type="button">&nbsp;Start&nbsp;</button>
                            </div>
                            <input type="text" class="form-control" id="cm_tstart" placeholder="" aria-label=""
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="form-group row m-0 mt-1">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Time End
                        </label>
                        <div class="input-group col-sm-8 m-0 p-0">
                            <div class="input-group-prepend">
                                <button class="btn btn-danger btn-sm" id="cm_tend_btn" type="button">&nbsp; End
                                    &nbsp;</button>
                            </div>
                            <input type="text" class="form-control" id="cm_tend" placeholder="" aria-label=""
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="form-group row p-0 m-0 mt-1">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Total Mins</label>
                        <input type="text" class="form-control form-control-sm col-sm-8" id="cm_total_mins">
                    </div>
                </div>
                <div class="col-2 p-0 m-0"> </div>
                <!-- ============================================== -->
                <div class="col-5 p-0 m-0">
                    <div class="form-group row p-0 m-0">
                        <label for="inputEmail3" class="col-sm-4 col-form-label text-start">Inspected By</label>
                        <input type="text" class="form-control form-control-sm col-sm-8" id="cm_inspby"
                            value=" <?= htmlspecialchars($_SESSION['name']); ?>" disabled></input>
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="partName" class="col-sm-4 col-form-label text-start">Shift</label>
                        <select id="cm_shift" class="form-control form-control-sm col-sm-8">
                            <option selected>Select Shift</option>
                            <option>Day Shift</option>
                            <option>Night Shift</option>
                        </select>
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="" class="col-sm-4 col-form-label text-start"">Inspection Date</label>
                    <input type=" date" class="form-control form-control-sm col-sm-8" id="cm_ins_date"
                            value=" <?= $server_date_only; ?>" disabled>
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="inputEmail3" class="col-sm-4 col-form-label text-start">Lot No.</label>
                        <input type="text" class="form-control form-control-sm col-sm-8" id="total_cm_mins">
                    </div>
                    <div class="form-group row p-0 m-0">
                        <label for="inputEmail3" class="col-sm-4 col-form-label text-start">Serial No.</label>
                        <input type="text" class="form-control form-control-sm col-sm-8" id="total_cm_mins">
                    </div>
                </div>
            </div>
            <hr>
            <!-- ================================================================================================================================ -->
            <div class="col-12">
                <h4 class="font-weight-bold my-1">| Appearance Inspection</h4>
                <div class="form-group row p-0 m-0">
                    <label for="" class="col-sm-4 col-form-label">Outside Appearance</label>
                    <select id="cm_outside_app" class="form-control form-control-sm col-sm-8">
                        <option selected>Choose...</option>
                        <option>OK</option>
                        <option>NG</option>
                    </select>
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="" class="col-sm-4 col-form-label">Inside Appearance</label>
                    <select id="cm_inside_app" class="form-control form-control-sm col-sm-8">
                        <option selected>Choose...</option>
                        <option>OK</option>
                        <option>NG</option>
                    </select>
                </div>
                <div class="form-group row p-0 m-0">
                <label for="" class="col-sm-4 col-form-label">Color</label>
                <select id="cm_color_app" class="form-control form-control-sm col-sm-8">
                    <option selected>Choose...</option>
                    <option>OK</option>
                    <option>NG</option>
                </select>
            </div>
            </div>
            <hr>
            <!-- ================================================================================================================================ -->
            <div class="col-12">
                <div class="form-group row p-0 m-0">
                    <label for="partName" class="col-sm-6 col-form-label h4">Tube Breaking</label>
                    <input type="email" class="form-control form-control-sm col-sm-6" id="inputEmail3">
                </div>
                <div class="col-12">
                    <h4 class="font-weight-bold p-0 m-0">| Wall Thickness</h4>
                    <div class="form-group row p-0 m-0">
                        <label for="partName" class="col-sm-6 col-form-label">Tolerance</label>
                        <input type="email" class="form-control form-control-sm col-sm-6" id="inputEmail3">
                    </div>
                </div>
                <div class="row p-0 m-0">
                    <div class="col-sm-6 mt-3">
                        <h4 class="text-center">Start</h4>
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group input-group-sm  mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Q1</div>
                            </div>
                            <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup"
                                placeholder="Username">
                        </div>
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group  input-group-sm  mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Q2</div>
                            </div>
                            <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup"
                                placeholder="Username">
                        </div>
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group  input-group-sm  mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Q3</div>
                            </div>
                            <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup"
                                placeholder="Username">
                        </div>
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group  input-group-sm  mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Q4</div>
                            </div>
                            <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup"
                                placeholder="Username">
                        </div>
                    </div>
                    <div class="col-sm-6 mt-3">
                        <h4 class="text-center">End</h4>
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group  input-group-sm  mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Q1</div>
                            </div>
                            <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup"
                                placeholder="Username">
                        </div> <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group  input-group-sm  mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Q2</div>
                            </div>
                            <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup"
                                placeholder="Username">
                        </div> <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group  input-group-sm  mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Q3</div>
                            </div>
                            <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup"
                                placeholder="Username">
                        </div> <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group input-group-sm  mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Q4</div>
                            </div>
                            <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup"
                                placeholder="Username">
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group row p-0 m-0">
                    <label for="partName" class="col-sm-3 col-form-label">Appearance Judgement</label>
                    <input type="email" class="form-control form-control-sm col-sm-9" id="inputEmail3">
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="partName" class="col-sm-3 col-form-label">Dimension Judgement</label>
                    <input type="email" class="form-control form-control-sm col-sm-9" id="inputEmail3">
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="partName" class="col-sm-3 col-form-label">NG Quantity</label>
                    <input type="email" class="form-control form-control-sm col-sm-9" id="inputEmail3">
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="partName" class="col-sm-3 col-form-label">Defect Type</label>
                    <input type="email" class="form-control form-control-sm col-sm-9" id="inputEmail3">
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="partName" class="col-sm-3 col-form-label">Confirmed by</label>
                    <input type="email" class="form-control form-control-sm col-sm-9" id="inputEmail3">
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="partName" class="col-sm-3 col-form-label">Remarks</label>
                    <input type="email" class="form-control form-control-sm col-sm-9" id="inputEmail3">
                </div>


            </div>

            <button class="btn bg-teal btn-lg btn-block my-4">SAVE</button>
        </div>

</section>

<!-- /.row -->

<?php include 'plugins/footer.php'; ?>