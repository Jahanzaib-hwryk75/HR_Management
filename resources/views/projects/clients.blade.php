@extends('layouts/contentLayoutMaster')
@section('content')
<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="card">

                <div class="card-body">
                    <?php
                    if (isset($users->id) && $users->id != 0) {
                        $url = url('/admin/user/add/' . $users->id);
                    } else {
                        $url = url('/admin/user/add');
                    }
                    ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                @if(session()->has('message'))
                                <div class="alert alert-success"> 
                                     {{ session()->get('message') }}
                                </div>
                                 @endif
                                    <div class="panel-title">
                                        <span class="title"> Add Clients</span>
                                    </div>
                                </div>
                                <form action="{{url('/admin/clientsave')}}" method="post" role="form">
                                    @csrf
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label for="client_name" class="col-sm-3 col-form-label">
                                                        Client Name<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="clientname" class="form-control" required="" placeholder="Client Name" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-2">
                                                    <label for="client_name" class="col-sm-3 col-form-label">
                                                        Country<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="country" class="form-control" required="" placeholder="Country" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-2">
                                                    <label for="project_lead" class="col-sm-3 col-form-label">
                                                        Email Address<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <input type="email" name="email" class="form-control" required="" placeholder="Email Address" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-2"> <label for="project_lead" class="col-sm-3 col-form-label">
                                                        Company<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="company" placeholder="Company Name"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-2"> <label for="project_lead" class="col-sm-3 col-form-label">
                                                        Address<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="address" placeholder="Address"/>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group row">
                                                    <label for="summary" class="col-sm-3 col-form-label">
                                                        Summary<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9"> <textarea class="form-control" required="" name="summary" id="summary" rows="4" placeholder="Summary" tabindex="10" autocomplete="off"></textarea>
                                                    </div>
                                                </div> -->
                                                <div class="form-group mt-2">
                                                    <button type="reset" class="btn btn-danger me-1">Reset</button>
                                                    <button type="submit" class="btn btn-success me-1" name="">Add Client</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection