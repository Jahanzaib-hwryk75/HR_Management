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
            <h4 class="card-title">Update</h4>
          <?php }
          ?>

        </div>
        <div class="card-body">

          <form class="form form-horizontal" action="{{ url('/admin/updateapplications')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-8 offset-2">
                    <label for="">Enter Full Name</label>
                    <input type="text" readonly autocomplete="off" class="form-control" name="name" value="{{$user->name ?? ''}}" placeholder="Enter Fullname" required />
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-sm-8 offset-2 mt-1">
                  <label for="">Enter Your Rank</label>
                    <input type="text" readonly autocomplete="off" class="form-control" name="rank" value="{{$user->rank ?? ''}}" placeholder="Enter Your Rank" required />
                    @error('rank')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-sm-8 offset-2 mt-1">
                  <label for="">Leave Type</label>
                  <input type="text" readonly autocomplete="off" class="form-control" name="rank" value="{{$user->type ?? ''}}" placeholder="Enter Your Rank" required />
                     
                     
                  
                  </div>

                  <div class="col-sm-8 offset-2 mt-1">
                  <label for="">Select Date From</label>
                    <input type="date" readonly autocomplete="off" value="{{$user->datestart ?? ''}}" class="form-control" name="datestart" placeholder="Enter date" required />

                  </div>

                  <div class="col-sm-8 offset-2 mt-1">
                  <label for="">Select Date To</label>
                    <input type="date" readonly autocomplete="off" class="form-control" name="dateend" value="{{$user->dateend ?? ''}}" placeholder="Enter date" required />
                  </div>
                  <div class="col-sm-8 offset-2 mt-1">
                  <label for="">Approved Start Date</label>
                    <input type="date" class="form-control" name="approvedstartdate" required />
                  </div>
                  <div class="col-sm-8 offset-2 mt-1">
                  <label for="">Approved End Date</label>
                    <input type="date" class="form-control" name="approvedenddate" required />
                  </div>
                  <div class="col-sm-8 offset-2 mt-1">
                  <label for="">Select Status</label>
                    <select class="form-select" id="basicSelect" name="status">
                    <option></option>
                      <option>Approved</option>
                      <option>Decline</option>
                    </select> 
                  </div>

                  <div class="col-sm-8 offset-2 mt-1">
                  <label for="">Please Type Leave Description</label>
                  <input type="text" readonly autocomplete="off" class="form-control" name="rank" value="{{$user->desc ?? ''}}" placeholder="Enter Your Rank" required />
                    <!-- <textarea id="textarea-default" readonly autocomplete="off" name="desc"  placeholder="{{$user->desc}}" rows="5"  class="form-control" data-v-3bcd05f2=""></textarea> -->
                    @error('desc')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>



                </div>
              </div>
              <div class="col-sm-8 offset-sm-5">
                <?php
                if (isset($users->id) && $users->id != 0) { ?>
                  <button type="submit" class="btn btn-primary me-1">Update</button>
                <?php  } else { ?>
                  <button type="submit" class="btn btn-primary me-1">Submit</button>
                <?php }
                ?>
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