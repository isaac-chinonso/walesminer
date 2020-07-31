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
                <h5 class="txt-dark"><i class="mdi mdi-cloud-circle mr-20"></i> WITHDRAW HISTORY</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active"><span> Withdraw History</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div><br>
        <!-- /Title -->

        <!-- Row -->
        <h6>Record Details</h6><br>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body table-responsive">
                            <table id="dtWithdrawHistory" class="table table-striped table-bordered">
                                <thead style="background-color: #0067fb;">
                                    <tr>
                                        <th style="color: #fff;">Amount</th>
                                        <th style="color: #fff;">Wallet Address</th>
                                        <th style="color: #fff;">Date</th>
                                        <th style="color: #fff;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $withdraw)
                                    <tr>
                                        <td>{{ $withdraw->amount }}</td>
                                        <td>{{ $withdraw->account }}</td>
                                        <td>{{ date('F d, Y. H:i:s', strtotime($withdraw->created_at)) }}</td>
                                        <td>
                                            @if ($withdraw->status == 0)
                                            <span style="color: red;"><strong>Pending Withdrawal</strong></span>
                                            @elseif ($withdraw->status == 1)
                                            <span style="color: green;"><strong>Successfully Withdrawn</strong></span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->
        <script>
            $(document).ready(function() {
                $('#dtWithdrawHistory').DataTable();
                $('.dataTables_length').addClass('bs-select');
            });
        </script>

        <!-- Footer -->
        <footer class="footer container-fluid pt-10 pb-10  pl-30 pr-30">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="pull-left text-dark pt-5 small">Copyright @ 2019 Wales-Miner. All Rights Reserved</div>
                    <div class="pull-right">Created by <a href="#" target="_blank">Dcode Arena</a></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->
    </div>
</div>
<!-- /Main Content -->

@endsection