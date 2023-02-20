<?php $page = 'invoice-reports'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Invoice Report
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Invoice Report
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
                            <th>Invoice Number</th>
                            <th>Client</th>
                            <th>Created Date</th>
                            <th>Due Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="{{ url('invoice-view') }}">#INV-0001</a></td>
                            <td>Global Technologies</td>
                            <td>11 Mar 2019</td>
                            <td>17 Mar 2019</td>
                            <td>$2099</td>
                            <td><span class="badge bg-inverse-success">Paid</span></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('edit-invoice') }}"><i
                                                class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="{{ url('invoice-view') }}"><i
                                                class="fa fa-eye m-r-5"></i> View</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-file-pdf-o m-r-5"></i>
                                            Download</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="{{ url('invoice-view') }}">#INV-0002</a></td>
                            <td> Delta Infotech</td>
                            <td>11 Mar 2019</td>
                            <td>17 Mar 2019</td>
                            <td>$2099</td>
                            <td><span class="badge bg-inverse-info">Sent</span></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('edit-invoice') }}"><i
                                                class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="{{ url('invoice-view') }}"><i
                                                class="fa fa-eye m-r-5"></i> View</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-file-pdf-o m-r-5"></i>
                                            Download</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i>
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
@endsection
