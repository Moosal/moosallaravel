<?php $page = 'attendance-reports'; ?>
@extends('layout.mainlayout')

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Attendance Reports
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Attendance Reports
        @endslot
    @endcomponent
    @component('components.searchfilter')
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Clock In</th>
                            <th>Clock Out</th>
                            <th>Work Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1 Jan 2020</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2 Jan 2020</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>3 Jan 2020</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>4 Jan 2020</td>
                            <td colspan="3" class="text-danger text-center">Week Off</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>5 Jan 2020</td>
                            <td colspan="3" class="text-danger text-center">Week Off</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>6 Jan 2020</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- /Content End -->
@endsection
