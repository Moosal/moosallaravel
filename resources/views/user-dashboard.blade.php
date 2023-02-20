<?php $page = 'user-dashboard'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            User Job Dashboard
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Jobs
        @endslot
        @slot('li_3')
            User Dashboard
        @endslot
        @slot('li_4')
            User Dashboard
        @endslot
    @endcomponent




    @component('components.navcontents')
    @endcomponent

    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa fa-file-text-o"></i></span>
                    <div class="dash-widget-info">
                        <h3>110</h3>
                        <span>Offered</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa fa-clipboard"></i></span>
                    <div class="dash-widget-info">
                        <h3>40</h3>
                        <span>Applied</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa fa-retweet"></i></span>
                    <div class="dash-widget-info">
                        <h3>374</h3>
                        <span>Visited</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa fa-floppy-o"></i></span>
                    <div class="dash-widget-info">
                        <h3>220</h3>
                        <span>Saved</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 text-center d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Overview</h3>
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <h3 class="card-title text-center">Latest Jobs</h3>
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-action">UI Developer <span
                                        class="float-end text-sm text-muted">1 Hours ago</span></li>
                                <li class="list-group-item list-group-item-action">Android Developer <span
                                        class="float-end text-sm text-muted">1 Days ago</span></li>
                                <li class="list-group-item list-group-item-action">IOS Developer<span
                                        class="float-end text-sm text-muted">2 Days ago</span></li>
                                <li class="list-group-item list-group-item-action">PHP Developer<span
                                        class="float-end text-sm text-muted">3 Days ago</span></li>
                                <li class="list-group-item list-group-item-action">UI Developer<span
                                        class="float-end text-sm text-muted">3 Days ago</span></li>
                                <li class="list-group-item list-group-item-action">PHP Developer<span
                                        class="float-end text-sm text-muted">4 Days ago</span></li>
                                <li class="list-group-item list-group-item-action">UI Developer<span
                                        class="float-end text-sm text-muted">4 Days ago</span></li>
                                <li class="list-group-item list-group-item-action">Android Developer<span
                                        class="float-end text-sm text-muted">6 Days ago</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card card-table">
                <div class="card-header">
                    <h3 class="card-title mb-0">Offered Jobs</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-nowrap custom-table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Job Title</th>
                                    <th>Department</th>
                                    <th class="text-center">Job Type</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="{{ url('job-details') }}">Web Developer</a></td>
                                    <td>Development</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-danger"></i> Full Time
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-info download-offer"><span><i
                                                    class="fa fa-download me-1"></i> Download Offer</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="{{ url('job-details') }}">Web Designer</a></td>
                                    <td>Designing</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i> Part Time
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-info download-offer"><span><i
                                                    class="fa fa-download me-1"></i> Download Offer</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="{{ url('job-details') }}">Android Developer</a></td>
                                    <td>Android</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-danger"></i> Internship
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-info download-offer"><span><i
                                                    class="fa fa-download me-1"></i> Download Offer</span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card card-table">
                <div class="card-header">
                    <h3 class="card-title mb-0">Applied Jobs</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-nowrap custom-table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Job Title</th>
                                    <th>Department</th>
                                    <th>Start Date</th>
                                    <th>Expire Date</th>
                                    <th class="text-center">Job Type</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="{{ url('job-details') }}">Web Developer</a></td>
                                    <td>Development</td>
                                    <td>3 Mar 2019</td>
                                    <td>31 May 2019</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-danger"></i> Full Time
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-danger"></i> Open
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="{{ url('job-details') }}">Web Designer</a></td>
                                    <td>Designing</td>
                                    <td>3 Mar 2019</td>
                                    <td>31 May 2019</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i> Part Time
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i> Closed
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="{{ url('job-details') }}">Android Developer</a></td>
                                    <td>Android</td>
                                    <td>3 Mar 2019</td>
                                    <td>31 May 2019</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-danger"></i> Internship
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-danger"></i> Cancelled
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i>
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
    </div>

    <!-- /Content End -->
@endsection
