<?php $page = 'leaves'; ?>
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
                <h6>Today Presents</h6>
                <h4>12 / 60</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Planned Leaves</h6>
                <h4>8 <span>Today</span></h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Unplanned Leaves</h6>
                <h4>0 <span>Today</span></h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Pending Requests</h6>
                <h4>12</h4>
            </div>
        </div>
    </div>
    <!-- /Leave Statistics -->

    @component('components.searchfilter')
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th>Employee</th>
                            <th>Leave Type</th>
                            <th>From</th>
                            <th>To</th>
                            <th>No of Days</th>
                            <th>Reason</th>
                            <th class="text-center">Status</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    <a href="#">Richard Miles <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td>Casual Leave</td>
                            <td>8 Mar 2019</td>
                            <td>9 Mar 2019</td>
                            <td>2 days</td>
                            <td>Going to Hospital</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-purple"></i> New
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-purple"></i> New</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i>
                                            Pending</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i>
                                            Approved</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                    </div>
                                </div>
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
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    <a> John Doe <span>Web Designer</span></a>
                                </h2>
                            </td>
                            <td>Medical Leave</td>
                            <td>27 Feb 2019</td>
                            <td>27 Feb 2019</td>
                            <td>1 day</td>
                            <td>Going to Hospital</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-success"></i> Approved
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-purple"></i> New</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i>
                                            Pending</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i>
                                            Approved</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                    </div>
                                </div>
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
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    <a>John Smith <span>Android Developer</span></a>
                                </h2>
                            </td>
                            <td>LOP</td>
                            <td>24 Feb 2019</td>
                            <td>25 Feb 2019</td>
                            <td>2 days</td>
                            <td>Personnal</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-success"></i> Approved
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-purple"></i> New</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#approve_leave"><i
                                                class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                    </div>
                                </div>
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
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    <a>Mike Litorus <span>IOS Developer</span></a>
                                </h2>
                            </td>
                            <td>Paternity Leave</td>
                            <td>13 Feb 2019</td>
                            <td>17 Feb 2019</td>
                            <td>5 days</td>
                            <td>Going to Hospital</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-danger"></i> Declined
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-purple"></i> New</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#approve_leave"><i
                                                class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                    </div>
                                </div>
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
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="assets/img/profiles/avatar-24.jpg"></a>
                                    <a>Richard Parker <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td>Casual Leave</td>
                            <td>30 Jan 2019</td>
                            <td>31 Jan 2019</td>
                            <td>2 days</td>
                            <td>Going to Hospital</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-purple"></i> New
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-purple"></i> New</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#approve_leave"><i
                                                class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                    </div>
                                </div>
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
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-08.jpg') }}"></a>
                                    <a>Catherine Manseau <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td>Maternity Leave</td>
                            <td>5 Jan 2019</td>
                            <td>15 Jan 2019</td>
                            <td>10 days</td>
                            <td>Going to Hospital</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-success"></i> Approved
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-purple"></i> New</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#approve_leave"><i
                                                class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                    </div>
                                </div>
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
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="assets/img/profiles/avatar-15.jpg"></a>
                                    <a>Buster Wigton <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td>Hospitalisation</td>
                            <td>15 Jan 2019</td>
                            <td>25 Jan 2019</td>
                            <td>10 days</td>
                            <td>Going to Hospital</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-success"></i> Approved
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-purple"></i> New</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#approve_leave"><i
                                                class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                    </div>
                                </div>
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
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="assets/img/profiles/avatar-20.jpg"></a>
                                    <a>Melita Faucher <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td>Casual Leave</td>
                            <td>13 Jan 2019</td>
                            <td>14 Jan 2019</td>
                            <td>2 days</td>
                            <td>Going to Hospital</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-danger"></i> Declined
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-purple"></i> New</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#approve_leave"><i
                                                class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                    </div>
                                </div>
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
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-03.jpg') }}"></a>
                                    <a>Tarah Shropshire <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td>Casual Leave</td>
                            <td>10 Jan 2019</td>
                            <td>10 Jan 2019</td>
                            <td>1 day</td>
                            <td>Going to Hospital</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-purple"></i> New
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-purple"></i> New</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#approve_leave"><i
                                                class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                    </div>
                                </div>
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
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="assets/img/profiles/avatar-20.jpg"></a>
                                    <a>Domenic Houston <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td>Casual Leave</td>
                            <td>10 Jan 2019</td>
                            <td>11 Jan 2019</td>
                            <td>2 days</td>
                            <td>Going to Hospital</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-success"></i> Approved
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-purple"></i> New</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#approve_leave"><i
                                                class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                    </div>
                                </div>
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
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    <a>John Doe <span>Web Designer</span></a>
                                </h2>
                            </td>
                            <td>Casual Leave</td>
                            <td>9 Jan 2019</td>
                            <td>10 Jan 2019</td>
                            <td>2 days</td>
                            <td>Going to Hospital</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-success"></i> Approved
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-purple"></i> New</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#approve_leave"><i
                                                class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                    </div>
                                </div>
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
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="assets/img/profiles/avatar-25.jpg"></a>
                                    <a>Rolland Webber <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td>Casual Leave</td>
                            <td>7 Jan 2019</td>
                            <td>8 Jan 2019</td>
                            <td>2 days</td>
                            <td>Going to Hospital</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-danger"></i> Declined
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-purple"></i> New</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#approve_leave"><i
                                                class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                    </div>
                                </div>
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
