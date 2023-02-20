<?php $page = 'manage-resumes'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Manage Resumes
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Jobs
        @endslot
        @slot('li_3')
            Manage Resumes
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Job Title</th>
                            <th>Department</th>
                            <th>Start Date</th>
                            <th>Expire Date</th>
                            <th class="text-center">Job Type</th>
                            <th class="text-center">Status</th>
                            <th>Resume</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">John Doe <span>Web Designer</span></a>
                                </h2>
                            </td>
                            <td><a href="{{ url('job-details') }}">Web Developer</a></td>
                            <td>Development</td>
                            <td>3 Mar 2019</td>
                            <td>31 May 2019</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-danger"></i> Full Time
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i>
                                            Full Time</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-success"></i> Part Time</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Internship</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-warning"></i> Temporary</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-warning"></i> Other</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-danger"></i> Open
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i>
                                            Open</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-success"></i> Closed</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Cancelled</a>
                                    </div>
                                </div>
                            </td>
                            <td><a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                        class="fa fa-download me-1"></i> Download</a></td>
                            <td class="text-center">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#edit_job"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#delete_job"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Richard Miles <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td><a href="{{ url('job-details') }}">Web Designer</a></td>
                            <td>Designing</td>
                            <td>3 Mar 2019</td>
                            <td>31 May 2019</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-success"></i> Part Time
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i>
                                            Full Time</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-success"></i> Part Time</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Internship</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-warning"></i> Temporary</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-warning"></i> Other</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-success"></i> Closed
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-info"></i> Open</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-success"></i> Closed</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Cancelled</a>
                                    </div>
                                </div>
                            </td>
                            <td><a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                        class="fa fa-download me-1"></i> Download</a></td>
                            <td class="text-center">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#edit_job"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#delete_job"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">John Smith <span>Android Developer</span></a>
                                </h2>
                            </td>
                            <td><a href="{{ url('job-details') }}">Android Developer</a></td>
                            <td>Android</td>
                            <td>3 Mar 2019</td>
                            <td>31 May 2019</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-danger"></i> Internship
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-info"></i> Full Time</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-success"></i> Part Time</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Internship</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-warning"></i> Temporary</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-warning"></i> Other</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-danger"></i> Cancelled
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-info"></i> Open</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-success"></i> Closed</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Cancelled</a>
                                    </div>
                                </div>
                            </td>
                            <td><a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                        class="fa fa-download me-1"></i> Download</a></td>
                            <td class="text-center">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#edit_job"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#delete_job"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
