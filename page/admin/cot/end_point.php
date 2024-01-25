<?php include 'plugins/navbar.php'; ?>
<?php include 'plugins/sidebar/end_point_bar.php'; ?>

<section class="container-md">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-white">
        <h4 class="font-weight-bold my-1">| END POINT</h4>
        <div class="row">
            <div class="col-6 p-0 m-0">
                <div class="form-group row p-0 m-0">
                    <label for="partName" class="col-sm-4 col-form-label">Part Name</label>
                    <select id="part_name" class="form-control form-control-sm form-control-sm col-sm-8">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Quantity(m)</label>
                    <input type="email" class="form-control  form-control-sm col-sm-8" id="inputEmail3">
                </div>
                <div class="form-group row m-0">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Time Start
                    </label>
                    <div class="input-group col-sm-8 m-0 p-0">
                        <div class="input-group-prepend">
                            <button class="btn btn-sm  bg-teal" type="button">&nbsp;Start&nbsp;</button>
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label=""
                            aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="form-group row m-0 mt-1">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Time End
                    </label>
                    <div class="input-group col-sm-8 m-0 p-0">
                        <div class="input-group-prepend">
                            <button class="btn btn-danger btn-sm" type="button">&nbsp; End &nbsp;</button>
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label=""
                            aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>

            <!-- ============================================== -->
            <div class="col-6 p-0 m-0">
                <div class="form-group row p-0 m-0">
                    <label for="inputEmail3" class="col-sm-4 col-form-label text-right">Inspected By</label>
                    <input type="email" class="form-control form-control-sm col-sm-8" id="inputEmail3">
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="partName" class="col-sm-4 col-form-label text-right">Shift</label>
                    <select id="inputState" class="form-control form-control-sm col-sm-8">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="inputEmail3" class="col-sm-4 col-form-label text-right">Inspection Date</label>
                    <input type="email" class="form-control form-control-sm col-sm-8" id="inputEmail3">
                </div>
                <div class="form-group row p-0 m-0">
                    <label for="inputEmail3" class="col-sm-4 col-form-label text-right">Total Mins</label>
                    <input type="email" class="form-control form-control-sm col-sm-8" id="inputEmail3">
                </div>
            </div>
        </div>
        <hr>
        <!-- ================================================================================================================================ -->
        <h4 class="font-weight-bold my-1">| Appearance Inspection</h4>
        <div class="col-12">
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
                <label for="inputEmail3" class="col-sm-4 col-form-label">Slit Condition</label>
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
            <h4 class="font-weight-bold my-1">| Inside Diameter</h4>
            <div class="form-group row m-0 p-0">
                <label for="partName" class="col-sm-4 col-form-label">Tolerance</label>
                <select id="part_name" class="form-control form-control-sm col-sm-8">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group row m-0 p-0">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Start</label>
                <select id="part_name" class="form-control form-control-sm col-sm-8">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group row m-0 p-0">
                <label for="inputEmail3" class="col-sm-4 col-form-label">End</label>
                <select id="part_name" class="form-control form-control-sm col-sm-8">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
           
        </div>
        <hr>
        <!-- ================================================================================================================================ -->
        <div class="col-12">
            <h4 class="font-weight-bold my-1">| Outside Diameter</h4>
            <div class="form-group row p-0 m-0">
                <label for="partName" class="col-sm-4 col-form-label">Tolerance</label>
                <select id="part_name" class="form-control form-control-sm col-sm-8">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group row p-0 m-0">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Start</label>
                <select id="part_name" class="form-control form-control-sm col-sm-8">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group row p-0 m-0">
                <label for="inputEmail3" class="col-sm-4 col-form-label">End</label>
                <select id="part_name" class="form-control form-control-sm col-sm-8">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="col-12">
            <h4 class="font-weight-bold my-1">| Wall Thickness</h4>
            <div class="form-group row p-0 m-0">
                <label for="partName" class="col-sm-4 col-form-label">Tolerance</label>
                <input type="email" class="form-control form-control-sm col-sm-4" id="inputEmail3">
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
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q2</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q3</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q4</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="">
                </div>
            </div>
            <div class="col-sm-4 mt-1">
                <h4 class="text-center p-0 m-0">Middle</h4>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q1</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q2</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup"
                        placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q3</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q4</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="">
                </div>
            </div>
            <div class="col-sm-4 mt-1">
                <h4 class="text-center p-0 m-0">End</h4>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q1</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q2</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup"
                        placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q3</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="">
                </div>
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Q4</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup" placeholder="">
                </div>
            </div>
        </div>
        <hr>
        <!-- ================================================================================================================================ -->
        <div class="col-12">
            <h4 class="font-weight-bold my-1">| Tube Breaking</h4>
            <div class="form-group row p-0 m-0">
                <label for="partName" class="col-sm-6 col-form-label">Using Round Bar</label>
                <input type="email" class="form-control form-control-sm col-sm-6" id="inputEmail3">
            </div>
            <div class="form-group row p-0 m-0">
                <label for="partName" class="col-sm-6 col-form-label">Using Bare Hands</label>
                <input type="email" class="form-control form-control-sm col-sm-6" id="inputEmail3">
            </div>
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

        <button class="btn bg-teal btn-lg btn-block my-2">SAVE</button>
    </div>

</section>

<!-- /.row -->

<?php include 'plugins/footer.php'; ?>