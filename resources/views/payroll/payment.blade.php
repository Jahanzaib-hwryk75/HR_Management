@extends('layouts/contentLayoutMaster')
@section('content')
<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
<div class="row">
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Payment Form</h4>
            </div>
            <div class="card-body">
                <form class="form form-horizontal" action="{{ url('/admin/savedutytype')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-1 row">
                                <div class="col-sm-8 offset-2">
                                    <label>Employee Name</label>
                                    <input type="text" class="form-control" id="dutytime" name="employeename" placeholder="Employee Name" required />
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <div class="col-sm-8 offset-2">
                                    <label>Total Salery</label>
                                    <input type="text" class="form-control" id="dutytime" name="totalsalery" placeholder="Total Salery" required />
                                </div>
                                <div class="col-sm-8 offset-2 mt-2">
                                    <label>Working Hours</label>
                                    <input type="text" class="form-control" id="dutytime" name="workinghours" placeholder="Working Hours" required />
                                </div>
                                <div class="col-sm-8 offset-2 mt-2">
                                    <label>Working Period</label>
                                    <input type="text" class="form-control" id="dutytime" name="workingperiod" placeholder="Working Period" required />
                                </div>
                                <div class="col-sm-8 offset-2 mt-2">
                                    <label>Payment Type</label>
                                    <select class="form-control">
                                        <option>Full</option>
                                        <option>Full</option>
                                    </select>
                                </div>
                                <div class="col-sm-8 offset-2 mt-2">
                                    <label>Bank Name</label>
                                    <select class="form-control">
                                        <option>HBL</option>
                                        <option>MCB</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 offset-sm-5">
                            <button type="reset" class="btn btn-danger me-1">Cancel</button>
                            <button type="submit" class="btn btn-success me-1">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection