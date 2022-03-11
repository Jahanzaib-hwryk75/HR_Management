@extends('layouts/contentLayoutMaster')
@section('content')
<!-- Basic Horizontal form layout section start -->
<section>
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Position</h4>
                </div>
                <div class="table-responsive width-95-per mx-auto">

                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                       @foreach($showemployee as $showemployee)
                        <tbody>
                            <tr>
                                <td>{{$showemployee->id}}</td>
                                <td> <img class="rounded-circle" src="{{ asset('picture/'.$showemployee->pictureupload) }}" alt="No image" height="30" width="30" style="margin-right:10px"></td>
                                <td>{{$showemployee->firstname}}</td>
                                <td>{{$showemployee->lastname}}</td>
                                <td>{{$showemployee->email}}</td>
                                <td><a href="{{url('/admin/',$showemployee->id)}}"><img src="\icon\images1.jpg" alt="" width="10%"></a>
                                    <a href="/admin/deleteemployee/{{$showemployee->id}}"><img src="\icon\images.png" alt="" width="10%"></a></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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