<?php $page = 'employee-reports'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Employee Report
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Employee Report
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
                            <th>Employee Name</th>
                            <th>Employee Type</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Joining Date</th>
                            <th>DOB</th>
                            <th>Martial Status</th>
                            <th>Gender</th>
                            <th>Terminated Date</th>
                            <th>Relieving Date</th>
                            <th>Salary</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Emercency Contact Details</th>
                            <th>Experience</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    <a href="{{ url('profile') }}" class="text-primary">John Doe <span>#0001</span></a>
                                </h2>
                            </td>
                            <td>Employee</td>
                            <td class="text-info">johndoe@example.com</td>
                            <td>Design</td>
                            <td>UI Design</td>
                            <td>20 Aug 2020</td>
                            <td>03 Mar 1992</td>
                            <td>Married</td>
                            <td>Male</td>
                            <td>-</td>
                            <td>-</td>
                            <td>$20000</td>
                            <td>
                                1861 Bayonne Ave, Manchester Township, NJ, 08759
                            </td>
                            <td>9876543210</td>
                            <td>7894561235</td>
                            <td>0 years 4 months and 9 days</td>
                            <td><button class="btn btn-outline-success btn-sm">Active</button></td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    <a href="{{ url('profile') }}" class="text-primary">Richard Miles <span>#0002</span></a>
                                </h2>
                            </td>
                            <td>Employee</td>
                            <td class="text-info">richardmiles@example.com</td>
                            <td>Android Developer</td>
                            <td>IT Support</td>
                            <td>01 Jul 2020</td>
                            <td>05 Dec 1979</td>
                            <td>Married</td>
                            <td>Male</td>
                            <td>-</td>
                            <td>-</td>
                            <td>$15000</td>
                            <td>
                                1861 Bayonne Ave, Manchester Township, NJ, 08759
                            </td>
                            <td>9876543210</td>
                            <td>7894561235</td>
                            <td>0 years 5 months and 24 days</td>
                            <td><button class="btn btn-outline-success btn-sm">Active</button></td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    <a href="{{ url('profile') }}" class="text-primary">John Smith <span>#003</span></a>
                                </h2>
                            </td>
                            <td>Employee</td>
                            <td class="text-info">johnsmith@example.com</td>
                            <td>IOS Developer</td>
                            <td>Development Manager</td>
                            <td>03 Sep 2020</td>
                            <td>16 Apr 1984</td>
                            <td>Married</td>
                            <td>Male</td>
                            <td>-</td>
                            <td>-</td>
                            <td>$27000</td>
                            <td>
                                1861 Bayonne Ave, Manchester Township, NJ, 08759
                            </td>
                            <td>9876543210</td>
                            <td>7894561235</td>
                            <td>0 years 3 months and 21 days</td>
                            <td><button class="btn btn-outline-success btn-sm">Active</button></td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    <a href="{{ url('profile') }}" class="text-primary">Mike Litorus <span>#004</span></a>
                                </h2>
                            </td>
                            <td>Employee</td>
                            <td class="text-info">mikelitorus@example.com</td>
                            <td>Web Developer</td>
                            <td>IT Support</td>
                            <td>15 Nov 2020</td>
                            <td>15 Jul 2005</td>
                            <td>Single</td>
                            <td>Male</td>
                            <td>-</td>
                            <td>-</td>
                            <td>$15000</td>
                            <td>
                                1861 Bayonne Ave, Manchester Township, NJ, 08759
                            </td>
                            <td>9876543210</td>
                            <td>7894561235</td>
                            <td>0 years 1 months and 9 days</td>
                            <td><button class="btn btn-outline-success btn-sm">Active</button></td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-11.jpg') }}"></a>
                                    <a href="{{ url('profile') }}" class="text-primary">Wilmer Deluna <span>#005</span></a>
                                </h2>
                            </td>
                            <td>Employee</td>
                            <td class="text-info">wilmerdeluna@example.com</td>
                            <td>Team Leader</td>
                            <td>Development Manager</td>
                            <td>01 Dec 2020</td>
                            <td>21 Jun 1984</td>
                            <td>Married</td>
                            <td>Male</td>
                            <td>-</td>
                            <td>-</td>
                            <td>$25000</td>
                            <td>
                                1861 Bayonne Ave, Manchester Township, NJ, 08759
                            </td>
                            <td>9876543210</td>
                            <td>7894561235</td>
                            <td>0 years 0 months and 24 days</td>
                            <td><button class="btn btn-outline-success btn-sm">Active</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
