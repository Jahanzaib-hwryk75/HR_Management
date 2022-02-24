@extends('layouts/contentLayoutMaster')
@section('content')
<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                @if(session()->has('message'))
                   <div class="alert alert-success"> 
                    {{ session()->get('message') }}
                  </div>
                  @endif
                    <?php
                    if (isset($users->id) && $users->id != 0) { ?>
                        <h4 class="card-title">Update {{$users->username ?? ''}} details</h4>

                    <?php } else { ?>
                        <h4 class="card-title">Add new user</h4>
                    <?php }
                    ?>

                </div>
                <div class="card-body">
                    <?php
                    if (isset($users->id) && $users->id != 0) {
                        $url = url('/admin/user/add/' . $users->id);
                    } else {
                        $url = url('/admin/user/add');
                    }
                    ?>
                    <form class="form form-horizontal" action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1 row">
                                <div class="col-sm-8 offset-2 mt-1">
                                        <select class="form-select" id="basicSelect" name="username">
                                        <option>Select User</option>
                                            @isset($data))
                                            @foreach($data as $data)
                                            <option>{{$data->username}}</option>
                                            @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                    <div class="col-sm-8 offset-2 mt-1">
                                        <input type="text" class="form-control" name="projectname" value="" placeholder="Project Name" required />
                                    </div>
                                    <div class="col-sm-8 offset-2 mt-1">
                                        <input type="text" class="form-control" name="projectdetails" value="" placeholder="Project Details" required />
                                    </div> 
                                </div>
                            </div>
                            <div class="col-sm-8 offset-sm-5">
                                    <button type="submit" class="btn btn-success me-1">Assign</button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

