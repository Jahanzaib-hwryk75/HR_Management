@extends('layouts/contentLayoutMaster')

@section('title', 'Modals')

@section('content')
<!-- Basic Modals start -->
<section id="basic-modals">
    <div class="card-body">
        <div class="demo-inline-spacing">
            <div class="form-modal-ex">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
                    Login Form
                </button>
                <!-- Modal -->
                <div class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel33">Inline Login Form</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="#">
                                <div class="modal-body">
                                    <label>Email: </label>
                                    <div class="mb-1">
                                        <input type="text" placeholder="Email Address" class="form-control" />
                                    </div>

                                    <label>Password: </label>
                                    <div class="mb-1">
                                        <input type="password" placeholder="Password" class="form-control" />
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- Form and scrolling Components end -->
@endsection

@section('page-script')
<!-- Page js files -->
<script src="{{ asset(mix('js/scripts/components/components-modals.js')) }}"></script>
@endsection