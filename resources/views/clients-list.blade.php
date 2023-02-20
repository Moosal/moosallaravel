<?php $page = 'client-list'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Clients
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Clients
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
                            <th>Name</th>
                            <th>Client ID</th>
                            <th>Contact Person</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Status</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('client-profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-19.jpg') }}" alt=""></a>
                                    <a href="{{ url('client-profile') }}">Global Technologies</a>
                                </h2>
                            </td>
                            <td>CLT-0001</td>
                            <td>Barry Cuda</td>
                            <td>barrycuda@example.com</td>
                            <td>9876543210</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa fa-dot-circle-o text-success"></i> Active </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('client-profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-29.jpg') }}" alt=""></a>
                                    <a href="{{ url('client-profile') }}">Delta Infotech</a>
                                </h2>
                            </td>
                            <td>CLT-0002</td>
                            <td>Tressa Wexler</td>
                            <td>tressawexler@example.com</td>
                            <td>9876543210</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa fa-dot-circle-o text-danger"></i> Inactive </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('client-profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-07.jpg') }}"></a>
                                    <a href="{{ url('client-profile') }}">Cream Inc</a>
                                </h2>
                            </td>
                            <td>CLT-0003</td>
                            <td>Ruby Bartlett</td>
                            <td>rubybartlett@example.com</td>
                            <td>9876543210</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa fa-dot-circle-o text-success"></i> Active </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('client-profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-06.jpg') }}"></a>
                                    <a href="{{ url('client-profile') }}">Wellware Company</a>
                                </h2>
                            </td>
                            <td>CLT-0004</td>
                            <td>Misty Tison</td>
                            <td>mistytison@example.com</td>
                            <td>9876543210</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa fa-dot-circle-o text-success"></i> Active </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('client-profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-14.jpg') }}"
                                            alt=""></a>
                                    <a href="{{ url('client-profile') }}">Mustang Technologies</a>
                                </h2>
                            </td>
                            <td>CLT-0005</td>
                            <td>Daniel Deacon</td>
                            <td>danieldeacon@example.com</td>
                            <td>9876543210</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa fa-dot-circle-o text-success"></i> Active </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('client-profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-18.jpg') }}"
                                            alt=""></a>
                                    <a href="{{ url('client-profile') }}">International Software Inc</a>
                                </h2>
                            </td>
                            <td>CLT-0006</td>
                            <td>Walter Weaver</td>
                            <td>walterweaver@example.com</td>
                            <td>9876543210</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa fa-dot-circle-o text-success"></i> Active </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('client-profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-28.jpg') }}"
                                            alt=""></a>
                                    <a href="{{ url('client-profile') }}">Mercury Software Inc</a>
                                </h2>
                            </td>
                            <td>CLT-0007</td>
                            <td>Amanda Warren</td>
                            <td>amandawarren@example.com</td>
                            <td>9876543210</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa fa-dot-circle-o text-success"></i> Active </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('client-profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-22.jpg') }}"
                                            alt=""></a>
                                    <a href="{{ url('client-profile') }}">Carlson Tech</a>
                                </h2>
                            </td>
                            <td>CLT-0008</td>
                            <td>Betty Carlson</td>
                            <td>bettycarlson@example.com</td>
                            <td>9876543210</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa fa-dot-circle-o text-danger"></i> Inactive </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection

