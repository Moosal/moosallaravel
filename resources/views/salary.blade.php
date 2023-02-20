<?php $page = 'salary'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Employee Salary
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Salary
        @endslot
    @endcomponent

    @component('components.searchfilter')
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>
                            <th>Employee</th>
                            <th>Employee ID</th>
                            <th>Email</th>
                            <th>Join Date</th>
                            <th>Role</th>
                            <th>Salary</th>
                            <th>Payslip</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">John Doe <span>Web Designer</span></a>
                                </h2>
                            </td>
                            <td>FT-0001</td>
                            <td>johndoe@example.com</td>
                            <td>1 Jan 2013</td>
                            <td>
                                <div class="dropdown">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">Web Designer </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                        <a class="dropdown-item" href="#">Software Tester</a>
                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                    </div>
                                </div>
                            </td>
                            <td>$59698</td>
                            <td><a class="btn btn-sm btn-primary" href="{{ url('salary-view') }}">Generate Slip</a></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}" alt=""></a>
                                    <a href="{{ url('profile') }}">Richard Miles <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td>FT-0002</td>
                            <td>richardmiles@example.com</td>
                            <td>1 Jan 2013</td>
                            <td>
                                <div class="dropdown">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">Web Developer </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                        <a class="dropdown-item" href="#">Software Tester</a>
                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                    </div>
                                </div>
                            </td>
                            <td>$72000</td>
                            <td><a class="btn btn-sm btn-primary" href="{{ url('salary-view') }}">Generate Slip</a></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}" alt=""></a>
                                    <a href="{{ url('profile') }}">John Smith <span>Android Developer</span></a>
                                </h2>
                            </td>
                            <td>FT-0003</td>
                            <td>johnsmith@example.com</td>
                            <td>1 Jan 2013</td>
                            <td>
                                <div class="dropdown">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">Android Developer </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                        <a class="dropdown-item" href="#">Software Tester</a>
                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                    </div>
                                </div>
                            </td>
                            <td>$48200</td>
                            <td><a class="btn btn-sm btn-primary" href="{{ url('salary-view') }}">Generate Slip</a></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"
                                            alt=""></a>
                                    <a href="{{ url('profile') }}">Mike Litorus <span>IOS Developer</span></a>
                                </h2>
                            </td>
                            <td>FT-0004</td>
                            <td>mikelitorus@example.com</td>
                            <td>1 Jan 2013</td>
                            <td>
                                <div class="dropdown">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">IOS Developer </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                        <a class="dropdown-item" href="#">Software Tester</a>
                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                    </div>
                                </div>
                            </td>
                            <td>$59698</td>
                            <td><a class="btn btn-sm btn-primary" href="{{ url('salary-view') }}">Generate Slip</a></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-11.jpg') }}"
                                            alt=""></a>
                                    <a href="{{ url('profile') }}">Wilmer Deluna <span>Team Leader</span></a>
                                </h2>
                            </td>
                            <td>FT-0005</td>
                            <td>wilmerdeluna@example.com</td>
                            <td>1 Jan 2013</td>
                            <td>
                                <div class="dropdown">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">Team Leader </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                        <a class="dropdown-item" href="#">Software Tester</a>
                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                    </div>
                                </div>
                            </td>
                            <td>$43000</td>
                            <td><a class="btn btn-sm btn-primary" href="{{ url('salary-view') }}">Generate Slip</a></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-12.jpg') }}"
                                            alt=""></a>
                                    <a href="{{ url('profile') }}">Jeffrey Warden <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td>FT-0006</td>
                            <td>jeffreywarden@example.com</td>
                            <td>1 Jan 2013</td>
                            <td>
                                <div class="dropdown">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">Web Developer</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                        <a class="dropdown-item" href="#">Software Tester</a>
                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                    </div>
                                </div>
                            </td>
                            <td>$45000</td>
                            <td><a class="btn btn-sm btn-primary" href="{{ url('salary-view') }}">Generate Slip</a></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-13.jpg') }}"
                                            alt=""></a>
                                    <a href="{{ url('profile') }}">Bernardo Galaviz <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td>FT-0007</td>
                            <td>bernardogalaviz@example.com</td>
                            <td>1 Jan 2014</td>
                            <td>
                                <div class="dropdown">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">Web Developer </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                        <a class="dropdown-item" href="#">Software Tester</a>
                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                    </div>
                                </div>
                            </td>
                            <td>$38400</td>
                            <td><a class="btn btn-sm btn-primary" href="{{ url('salary-view') }}">Generate Slip</a></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-01.jpg') }}"
                                            alt=""></a>
                                    <a href="{{ url('profile') }}">Lesley Grauer <span>Team Leader</span></a>
                                </h2>
                            </td>
                            <td>FT-0008</td>
                            <td>lesleygrauer@example.com</td>
                            <td>1 Jun 2015</td>
                            <td>
                                <div class="dropdown">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">Team Leader </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                        <a class="dropdown-item" href="#">Software Tester</a>
                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                    </div>
                                </div>
                            </td>
                            <td>$75500</td>
                            <td><a class="btn btn-sm btn-primary" href="{{ url('salary-view') }}">Generate Slip</a></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"
                                            alt=""></a>
                                    <a href="{{ url('profile') }}">Jeffery Lalor <span>Team Leader</span></a>
                                </h2>
                            </td>
                            <td>FT-0009</td>
                            <td>jefferylalor@example.com</td>
                            <td>1 Jan 2013</td>
                            <td>
                                <div class="dropdown">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">Team Leader </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                        <a class="dropdown-item" href="#">Software Tester</a>
                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                    </div>
                                </div>
                            </td>
                            <td>$73550</td>
                            <td><a class="btn btn-sm btn-primary" href="{{ url('salary-view') }}">Generate Slip</a></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-04.jpg') }}"
                                            alt=""></a>
                                    <a href="{{ url('profile') }}">Loren Gatlin <span>Android Developer</span></a>
                                </h2>
                            </td>
                            <td>FT-0010</td>
                            <td>lorengatlin@example.com</td>
                            <td>1 Jan 2013</td>
                            <td>
                                <div class="dropdown">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">Android Developer </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                        <a class="dropdown-item" href="#">Software Tester</a>
                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                    </div>
                                </div>
                            </td>
                            <td>$55000</td>
                            <td><a class="btn btn-sm btn-primary" href="{{ url('salary-view') }}">Generate Slip</a></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-03.jpg') }}"
                                            alt=""></a>
                                    <a href="{{ url('profile') }}">Tarah Shropshire <span>Android Developer</span></a>
                                </h2>
                            </td>
                            <td>FT-0011</td>
                            <td>tarahshropshire@example.com</td>
                            <td>1 Jan 2013</td>
                            <td>
                                <div class="dropdown">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">Android Developer </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                        <a class="dropdown-item" href="#">Software Tester</a>
                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                    </div>
                                </div>
                            </td>
                            <td>$92400</td>
                            <td><a class="btn btn-sm btn-primary" href="{{ url('salary-view') }}">Generate Slip</a></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
