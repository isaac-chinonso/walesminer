@extends('layout.master1')
@section('title')
Withdraw Fund || Wales Miner
@endsection

@section('content')

<!-- Main Content -->
<div class="page-wrapper">
  <div class="container-fluid pt-25">
    <!-- Title -->
    <div class="row heading-bg">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h5 class="txt-dark"><i class="mdi mdi-cloud-upload mr-20"></i> Withdraw Fund</h5>
      </div>
      <!-- Breadcrumb -->
      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
          <li><a href="#">Dashboard</a></li>
          <li class="active"><span>Withdraw Fund</span></li>
        </ol>
      </div>
      <!-- /Breadcrumb -->
    </div><br>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">

      </div>
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
        @include('include.success')
        @include('include.warning')
        @include('include.error')
        <div class="panel panel-primary card-view">
          <div class="panel-heading" style="background-color: #0067fb;">
            <div class="pull-left">
              <h6 class="panel-title" style="color: #fff;"> Account Balance:</h6>
            </div>
            <div class="pull-right">
              <h6 class="panel-title" style="color: #fff;"> ${{ $data }}</h6>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-wrapper collapse in">
            <div class="panel-body row pa-0">
              <table class="table table-hover mb-5">
                <tbody>
                  <tr>
                    <td colspan="2">
                      <form method="POST" action="{{ route('makewithdrawal') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label>Amount to be withdrawn <span style="color:red;">*</span></label>
                          <input type="text" class="form-control" name="amount" placeholder="amount" required>
                        </div>
                        <div class="form-group">
                          <label>Wallet Adresss <span style="color:red;">*</span></label>
                          <input type="text" class="form-control" name="account" placeholder="wallet adresss to be paid to" required>
                        </div>
                        <div class="form-group">
                          <button class="btn btn-danger btn-sm" type="reset">Reset Form</button>
                          <button class="btn btn-success btn-sm">Make Withdrawal</button>
                        </div>
                      </form>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">

      </div>
    </div>

    <!-- /Row -->
    <!--/ Main Content-->

    @endsection