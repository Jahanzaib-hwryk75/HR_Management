<div class="content">

    <!-- load messages -->
    <div class="se-pre-con" style="display: none;"></div>
    <!-- load custom page -->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd">

                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>
                        </h4>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="col-sm-5 col-md-5">


                        <form action="https://newhrm.bdtask.com/hrm_v4.4_demo/payroll/Payroll/create_salary_generate" id="salary_form" method="post" accept-charset="utf-8">

                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Salary Month</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control monthYearPicker hasDatepicker" name="name" placeholder="Salary Month" id="name" autocomplete="off">


                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button type="reset" class="btn btn-primary w-md m-b-5" autocomplete="off">Reset</button>
                                <button type="button" onclick="alert('You Are In Demo Mode')" class="btn btn-success w-md m-b-5" autocomplete="off">Generate </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-7 col-md-7">
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Salary Name</th>
                                    <th>Generate Date</th>
                                    <th>Generate By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>1</td>
                                    <td>December 2021</td>
                                    <td>2021-12-15</td>
                                    <td>jhon Anderson</td>

                                    <td class="center">


                                        <a onclick="alert('You Are In Demo Mode')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr class="even gradeC">
                                    <td>2</td>
                                    <td>March 2021</td>
                                    <td>2021-03-06</td>
                                    <td>jhon Anderson</td>

                                    <td class="center">


                                        <a onclick="alert('You Are In Demo Mode')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>


                            </tbody>
                        </table> <!-- /.table-responsive -->

                    </div>

                </div>
            </div>
        </div>


    </div>
    <script src="https://newhrm.bdtask.com/hrm_v4.4_demo/assets/js/payroll.js" type="text/javascript"></script>

</div>