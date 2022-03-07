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

<form action="{{url('/admin/nametimesave')}}" method="post" role="form">
 @csrf
  <label>Name</label>
  <input type="text" name="name" id="name" placeholder="Enter Name"/>
  <button type="submit" class="btn-success" name="save">Add Name</button>
</button>
</form>
<div class="row" id="basic-table">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h1 class="card-title text-success">Assigned Projects</h1>
      </div>
      <div class="table-responsive width-95-per mx-auto">
        <div class="dt-buttons float-end" style="margin-left: 20px; margin-top: 14px;">
          <button class="dt-button add-new btn btn-success" tabindex="0" aria-controls="DataTables_Table_0" type="button" onclick="window.location.href='/admin/assign'">
            <span>Assign Project</span>
          </button>
          <button class="dt-button add-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" onclick="window.location.href='/admin/addclient'">
            <span>Add Clients</span>
          </button>
        </div>
        <table class="table datatable">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Time In</th>
              <th>Time Out</th>
              <th>Total Time</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @isset($data)
          @foreach($data as $data)
            <tr>
            <td>{{$data->id}}</td>
              <td>{{$data->name}}</td>
              <td></td>
              <td></td>
              <!-- <td>{{$data->clientname}}</td> -->
              <td></td>
              <td class="d-flex">
              <a class="btn btn-success col-sm-6 "  href="{{url('/admin/checkin')}}">Clock In</a>
                <a class="btn btn-danger col-sm-6" href="{{url('/admin/checkout/{id}')}}">Clock Out</a>
              </td>
            </tr>
            @endforeach
            @endisset
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Basic Tables end -->
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
          type: 'POST',
          url: "{{url('admin/user/delete')}}/" + id,
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