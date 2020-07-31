@extends('layout.master1')  
@section('title')
Make Deposit || Wales Miner
@endsection

@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid pt-25"> 
      <!-- Title -->
      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h5 class="txt-dark"><i class="mdi mdi-cart-plus mr-20"></i> Make Deposit</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active"><span>Make Deposit</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb --> 
      </div><br>
      <!-- /Title -->

      <!-- Row -->
      
      <h6>Select a plan:</h6><br>
      <form method="POST" action="{{ route('postdeposit') }}">
        {{ csrf_field() }}
           <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="panel panel-primary card-view">
                <div class="panel-heading" style="background-color: #0067fb;">
                  <div class="pull-left">
                    <h6 class="panel-title txt-dark"><input type="radio" name="plan" value="1"> 1st Plan</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                  <div  class="panel-body row pa-0">
                    <table class="table table-hover mb-5">
                      <thead>
                        <tr>
                          <th>Plan</th>
                          <th>Spent Amount ($)</th>
                          <th>Profit (%)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Plan 1</td>
                          <td>$10.00 and more</td>
                          <td>120.00</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="3"><a href="#" style="color: blue;" class="pull-right">Calculate Your Profit >></a></td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="panel panel-primary card-view">
                <div class="panel-heading" style="background-color: #0067fb;">
                  <div class="pull-left">
                    <h6 class="panel-title txt-dark"><input type="radio" name="plan" value="2"> 2nd Plan</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                  <div  class="panel-body row pa-0">
                    <table class="table table-hover mb-5">
                      <thead>
                        <tr>
                          <th>Plan</th>
                          <th>Spent Amount ($)</th>
                          <th>Profit (%)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td>$100.00 and more</td>
                          <td>140.00</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="3"><a href="#" style="color: blue;" class="pull-right">Calculate Your Profit >></a></td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="panel panel-primary card-view">
                <div class="panel-heading" style="background-color: #0067fb;">
                  <div class="pull-left">
                    <h6 class="panel-title txt-dark"><input type="radio" name="plan" value="3"> 3rd Plan</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                  <div  class="panel-body row pa-0">
                    <table class="table table-hover mb-5">
                      <thead>
                        <tr>
                          <th>Plan</th>
                          <th>Spent Amount ($)</th>
                          <th>Profit (%)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td>$500.00 and more</td>
                          <td>200.00</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="3"><a href="#" style="color: blue;" class="pull-right">Calculate Your Profit >></a></td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="panel panel-primary card-view">
                <div class="panel-heading" style="background-color: #0067fb;">
                  <div class="pull-left">
                    <h6 class="panel-title txt-dark"><input type="radio" name="plan" value="4"> 4th Plan</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                  <div  class="panel-body row pa-0">
                    <table class="table table-hover mb-5">
                      <thead>
                        <tr>
                          <th>Plan</th>
                          <th>Spent Amount ($)</th>
                          <th>Profit (%)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td>$1000.00 and more</td>
                          <td>250.00</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="3"><a href="#" style="color: blue;" class="pull-right">Calculate Your Profit >></a></td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="panel panel-primary card-view">
                <div class="panel-heading" style="background-color: #0067fb;">
                  <div class="pull-left">
                    <h6 class="panel-title txt-dark"><input type="radio" name="plan" value="5"> 5th Plan</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                  <div  class="panel-body row pa-0">
                    <table class="table table-hover mb-5">
                      <thead>
                        <tr>
                          <th>Plan</th>
                          <th>Spent Amount ($)</th>
                          <th>Profit (%)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td>$5000.00 and more</td>
                          <td>300.00</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="3"><a href="#" style="color: blue;" class="pull-right">Calculate Your Profit >></a></td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
              <h6>Your account balance ($): <span class="pull-right">$0.00</span></h6><br><br><br>

              <h6>Amount to Spend ($): <input type="text" name="amount" class="pull-right"></h6><br><br>

              <button class="btn btn-primary btn-block" style="background-color: #0067fb;">Spend</button>
            </div>
          </div>
        </form>
     
      <!-- /Row --> 
      <!--/ Main Content-->

@endsection