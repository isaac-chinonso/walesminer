@extends('layout.master1')  
@section('title')
Member dashboard || Wales Miner
@endsection

@section('content')
<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid pt-25"> 
      <!--Row -->
      <div class="row">
      @include('include.success')
      @include('include.warning')
      @include('include.error')
        <div class="col-md-4">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h5 class=""><i class="mdi mdi-account mr-20"></i>Username: {{ $capturerecord['user']['username'] }}</h5><br>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h5 class=""><i class="mdi mdi-timetable mr-20"></i>Registration Date: {{ date('F d, Y. H:i:s', strtotime ($capturerecord['user']['registered'])) }}</h5>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h5 class=""><i class="mdi mdi-key-variant mr-20"></i>Last Access: {{ date('F d, Y. H:i:s', strtotime($capturerecord['user']['lastAccessed'])) }}</h5>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Row --> 
    <!-- Row-->
    <div class="col-lg-8 col-md-12 ">
      <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h5 class="panel-title txt-dark"><i class="mdi mdi-coin mr-20"></i>Account Review</h5>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="form-wrap">
                  <form>
                    <div class="row">
                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label class="control-label mb-5" >Total Deposit:</label>
                        <input type="text" class="form-control" value="${{ $capturerecord['user']['depositHistory']['total'] }}" readonly>
                      </div>
                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label class="control-label mb-5" >Total Withdrawal</label>
                        <input type="text" class="form-control" value="${{ $capturerecord['user']['withdrawalHistory']['total'] }}" readonly>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label class="control-label mb-5" >Active Deposit:</label>
                        <input type="text" class="form-control" value="${{ $data }}" readonly>
                      </div>
                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label class="control-label mb-5" >Pending Withdrawal</label>
                        <input type="text" class="form-control" value="${{ $capturerecord['user']['withdrawalHistory']['pending'] }}" readonly>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label class="control-label mb-5" >Last Deposit:</label>
                        <input type="text" class="form-control" value="N/A" readonly>
                      </div>
                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label class="control-label mb-5" >Last Withdrawal</label>
                        <input type="text" class="form-control" value="N/A" readonly>
                      </div>
                    </div><br>
                    
                  </form>
                </div>
              </div>
            </div>
      </div>
    </div>
    <div class="col-md-4 pl-0 pr-0 col-xs-12 widget-penal">
      <div class="panel panel-default card-view">
        <div class="panel-heading">
          <div class="pull-left">
            <h5 class="panel-title txt-dark"><i class="mdi mdi-account mr-20"></i>Account Details</h5>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel-wrapper collapse in">
          <div class="panel-body">
            <div class="form-wrap">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                    <label class="control-label mb-5" >User ID</label><br>
                    <input type="text" class="form-control" value="{{ $capturerecord['user']['_id'] }}" readonly>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                    <label class="control-label mb-5" >Name</label>
                    <input type="text" class="form-control" value="{{ $capturerecord['user']['name'] }}" readonly>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                    <label class="control-label mb-5" >Email</label>
                    <input type="text" class="form-control" value="{{ $capturerecord['user']['email'] }}" readonly>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <!-- Row--> 
@endsection