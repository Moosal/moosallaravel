<?php $page = 'task-reports'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Task Reports
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Task Reports
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
                            <th>Task Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Assigned To</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Hospital Administration</td>
                            <td>26 Mar 2019</td>
                            <td>26 Apr 2021</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm btn-rounded"><i
                                            class="fa fa-dot-circle-o text-success"></i> Active </a>

                                </div>
                            </td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title=""
                                            data-original-title="Jeffery Lalor"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Hospital Administration</td>
                            <td>26 Mar 2019</td>
                            <td>26 Apr 2021</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm btn-rounded"><i
                                            class="fa fa-dot-circle-o text-success"></i> Active </a>

                                </div>
                            </td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title=""
                                            data-original-title="Jeffery Lalor"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
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
