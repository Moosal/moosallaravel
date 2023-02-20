<?php $page = 'offer_approvals'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Offer Approvals
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Jobs
        @endslot
        @slot('li_3')
            Offer Approvals
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
                            <th>Job Type</th>
                            <th>Pay</th>
                            <th>Annual IP</th>
                            <th>Long Term IP</th>
                            <th>Status</th>
                            <th class="text-center">Status</th>
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
                            <td>Temporary</td>
                            <td>$25000</td>
                            <td>15%</td>
                            <td>No</td>
                            <td><label class="badge bg-inverse-warning"
                                    style="display: inline-block;min-width: 90px;">Requested</label></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa fa-thumbs-o-up m-r-5"></i>
                                            Approved</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-ban m-r-5"></i> Rejected</a>
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
                            <td>Contract</td>
                            <td>$25000</td>
                            <td>15%</td>
                            <td>No</td>
                            <td><label class="badge bg-inverse-danger"
                                    style="display: inline-block;min-width: 90px;">Rejected</label></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa fa-thumbs-o-up m-r-5"></i>
                                            Approved</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-ban m-r-5"></i> Rejected</a>
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
                            <td>Salary</td>
                            <td>$25000</td>
                            <td>15%</td>
                            <td>No</td>
                            <td><label class="badge bg-inverse-success"
                                    style="display: inline-block;min-width: 90px;">Approved</label></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa fa-thumbs-o-up m-r-5"></i>
                                            Approved</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-ban m-r-5"></i> Rejected</a>
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
