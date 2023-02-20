<?php $page = 'payments-reports'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Payments Report
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Payments Report
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
                            <th>Transaction ID</th>
                            <th>Date</th>
                            <th>Client Name</th>
                            <th>Payment Method</th>
                            <th>Invoice</th>
                            <th class="text-center">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="#">834521</a></td>
                            <td>2nd Dec 2020</td>
                            <td>Dreams</td>
                            <td>Online</td>
                            <td><a href="#">INV0001</a></td>
                            <td class="text-center">$4,329,970.7</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="#">834521</a></td>
                            <td>2nd Dec 2020</td>
                            <td>Dreams</td>
                            <td>Online</td>
                            <td><a href="#">INV0001</a></td>
                            <td class="text-center">$4,329,970.7</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- /Page Content -->
@endsection
