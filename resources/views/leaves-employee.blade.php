<?php $page = 'leaves-employee'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Leaves
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Leaves
        @endslot
    @endcomponent


    <!-- Leave Statistics -->
    <div class="row">
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Annual Leave</h6>
                <h4>12</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Medical Leave</h6>
                <h4>3</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Other Leave</h6>
                <h4>4</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Remaining Leave</h6>
                <h4>5</h4>
            </div>
        </div>
    </div>
    <!-- /Leave Statistics -->

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th>Leave Type</th>
                            <th>From</th>
                            <th>To</th>
                            <th>No of Days</th>
                            <th>Reason</th>
                            <th class="text-center">Status</th>
                            <th>Approved by</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Casual Leave</td>
                            <td>8 Mar 2019</td>
                            <td>9 Mar 2019</td>
                            <td>2 days</td>
                            <td>Going to Hospital</td>
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
                                            data-bs-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Medical Leave</td>
                            <td>27 Feb 2019</td>
                            <td>27 Feb 2019</td>
                            <td>1 day</td>
                            <td>Going to Hospital</td>
                            <td class="text-center">
                                <div class="action-label">
                                    <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                        <i class="fa fa-dot-circle-o text-success"></i> Approved
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
                                            data-bs-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>LOP</td>
                            <td>24 Feb 2019</td>
                            <td>25 Feb 2019</td>
                            <td>2 days</td>
                            <td>Personnal</td>
                            <td class="text-center">
                                <div class="action-label">
                                    <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                        <i class="fa fa-dot-circle-o text-success"></i> Approved
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
                                            data-bs-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Paternity Leave</td>
                            <td>13 Feb 2019</td>
                            <td>17 Feb 2019</td>
                            <td>5 days</td>
                            <td>Going to Hospital</td>
                            <td class="text-center">
                                <div class="action-label">
                                    <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                        <i class="fa fa-dot-circle-o text-danger"></i> Declined
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar avatar-xs"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"
                                            alt=""></a>
                                    <a href="#">Richard Miles</a>
                                </h2>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Casual Leave</td>
                            <td>30 Jan 2019</td>
                            <td>30 Jan 2019</td>
                            <td>Second Half</td>
                            <td>Going to Hospital</td>
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
                                            src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"
                                            alt=""></a>
                                    <a href="#">Richard Miles</a>
                                </h2>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Hospitalisation</td>
                            <td>15 Jan 2019</td>
                            <td>25 Jan 2019</td>
                            <td>10 days</td>
                            <td>Going to Hospital</td>
                            <td class="text-center">
                                <div class="action-label">
                                    <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                        <i class="fa fa-dot-circle-o text-success"></i> Approved
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar avatar-xs"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"
                                            alt=""></a>
                                    <a href="#">Richard Miles</a>
                                </h2>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Casual Leave</td>
                            <td>13 Jan 2019</td>
                            <td>14 Jan 2019</td>
                            <td>2 days</td>
                            <td>Going to Hospital</td>
                            <td class="text-center">
                                <div class="action-label">
                                    <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                        <i class="fa fa-dot-circle-o text-success"></i> Approved
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar avatar-xs"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"
                                            alt=""></a>
                                    <a href="#">Richard Miles</a>
                                </h2>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Casual Leave</td>
                            <td>10 Jan 2019</td>
                            <td>10 Jan 2019</td>
                            <td>First Half</td>
                            <td>Going to Hospital</td>
                            <td class="text-center">
                                <div class="action-label">
                                    <a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
                                        <i class="fa fa-dot-circle-o text-danger"></i> Declined
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar avatar-xs"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"
                                            alt=""></a>
                                    <a href="#">Richard Miles</a>
                                </h2>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
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
