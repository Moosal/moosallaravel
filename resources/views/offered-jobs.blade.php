<?php $page = 'offered-jobs'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Offered Jobs
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
            Offered Jobs
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
                                    <a class="btn btn-white btn-sm btn-rounded" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
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
                                    <a class="btn btn-white btn-sm btn-rounded" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
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
                                    <a class="btn btn-white btn-sm btn-rounded" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
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

    <!-- /Content End -->
@endsection
