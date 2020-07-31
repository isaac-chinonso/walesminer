@extends('layout.master2')
@section('title')
Admin dashboard || Wales Miner
@endsection

@section('content')
<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid pt-25">
        <!-- Row -->
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 pl-20 pr-0 data-wrap-left"> <span class="txt-dark block counter"><span>$</span>{{ $totaldeposit }}</span> <span class="weight-500 uppercase-font block">Total Deposit</span> </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 pt-30 data-wrap-right">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 pl-20 pr-0 data-wrap-left"> <span class="txt-dark block counter"><span>$</span>{{ $totalwithdrawal }}</span> <span class="weight-500 uppercase-font block">Total Withdrawal </span> </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0  pt-30 data-wrap-right">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 pl-20 pr-0 data-wrap-left"> <span class="block counter" style="color:red;">{{ $pendingdeposit}}</span> <span class="weight-500 uppercase-font block" style="color:red;">Pending Deposit </span> </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 pt-20 data-wrap-right">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 pl-20 pr-0 data-wrap-left"> <span class="block counter" style="color:red;">{{ $pendingwithdrawal}}</span> <span class="weight-500 uppercase-font block" style="color:red;">Pending Withdrawal </span> </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 pt-20 data-wrap-right">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 pl-20 pr-0 data-wrap-left"> <span class="block counter" style="color:green;">{{ $activedeposit}}</span> <span class="weight-500 uppercase-font block" style="color:green;">Active Deposit </span> </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 pt-20 data-wrap-right">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 pl-20 pr-0 data-wrap-left"> <span class="block counter" style="color:green;">{{ $activewithdrawal}}</span> <span class="weight-500 uppercase-font block" style="color:green;">Successfully Withdrawn </span> </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 pt-20 data-wrap-right">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
</div>
</div>
@endsection