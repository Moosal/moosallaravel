<?php $page = 'clients'; ?>
@extends('layout.mainlayout')

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Compose
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Compose
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <input type="email" placeholder="To" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" placeholder="Cc" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" placeholder="Bcc" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <div id="editor"></div>
                        </div>
                        <div class="form-group mb-0">
                            <div class="text-center">
                                <button class="btn btn-primary"><span>Send</span> <i class="fa fa-send m-l-5"></i></button>
                                <button class="btn btn-success m-l-5" type="button"><span>Draft</span> <i
                                        class="fa fa-floppy-o m-l-5"></i></button>
                                <button class="btn btn-success m-l-5" type="button"><span>Delete</span> <i
                                        class="fa fa-trash-o m-l-5"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
