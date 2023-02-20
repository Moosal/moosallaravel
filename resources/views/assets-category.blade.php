<?php $page = 'assets-category'; ?>
@extends('layout.mainlayout')

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Category
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Category
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive table-newdatatable">
                <table class="table table-new custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Created On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <a href="{{ url('assets-details') }}" class="table-imgname">
                                    <img src="{{ URL::asset('/assets/img/laptop.png') }}" class="me-2" alt="img">
                                    <span>Laptop</span>
                                </a>
                            </td>
                            <td>12/12/2022 at 11.23am</td>
                            <td>
                                <div class="table-actions d-flex">
                                    <a class="delete-table me-2" data-bs-toggle="modal" data-bs-target="#edit-asset"
                                        href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg') }}" alt="svg">
                                    </a>
                                    <a class="delete-table confirm-text" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#delete_estimate">
                                        <img src="{{ URL::asset('/assets/img/icons/delete.svg') }}" alt="svg">
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <a href="{{ url('assets-details') }}" class="table-imgname">
                                    <img src="{{ URL::asset('/assets/img/laptop.png') }}" class="me-2" alt="img">
                                    <span>Laptop</span>
                                </a>
                            </td>
                            <td>12/12/2022 at 11.23am</td>
                            <td>
                                <div class="table-actions d-flex">
                                    <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#edit-asset">
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg') }}" alt="svg">
                                    </a>
                                    <a class="delete-table confirm-text" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#delete_estimate">
                                        <img src="{{ URL::asset('/assets/img/icons/delete.svg') }}" alt="svg">
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <a href="{{ url('assets-details') }}" class="table-imgname">
                                    <img src="{{ URL::asset('/assets/img/keyboard.png') }}" class="me-2" alt="img">
                                    <span>Dell Keyboard</span>
                                </a>
                            </td>
                            <td>12/12/2022 at 11.23am</td>
                            <td>
                                <div class="table-actions d-flex">
                                    <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#edit-asset">
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg') }}" alt="svg">
                                    </a>
                                    <a class="delete-table confirm-text" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#delete_estimate">
                                        <img src="{{ URL::asset('/assets/img/icons/delete.svg') }}" alt="svg">
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <a href="#" class="table-imgname">
                                    <img src="{{ URL::asset('/assets/img/mouse.png') }}" class="me-2" alt="img">
                                    <span>Logitech Mouse</span>
                                </a>
                            </td>
                            <td>12/12/2022 at 11.23am</td>
                            <td>
                                <div class="table-actions d-flex">
                                    <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#edit-asset">
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg') }}" alt="svg">
                                    </a>
                                    <a class="delete-table confirm-text" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#delete_estimate">
                                        <img src="{{ URL::asset('/assets/img/icons/delete.svg') }}" alt="svg">
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <a href="#" class="table-imgname">
                                    <img src="{{ URL::asset('/assets/img/laptop.png') }}" class="me-2" alt="img">
                                    <span>Laptop</span>
                                </a>
                            </td>
                            <td>12/12/2022 at 11.23am</td>
                            <td>
                                <div class="table-actions d-flex">
                                    <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#edit-asset">
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg') }}" alt="svg">
                                    </a>
                                    <a class="delete-table confirm-text" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#delete_estimate">
                                        <img src="{{ URL::asset('/assets/img/icons/delete.svg') }}" alt="svg">
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <a href="#" class="table-imgname">
                                    <img src="{{ URL::asset('/assets/img/laptop.png') }}" class="me-2" alt="img">
                                    <span>Laptop</span>
                                </a>
                            </td>
                            <td>12/12/2022 at 11.23am</td>
                            <td>
                                <div class="table-actions d-flex">
                                    <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#edit-asset">
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg') }}" alt="svg">
                                    </a>
                                    <a class="delete-table confirm-text" href="javascript:void(0);"
                                        data-bs-toggle="modal" data-bs-target="#delete_estimate">
                                        <img src="{{ URL::asset('/assets/img/icons/delete.svg') }}" alt="svg">
                                    </a>
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
