<?php $page = 'visited-jobs'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Visitied Jobs
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
            Visitied Jobs
        @endslot
    @endcomponent


    @component('components.navcontents')
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
                            <th>Job Title</th>
                            <th>Department</th>
                            <th>Start Date</th>
                            <th>Expire Date</th>
                            <th class="text-center">Job Type</th>
                            <th class="text-center">Status</th>

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
                                    <a class="btn btn-white btn-sm btn-rounded" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-danger"></i> Full Time
                                    </a>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="action-label">
                                    <a class="btn btn-white btn-sm btn-rounded" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-danger"></i> Open
                                    </a>
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
                                    <a class="btn btn-white btn-sm btn-rounded" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-success"></i> Part Time
                                    </a>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="action-label">
                                    <a class="btn btn-white btn-sm btn-rounded" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-success"></i> Closed
                                    </a>
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
                                    <a class="btn btn-white btn-sm btn-rounded" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-danger"></i> Internship
                                    </a>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="action-label">
                                    <a class="btn btn-white btn-sm btn-rounded" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-danger"></i> Cancelled
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- /Content End -->
@endsection
