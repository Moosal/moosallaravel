<?php $page = 'payments'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Payments
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Payments
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable mb-0">
                    <thead>
                        <tr>
                            <th>Invoice ID</th>
                            <th>Client</th>
                            <th>Payment Type</th>
                            <th>Paid Date</th>
                            <th>Paid Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="{{ url('invoice-view') }}">#INV-0001</a></td>
                            <td>
                                <h2><a href="#">Global Technologies</a></h2>
                            </td>
                            <td>Paypal</td>
                            <td>8 Feb 2019</td>
                            <td>$500</td>
                        </tr>
                        <tr>
                            <td><a href="{{ url('invoice-view') }}">#INV-0002</a></td>
                            <td>
                                <h2><a href="#">Delta Infotech</a></h2>
                            </td>
                            <td>Paypal</td>
                            <td>8 Feb 2019</td>
                            <td>$500</td>
                        </tr>
                        <tr>
                            <td><a href="{{ url('invoice-view') }}">#INV-0003</a></td>
                            <td>
                                <h2><a href="#">Cream Inc</a></h2>
                            </td>
                            <td>Paypal</td>
                            <td>8 Feb 2019</td>
                            <td>$500</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
