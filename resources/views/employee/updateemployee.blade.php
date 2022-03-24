@extends('layouts/contentLayoutMaster')

@section('title', 'User List')

@section('vendor-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
@endsection

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection

@section('content')
<style>
    table {
        counter-reset: section;
    }

    .count:before {
        counter-increment: section;
        content: counter(section);
    }
</style>
<!-- Basic Tables start -->
<section>
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Employee</h4>
                </div>
                <div class="table-responsive width-95-per mx-auto">
                    <div class="dt-buttons float-end" style="margin-left: 20px; margin-top: 14px;">
                        <button class="dt-button add-new btn btn-success" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#inlineForm">
                            <span>import File</span>
                        </button>
                        <button class="dt-button add-new btn btn-danger" tabindex="0" aria-controls="DataTables_Table_0" type="button" onclick="window.location.href='/admin/file-export'">
                            <span>Export File</span>
                        </button>
                        <button class="dt-button add-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" onclick="window.location.href='/admin/addemployee'">
                            <span>Add Employee</span>
                        </button>


                    </div>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        @foreach($showemployee as $showemployee)
                        <tbody>
                            <tr>
                            <td class="count"></td>
                                <td> <img class="rounded-circle" src="{{ asset('picture/'.$showemployee->pictureupload) }}" alt="No image" height="30" width="30" style="margin-right:10px"></td>
                                <td>{{$showemployee->firstname}}</td>
                                <td>{{$showemployee->lastname}}</td>
                                <td>{{$showemployee->email}}</td>
                                <td><a class="dropdown-item" href="{{url('/admin/editemployee',$showemployee->id)}}">
                                        <i data-feather="edit-2" class="me-50"></i>
                                    </a></td>
                                <td> <button class="btn btn-flat btn-sm remove-user" data-id="{{ $showemployee->id}}" data-action="{{ url('/admin/deleteemployee/',$showemployee->id) }}" onclick="deleteConfirmation({{$showemployee->id}})">
                                        <i data-feather="trash" class="me-50"></i>
                                    </button>
                                </td>

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
<!-- Basic Tables end -->

<!-- Basic Modals start -->
<section id="basic-modals">
    <div class="card-body">
        <div class="demo-inline-spacing">
            <div class="form-modal-ex">
                <!-- Modal -->
                <div class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel33">Inline Login Form</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ url('/admin/file-import')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">

                                    <div class="mb-1">
                                        <input type="file" name="file" id="file" placeholder="Upload File" class="form-control" />
                                    </div>
                                    <button type="submit" class="btn btn-primary me-1">Submit</button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- Form and scrolling Components end -->

<script src="{{ asset(mix('js/scripts/components/components-modals.js')) }}"></script>

@endsection

@section('vendor-script')
{{-- Vendor js files --}}
<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/cleave/cleave.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/cleave/addons/cleave-phone.us.js')) }}"></script>
@endsection

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js
"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js
"></script>
<script src="{{asset('swal/sweetalert.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.datatable').DataTable({
            select: true
        });
    });
</script>
<script type="text/javascript">
    function deleteConfirmation(id) {
        swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
        }).then(function(e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'GET',
                    url: "{{url('admin/deleteemployee')}}/" + id,
                    data: {
                        _token: CSRF_TOKEN
                    },
                    dataType: 'JSON',
                    success: function(results) {

                        if (results.status === true) {
                            swal.fire({
                                title: "Done",
                                icon: 'success',
                                text: "Data Deleted Successfully",
                                type: "success"
                            }).then(function() {
                                location.reload();
                            });
                        } else {
                            swal.fire({
                                title: "Ops...",
                                icon: 'error',
                                text: "Somthing Went Wrong",
                                type: "error"
                            }).then(function() {
                                location.reload();
                            });
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function(dismiss) {
            return false;
        })
    }
</script>
<script>
    $(function() {
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/admin/status',
                data: {
                    'status': status,
                    'id': id
                },
                success: function(data) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Status Changed',
                        showConfirmButton: false,
                        timer: 1100
                    })
                }
            });
        })
    })
</script>