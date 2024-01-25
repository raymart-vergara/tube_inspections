<?php include 'plugins/navbar.php'; ?>
<?php include 'plugins/sidebar/mass_production_bar.php'; ?>

<section class="container-lg">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-white">
        <h3 class="font-weight-bold my-3">MASS PRODUCTION</h3>
        <div class="row p-0 m-0">
            <div class="col-6">
                <div class="form-group row p-0 m-0">
                    <label for="partName" class="col-sm-4 col-form-label">Part Name</label>
                    <select id="part_name" class="form-control form-control-sm col-sm-7">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Quantity(m)</label>
                    <input type="email" class="form-control form-control-sm col-sm-7" id="inputEmail3">
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Time Start
                    </label>
                    <div class="input-group input-group-sm  input-group-sm  col-sm-7 m-0 p-0">
                        <div class="input-group-prepend">
                            <button class="btn  bg-teal" type="button">&nbsp;Start&nbsp;</button>
                        </div>
                        <input type="text" class="form-control form-control-sm" placeholder="" aria-label=""
                            aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="form-group row text-start">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Time End
                    </label>
                    <div class="input-group input-group-sm  input-group-sm  col-sm-7 m-0 p-0">
                        <div class="input-group-prepend">
                            <button class="btn btn-danger" type="button">&nbsp; End &nbsp;</button>
                        </div>
                        <input type="text" class="form-control form-control-sm" placeholder="" aria-label=""
                            aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Total Mins</label>
                    <input type="email" class="form-control form-control-sm col-sm-7" id="inputEmail3">
                </div>
            </div>

            <!-- ============================================== -->
            <div class="col-6">
                <div class="form-group row p-0 m-0">
                    <label for="inputEmail3" class="col-sm-5 col-form-label text-right">Inspected By</label>
                    <input type="email" class="form-control form-control-sm col-sm-7" id="inputEmail3">
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="partName" class="col-sm-5 col-form-label text-right">Shift</label>
                    <select id="inputState" class="form-control form-control-sm col-sm-7">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="inputEmail3" class="col-sm-5 col-form-label text-right">Inspection Date</label>
                    <input type="email" class="form-control form-control-sm col-sm-7" id="inputEmail3">
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="inputEmail3" class="col-sm-5 col-form-label text-right">Lot no.</label>
                    <input type="email" class="form-control form-control-sm col-sm-7" id="inputEmail3">
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="inputEmail3" class="col-sm-5 col-form-label text-right">Serial no.</label>
                    <input type="email" class="form-control form-control-sm col-sm-7" id="inputEmail3">
                </div>
            </div>
        </div>
        <hr>
        <!-- ================================================================================================================================ -->
       
        <div class="col-12">
        <h3 class="font-weight-bold my-3">Appearance Inspection</h3>
            <div class="form-group row p-0 m-0">
                <label for="partName" class="col-sm-4 col-form-label">Outside Appearance</label>
                <select id="part_name" class="form-control form-control-sm col-sm-8">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group row p-0 m-0">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Inside Appearance</label>
                <select id="part_name" class="form-control form-control-sm col-sm-8">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group row p-0 m-0">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Color</label>
                <select id="part_name" class="form-control form-control-sm col-sm-8">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
        </div>
        <hr>
        <!-- ================================================================================================================================ -->
        <div class="col-12">
            <h3 class="font-weight-bold my-3">Tube Breaking</h3>
            <div class="form-group row p-0 m-0">
                <label for="partName" class="col-sm-6 col-form-label">Tube Breaking</label>
                <input type="email" class="form-control form-control-sm col-sm-6" id="inputEmail3">
            </div>
            <div class="col-12">
            <h3 class="font-weight-bold my-3">Wall Thickness</h3>
            <div class="form-group row p-0 m-0">
                <label for="partName" class="col-sm-6 col-form-label">Tolerance</label>
                <input type="email" class="form-control form-control-sm col-sm-6" id="inputEmail3">
            </div>
        </div>
        <div class="row p-0 m-0">
            <div class="col-sm-4 mt-3">
                <h4 class="text-center">Start</h4>
                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group input-group-sm  mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q1</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="Username">
                </div>
                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group  input-group-sm  mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q2</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="Username">
                </div>
                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group  input-group-sm  mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q3</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="Username">
                </div>
                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group  input-group-sm  mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q4</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="Username">
                </div>
            </div>
            <div class="col-sm-4 mt-3">
                <h4 class="text-center">Middle</h4>
                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group   input-group-sm  mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q1</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="Username">
                </div> <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group  input-group-sm  mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q2</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="Username">
                </div> <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group  input-group-sm  mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q3</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="Username">
                </div> <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group   input-group-sm  mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q4</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="Username">
                </div>
            </div>
            <div class="col-sm-4 mt-3">
                <h4 class="text-center">End</h4>
                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group  input-group-sm  mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q1</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="Username">
                </div> <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group  input-group-sm  mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q2</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="Username">
                </div> <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group  input-group-sm  mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q3</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="Username">
                </div> <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group input-group-sm  mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q4</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="Username">
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