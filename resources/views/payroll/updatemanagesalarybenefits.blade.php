@extends('layouts/contentLayoutMaster')
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
                        <h4 class="card-title">Salary Benefits</h4>
                    <?php }
                    ?>

                </div>
                <div class="card-body">
                   
                    <form class="form form-horizontal" action="{{url('/admin/updatemanagesalarybenefits/'.$editmanagesalarybenefits->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1 row">
                                    <div class="col-sm-8 offset-2">
                                        <label for="">Salary Benefits</label>
                                        <input type="text" class="form-control" name="salarybenfit" value="{{$editmanagesalarybenefits->salarybenfit ?? ''}}" placeholder="Enter Fullname" required />
                                        @error('salarybenfit')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-8 offset-2 mt-1">
                                        <select class="form-select" id="basicSelect" name="basicSelect">
                                        <option>{{$editmanagesalarybenefits->basicSelect ?? ''}}</option>

                                            <option>Add</option>
                                            <option>Deduct</option>
                                          
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 offset-sm-5">
                               
                                    <button type="update" class="btn btn-success me-1">Set</button>
                                    <button type="reset" class="btn btn-primary me-1">Reset</button>
                             
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