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
                                                                <input type="text" name="client" id="client" class="form-control" placeholder="Client Name or Email">
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <button type="button" class="btn btn-success">Add Client</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-2">
                                                    <label for="project_lead" class="col-sm-3 col-form-label">
                                                        Project Lead<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="project_name" class="form-control" required="" placeholder="Project Name" autocomplete="off">
                                                    </div>

                                                </div>

                                                <div class="form-group row mt-2"> <label for="project_lead" class="col-sm-3 col-form-label">
                                                        Team Members<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="project_name" class="form-control" placeholder="Team Members">
                                                    </div>
                                                </div>
                                                <div class="form-group row"> <label for="project_lead" class="col-sm-3 col-form-label">
                                                        Start Date<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <input type="date" class="form-control" name="datestart" />
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-2"> <label for="project_lead" class="col-sm-3 col-form-label">
                                                        End Date<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <input type="date" class="form-control" name="datestart" />
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-2">
                                                    <label for="project_duration" class="col-sm-3 col-form-label">
                                                        Project Duration<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <input type="number" min="1" max="5" name="project_duration" class="form-control" placeholder="In Days">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="summary" class="col-sm-3 col-form-label">
                                                        Summary<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9"> <textarea class="form-control" required="" name="summary" id="summary" rows="4" placeholder="Summary" tabindex="10" autocomplete="off"></textarea>
                                                    </div>

                                                </div>
                                                <div class="form-group mt-2">
                                                    <button type="submit" class="btn btn-danger me-1">Reset</button>
                                                    <button type="submit" class="btn btn-success me-1">Assign new</button>
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