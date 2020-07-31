@extends('layout.master1')
@section('title')
Complete Deposit || Wales Miner
@endsection

@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid pt-25">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark"><i class="mdi mdi-cart-plus mr-20"></i> Complete Action</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Deposit</a></li>
                    <li class="active"><span>Complete Action</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div><br>
        <!-- /Title -->
        @include('include.success')
        @include('include.warning')
        @include('include.error')
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">

            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body row pa-0">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <p style="font-size:16px;">
                                    To complete deposit , You are required to send money to the Wallet address below and include your <strong>USER-ID</strong>
                                </p><br>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                                <label class="control-label mb-5">Name: </label>
                                <input type="text" class="form-control" value="{{ $capturerecord['user']['name'] }}" readonly>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                                <label class="control-label mb-5">User ID: </label>
                                <input type="text" class="form-control" value="{{ $capturerecord['user']['_id'] }}" readonly>
                            </div><br>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label class="control-label mb-5">Wallet Address: </label>
                                <input type="text" class="form-control" value="3B9JSPjDrpWhEhZVhLfFutPwwtqcU5h6KL" readonly>
                            </div><br>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <p style="font-size:16px;text-align:justify;color:red;">
                                    <strong>NOTE:</strong> Failure to do so between the next 24hrs , pending deposit will seize to exist
                                </p><br>
                                <button class="btn btn-primary btn-sm"><a href="{{ route('dashboard') }}" style="color:#fff;">COMPLETE ACTION</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">

            </div>
            <!-- /Row -->
            <!--/ Main Content-->

            @endsection