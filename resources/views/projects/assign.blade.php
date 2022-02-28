@extends('layouts/contentLayoutMaster')
@section('content')
<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="card">
                <!-- <div class="card-header">

                   
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif

                </div> -->
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
                                    <div class="panel-title">
                                        <span class="title"> Create Project</span>
                                    </div>
                                </div>
                                <form action="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <div class="panel-body">

                                        <div class="row">

                                            <div class="col-sm-6">



                                                <div class="form-group row">
                                                    <label for="project_name" class="col-sm-3 col-form-label">
                                                        Project Name<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="project_name" class="form-control" required="" placeholder="Project Name" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-2">
                                                    <label for="client" class="col-sm-3 col-form-label">
                                                        Client<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <div class="row">
                                                            <div class="col-sm-9">
                                                                <input type="text" name="client" id="client" class="form-control"placeholder="Client Name or Email">
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <a href="#"  class="btn btn-success">Add Client</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="project_lead" class="col-sm-3 col-form-label">
                                                        Project Lead<i class="text-danger">*</i></label>
                                                        <div class="col-sm-9">
                                                        <input type="text" name="project_name" class="form-control" required="" placeholder="Project Name" autocomplete="off">
                                                    </div>

                                                </div>

                                                <div class="form-group row mt-2"> <label for="project_lead" class="col-sm-3 col-form-label">
                                                        Team Members<i class="text-danger">*</i></label>
                                                        <div class="col-sm-9">
                                                        <input type="text" name="project_name" class="form-control" required="" placeholder="Project Name" autocomplete="off">
                                                    </div>
                                                </div>

                                                <div class="form-group row">

                                                    <label for="approximate_tasks" class="col-sm-3 col-form-label">
                                                        Approximate Tasks<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">

                                                        <input type="number" name="approximate_tasks" class="form-control" required="" placeholder="Approximate Tasks" autocomplete="off">

                                                    </div>

                                                </div>

                                                <div class="form-group row">

                                                    <label for="summary" class="col-sm-3 col-form-label">
                                                        Summary<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">

                                                        <textarea class="form-control" required="" name="summary" id="summary" rows="4" placeholder="Summary" tabindex="10" autocomplete="off"></textarea>

                                                    </div>

                                                </div>

                                                <div class="form-group row">

                                                    <label for="project_start_date" class="col-sm-3 col-form-label">
                                                        Start Date<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">

                                                        <input type="text" name="project_start_date" class="form-control datepicker" required="" placeholder="Project start date" autocomplete="off">

                                                    </div>

                                                </div>

                                                <div class="form-group row">

                                                    <label for="project_duration" class="col-sm-3 col-form-label">
                                                        Project Duration<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">

                                                        <input type="number" name="project_duration" class="form-control" required="" placeholder="In Days" autocomplete="off">

                                                    </div>

                                                </div>

                                                <div class="form-group form-group-margin text-right">
                                                    <button type="reset" class="btn btn-primary w-md m-b-5" autocomplete="off">Reset</button>
                                                    <button type="button" onclick="alert('Your Are In Demo Mode')" class="btn btn-success w-md m-b-5" autocomplete="off">Add</button>
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