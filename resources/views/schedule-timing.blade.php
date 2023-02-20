<?php $page = 'schedule-timing'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Schedule timing
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Jobs
        @endslot
        @slot('li_3')
            Schedule timing
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
                            <th>User Available Timings</th>
                            <th class="text-center">Schedule timing</th>
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
                            <td><b>11-03-2020</b> - 11:00 AM-12:00 PM<br><b>12-03-2020</b> - 10:00 AM-11:00
                                AM<br><b>01-01-1970</b> - 10:00 AM-11:00 AM<br> </td>
                            <td class="text-center">
                                <div class="action-label">
                                    <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit_job"
                                        href="#">
                                        Schedule Time
                                    </a>
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
                            <td><b>11-03-2020</b> - 11:00 AM-12:00 PM<br><b>12-03-2020</b> - 10:00 AM-11:00
                                AM<br><b>01-01-1970</b> - 10:00 AM-11:00 AM<br> </td>
                            <td class="text-center">
                                <div class="action-label">
                                    <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit_job"
                                        href="#">
                                        Schedule Time
                                    </a>
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
                            <td><b>11-03-2020</b> - 11:00 AM-12:00 PM<br><b>12-03-2020</b> - 10:00 AM-11:00
                                AM<br><b>01-01-1970</b> - 10:00 AM-11:00 AM<br> </td>
                            <td class="text-center">
                                <div class="action-label">
                                    <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit_job"
                                        href="#">
                                        Schedule Time
                                    </a>
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
