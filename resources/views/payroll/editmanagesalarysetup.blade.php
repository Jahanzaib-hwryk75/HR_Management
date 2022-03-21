+@extends('layouts/contentLayoutMaster')
@section('content')
<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <?php
                    if (isset($users->id) && $users->id != 0) { ?>
                        <h4 class="card-title">Update {{$users->username ?? ''}} details</h4>

                    <?php } else { ?>
                        <h4 class="card-title">Salary SetUp</h4>
                    <?php }
                    ?>

                </div>
                <div class="card-body">
                    <form class="form form-horizontal" action="{{url('/admin/savesalary')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1 row">
                                    <div class="col-sm-8 offset-2 mt-1">
                                        <select class="form-select" id="basicSelect" name="employee_id">
                                            @foreach($employeesget as  $employeesget)
                                            <option>{{$employeesget->firstname}}{{$employeesget->lastname}}</option>
                                            @endforeach
                                           
                                           
                                        </select>
                                    </div>
                                    <!-- <div class="col-sm-8 offset-2 mt-1">
                                        <input type="text" class="form-control" name="salarytype" value="" placeholder="Enter Salary Type" required />
                                        @error('salarytype')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div> -->
                                    <div class="col-sm-8 offset-2 mt-1">
                                       
                                        <select class="form-select" id="salarytype" name="salarytype">
                                            <option >{{$editsalary->salarytype ?? ''}}</option>
                                            <option>Salary</option>
                                            <option>Hourly</option>
                                            
                                        </select>
                                    </div>

                                    <div class="col-sm-8 offset-2 mt-1">
                                        <input type="text" class="form-control" name="basic" readonly autocomplete="off" value="{{$editsalary->basic ?? ''}}" placeholder="Enter Basic" required />
                                        @error('basic')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-8 offset-2 mt-1">
                                        <input type="text" class="form-control" name="health" value="{{$editsalary->health ?? ''}}" placeholder="Enter Health" required />
                                        @error('health')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-8 offset-2 mt-1">
                                        <input type="text" class="form-control" name="houserent" value="{{$editsalary->houserent ?? ''}}" placeholder="Enter House Rent" required />
                                        @error('houserent')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-8 offset-2 mt-1">
                                        <input type="text" class="form-control" name="bonus" value="{{$editsalary->bonus ?? ''}}" placeholder="Enter bonus" required />
                                        @error('bonus')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-8 offset-2 mt-1">
                                        <input type="text" class="form-control" name="newaddition" value="{{$editsalary->newaddition ?? ''}}" placeholder="Enter new addition" required />
                                        @error('newaddition')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-8 offset-2 mt-1">
                                        <input type="text" class="form-control" name="pf" value="{{$editsalary->pf ?? ''}}" placeholder="Enter PF" required />
                                        @error('pf')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-8 offset-2 mt-1">
                                        <input type="text" class="form-control" name="newdeduction" value="{{$editsalary->newdeduction ?? ''}}" placeholder="Enter new deduction" required />
                                        @error('newdeduction')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-8 offset-2 mt-1">
                                        <input type="text" class="form-control" name="tax" value="{{$editsalary->tax ?? ''}}" placeholder="Enter Tax" required />
                                        @error('tax')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                   
                                </div>
                            </div>
                            <div class="col-sm-8 offset-sm-5">

                                <button type="submit" class="btn btn-primary me-1">Submit</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Basic Horizontal form layout section end -->
<!-- Dropzone section start -->
<!-- <section id="dropzone-examples">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <button id="clear-dropzone" class="btn btn-outline-primary mb-1">
                        <i data-feather="trash" class="me-25"></i>
                        <span class="align-middle">Clear Dropzone</span>
                    </button>
                    <form action="#" class="dropzone dropzone-area" id="dpz-remove-all-thumb">
                        <div class="dz-message">Drop files here or click to upload.</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Dropzone section end -->
@endsection

@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/file-uploaders/dropzone.min.css')) }}">
@endsection
@section('page-style')
<!-- Page css files -->
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-file-uploader.css')) }}">
@endsection

@section('vendor-script')
<!-- vendor files -->
<script src="{{ asset(mix('vendors/js/file-uploaders/dropzone.min.js')) }}"></script>
@endsection
@section('page-script')
<!-- Page js files -->
<script src="{{ asset(mix('js/scripts/forms/form-file-uploader.js')) }}"></script>
@endsection