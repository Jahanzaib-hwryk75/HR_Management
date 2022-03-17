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
                                    @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                    @endif
                                    <div class="panel-title">
                                        <span class="title"> Create Project</span>
                                    </div>
                                </div>
                                <form action="{{url('/admin/assign')}}" method="post" role="form">
                                    @csrf
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label for="project_name" class="col-sm-3 col-form-label">
                                                        Project Name<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="projectname" class="form-control" required="" placeholder="Project Name" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-2">
                                                    <label for="client" class="col-sm-3 col-form-label">
                                                        Client<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <div class="row">
                                                            <!-- <div class="col-sm-9">
                                                                <input type="text" name="clientname" id="client" class="form-control" placeholder="Client Name or Email">
                                                            </div> -->
                                                            <div class="col-sm-9 ">
                                                                <select class="form-select" id="clientname" name="clientname">
                                                                    <option>Select Client</option>
                                                                    @isset($data)
                                                                    @foreach($data as $data)
                                                                    <option value="{{$data->id}}">{{$data->clientname}}</option>
                                                                    @endforeach
                                                                    @endisset
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-2 ">
                                                                <button class="dt-button add-new btn btn-success" type="button" onclick="window.location.href='/admin/addclient'">
                                                                    <span>Add Clients</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-2">
                                                    <label for="project_lead" class="col-sm-3 col-form-label">
                                                        Project Lead<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <select class="form-select" id="projectlead" name="projectlead">
                                                            <option>Select Project Leader</option>
                                                            @isset($employeedata)
                                                            @foreach($employeedata as $employeedata)
                                                            <option value="{{$employeedata->id}}">{{$employeedata->firstname}}</option>
                                                            @endforeach
                                                            @endisset
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group row mt-2"> <label for="project_lead" class="col-sm-3 col-form-label">
                                                        Team Members<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="teammembers" class="form-control" placeholder="Team Members">
                                                    </div>
                                                </div> -->
                                                <div class="form-group row mt-2"> <label for="project_lead" class="col-sm-3 col-form-label">
                                                        Start Date<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <input type="date" class="form-control" name="startdate" />
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-2"> <label for="project_lead" class="col-sm-3 col-form-label">
                                                        End Date<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <input type="date" class="form-control" name="enddate" />
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-2">
                                                    <label for="project_duration" class="col-sm-3 col-form-label">
                                                        Project Duration<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9">
                                                        <input type="number" min="1" name="projectduration" class="form-control" placeholder="In Days">
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group row">
                                                    <label for="summary" class="col-sm-3 col-form-label">
                                                        Summary<i class="text-danger">*</i></label>
                                                    <div class="col-sm-9"> <textarea class="form-control" required="" name="summary" id="summary" rows="4" placeholder="Summary" tabindex="10" autocomplete="off"></textarea>
                                                    </div>
                                                </div> -->
                                                <div class="form-group mt-2">
                                                    <button type="reset" class="btn btn-danger me-1 ">Reset</button>
                                                    <button type="submit" class="btn btn-success me-1" name="">Submit</button>
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