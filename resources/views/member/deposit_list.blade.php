@extends('layout.master1')  
@section('title')
Deposit List || Wales Miner
@endsection

@section('content')

<!-- Main Content -->
  <div class="page-wrapper">
    <div class="container-fluid pt-25"> 
      <!-- Title -->
      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h5 class="txt-dark"><i class="mdi mdi-code-equal mr-20"></i> Your Deposit</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active"><span>Your Deposit</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb --> 
      </div><br>
      <!-- /Title -->

      <!-- Row -->
      <h6>Total: $0.00</h6><br>
      <form>
           <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="panel panel-default card-view">
                <div class="panel-heading">
                  <div>
                    <h6 class="panel-title" align="center"> 1st Plan</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                  <div  class="panel-body row pa-0">
                    <table class="table table-hover mb-5">
                      <thead style="background-color: #0067fb;">
                        <tr>
                          <th style="color: #fff;">Plan</th>
                          <th style="color: #fff;">Amount Spent ($)</th>
                          <th style="color: #fff;">Profit (%)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1st Plan</td>
                          <td>$10.00 and more</td>
                          <td>120.00</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="3">No deposits for this plan</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="panel panel-default card-view">
                <div class="panel-heading">
                  <div>
                    <h6 class="panel-title" align="center"> 2nd Plan</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                  <div  class="panel-body row pa-0">
                    <table class="table table-hover mb-5">
                      <thead style="background-color: #0067fb;">
                        <tr>
                          <th style="color: #fff;">Plan</th>
                          <th style="color: #fff;">Amount Spent ($)</th>
                          <th style="color: #fff;">Profit (%)</th>
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
                          <th colspan="3">No deposits for this plan</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="panel panel-default card-view">
                <div class="panel-heading">
                  <div>
                    <h6 class="panel-title" align="center"> 3rd Plan</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                  <div  class="panel-body row pa-0">
                    <table class="table table-hover mb-5">
                      <thead style="background-color: #0067fb;">
                        <tr>
                          <th style="color: #fff;">Plan</th>
                          <th style="color: #fff;">Amount Spent ($)</th>
                          <th style="color: #fff;">Profit (%)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td>$500.00 and more </td>
                          <td>200.00</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="3">No deposits for this plan</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="panel panel-default card-view">
                <div class="panel-heading">
                  <div>
                    <h6 class="panel-title" align="center"> 4th Plan</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                  <div  class="panel-body row pa-0">
                    <table class="table table-hover mb-5">
                      <thead style="background-color: #0067fb;">
                        <tr>
                          <th style="color: #fff;">Plan</th>
                          <th style="color: #fff;">Amount Spent ($)</th>
                          <th style="color: #fff;">Profit (%)</th>
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
                          <th colspan="3">No deposits for this plan</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="panel panel-default card-view">
                <div class="panel-heading">
                  <div>
                    <h6 class="panel-title" align="center"> 5th Plan</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                  <div  class="panel-body row pa-0">
                    <table class="table table-hover mb-5">
                      <thead style="background-color: #0067fb;">
                        <tr>
                          <th style="color: #fff;">Plan</th>
                          <th style="color: #fff;">Amount Spent ($)</th>
                          <th style="color: #fff;">Profit (%)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td>$5000.00 and more </td>
                          <td>300.00</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="3">No deposits for this plan</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </form>
     
      <!-- /Row --> 
      <!--/ Main Content-->

@endsection