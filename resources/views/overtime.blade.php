<?php $page = 'overtime'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Overtime
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Overtime
        @endslot
    @endcomponent



    <!-- Overtime Statistics -->
    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="stats-info">
                <h6>Overtime Employee</h6>
                <h4>12 <span>this month</span></h4>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="stats-info">
                <h6>Overtime Hours</h6>
                <h4>118 <span>this month</span></h4>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="stats-info">
                <h6>Pending Request</h6>
                <h4>23</h4>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="stats-info">
                <h6>Rejected</h6>
                <h4>5</h4>
            </div>
        </div>
    </div>
    <!-- /Overtime Statistics -->

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>OT Date</th>
                            <th class="text-center">OT Hours</th>
                            <th>OT Type</th>
                            <th>Description</th>
                            <th class="text-center">Status</th>
                            <th>Approved by</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <h2 class="table-avatar blue-link">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">John Doe</a>
                                </h2>
                            </td>
                            <td>8 Mar 2019</td>
                            <td class="text-center">2</td>
                            <td>Normal day OT 1.5x</td>
                            <td>Lorem ipsum dollar</td>
                            <td class="text-center">
                                <div class="action-label">
                                    <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                        <i class="fa fa-dot-circle-o text-purple"></i> New
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar avatar-xs"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}" alt=""></a>
                                    <a href="#">Richard Miles</a>
                                </h2>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_overtime"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_overtime"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- /Page Content -->

    @component('components.model-popup')
    @endcomponent
@endsection
