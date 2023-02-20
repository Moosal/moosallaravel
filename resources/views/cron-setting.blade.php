<?php $page = 'cron-setting'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Cron Setting</h3>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <form>
                <div class="form-group">
                    <label>Cron Key <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Auto Backup Database <span class="text-danger">*</span></label><br>
                    <label class="switch">
                        <input type="hidden" value="off" name="auto_backup_db">
                        <input type="checkbox" checked="checked" name="auto_backup_db">
                        <span></span>
                    </label>
                </div>

                <div class="submit-section">
                    <button class="btn btn-primary submit-btn">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection
