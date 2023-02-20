<?php $page = 'tickets'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Timesheet
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Timesheet
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th>Employee</th>
                            <th>Date</th>
                            <th>Projects</th>
                            <th class="text-center">Assigned Hours</th>
                            <th class="text-center">Hours</th>
                            <th class="d-none d-sm-table-cell">Description</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">John Doe <span>Web Designer</span></a>
                                </h2>
                            </td>
                            <td>8 Mar 2019</td>
                            <td>
                                <h2>Office Management</h2>
                            </td>
                            <td class="text-center">20</td>
                            <td class="text-center">7</td>
                            <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Donec vel elit neque.</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Richard Miles <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td>8 Mar 2019</td>
                            <td>
                                <h2>Project Management</h2>
                            </td>
                            <td class="text-center">20</td>
                            <td class="text-center">12</td>
                            <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Donec vel elit neque.</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i>
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
                                    <a href="{{ url('profile') }}">John Smith <span>Android Developer</span></a>
                                </h2>
                            </td>
                            <td>8 Mar 2019</td>
                            <td>
                                <h2>Video Calling App</h2>
                            </td>
                            <td class="text-center">20</td>
                            <td class="text-center">12</td>
                            <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Donec vel elit neque.</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i>
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
                                    <a href="{{ url('profile') }}">Mike Litorus <span>IOS Developer</span></a>
                                </h2>
                            </td>
                            <td>8 Mar 2019</td>
                            <td>
                                <h2>Hospital Administration</h2>
                            </td>
                            <td class="text-center">20</td>
                            <td class="text-center">12</td>
                            <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Donec vel elit neque.</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-11.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Wilmer Deluna <span>Team Leader</span></a>
                                </h2>
                            </td>
                            <td>8 Mar 2019</td>
                            <td>
                                <h2>Office Management</h2>
                            </td>
                            <td class="text-center">20</td>
                            <td class="text-center">7</td>
                            <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Donec vel elit neque.</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-12.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Jeffrey Warden <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td>8 Mar 2019</td>
                            <td>
                                <h2>Project Management</h2>
                            </td>
                            <td class="text-center">20</td>
                            <td class="text-center">12</td>
                            <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Donec vel elit neque.</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-13.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Bernardo Galaviz <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td>8 Mar 2019</td>
                            <td>
                                <h2>Video Calling App</h2>
                            </td>
                            <td class="text-center">20</td>
                            <td class="text-center">12</td>
                            <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Donec vel elit neque.</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-01.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Lesley Grauer <span>Team Leader</span></a>
                                </h2>
                            </td>
                            <td>8 Mar 2019</td>
                            <td>
                                <h2>Hospital Administration</h2>
                            </td>
                            <td class="text-center">20</td>
                            <td class="text-center">12</td>
                            <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Donec vel elit neque.</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Jeffery Lalor <span>Team Leader</span></a>
                                </h2>
                            </td>
                            <td>8 Mar 2019</td>
                            <td>
                                <h2>Ware house developement</h2>
                            </td>
                            <td class="text-center">20</td>
                            <td class="text-center">9</td>
                            <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Donec vel elit neque.</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-04.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Loren Gatlin <span>Android Developer</span></a>
                                </h2>
                            </td>
                            <td>8 Mar 2019</td>
                            <td>
                                <h2>Office Management</h2>
                            </td>
                            <td class="text-center">20</td>
                            <td class="text-center">12</td>
                            <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Donec vel elit neque.</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i>
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
                                    <a href="{{ url('profile') }}">Tarah Shropshire <span>Android Developer</span></a>
                                </h2>
                            </td>
                            <td>8 Mar 2019</td>
                            <td>
                                <h2>Project Management</h2>
                            </td>
                            <td class="text-center">20</td>
                            <td class="text-center">12</td>
                            <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Donec vel elit neque.</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i>
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
                                    <a href="{{ url('profile') }}">Catherine Manseau <span>Android Developer</span></a>
                                </h2>
                            </td>
                            <td>8 Mar 2019</td>
                            <td>
                                <h2>Video Calling App</h2>
                            </td>
                            <td class="text-center">20</td>
                            <td class="text-center">12</td>
                            <td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Donec vel elit neque.</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i>
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
