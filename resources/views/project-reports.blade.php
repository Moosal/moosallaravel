<?php $page = 'project-reports'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Project Reports
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Project Reports
        @endslot
    @endcomponent

    @component('components.searchfilter')
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Project Title</th>
                            <th>Client Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Team</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <a href="{{ url('project-view') }}">Hospital Administration</a>
                            </td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('client-profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-19.jpg') }}" alt=""></a>
                                    <a href="{{ url('client-profile') }}">Global Technologies</a>
                                </h2>
                            </td>
                            <td>9 Jan 2021</td>
                            <td>10 Apr 2021</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm btn-rounded"><i
                                            class="fa fa-dot-circle-o text-success"></i> Active </a>

                                </div>
                            </td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="" data-bs-toggle="tooltip"
                                            data-original-title="John Doe"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="" data-bs-toggle="tooltip"
                                            data-original-title="Richard Miles"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="" data-bs-toggle="tooltip"
                                            data-original-title="John Smith"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="" data-bs-toggle="tooltip"
                                            data-original-title="Mike Litorus"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <a href="{{ url('project-view') }}">Office Management</a>
                            </td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('client-profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-29.jpg') }}" alt=""></a>
                                    <a href="{{ url('client-profile') }}">Delta Infotech</a>
                                </h2>
                            </td>
                            <td>10 Dec 2021</td>
                            <td>2 May 2021</td>
                            <td>
                                <div class="action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded"><i
                                            class="fa fa-dot-circle-o text-success"></i> Active </a>

                                </div>
                            </td>
                            <td>
                                <ul class="team-members text-nowrap">
                                    <li>
                                        <a href="#" title="" data-bs-toggle="tooltip"
                                            data-original-title="John Doe"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="" data-bs-toggle="tooltip"
                                            data-original-title="Richard Miles"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="" data-bs-toggle="tooltip"
                                            data-original-title="John Smith"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="" data-bs-toggle="tooltip"
                                            data-original-title="Mike Litorus"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    </li>
                                    <li class="dropdown avatar-dropdown">
                                        <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false">+15</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="avatar-group">
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-11.jpg') }}">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-12.jpg') }}">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-13.jpg') }}">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-01.jpg') }}">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}">
                                                </a>
                                            </div>
                                            <div class="avatar-pagination">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true">«</span>
                                                            <span class="visually-hidden">Previous</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <span aria-hidden="true">»</span>
                                                            <span class="visually-hidden">Next</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>



                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- /Content End -->
@endsection
