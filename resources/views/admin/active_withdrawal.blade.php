@extends('layout.master2')
@section('title')
Active Withdrawal || Wales Miner
@endsection

@section('content')
<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid pt-25">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark"><i class="mdi mdi-code-greater-than-or-equal mr-20"></i> PAID WITHDRAWAL</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active"><span>Paid Withdrawals</span></li>
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
                            <table id="dtactivewithdraw" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="5" style="color:red;"><strong>Total Amount Paid:</strong></td>
                                        <td style="color:red;"><strong>${{ $totalactive }}</strong></td>
                                    </tr>
                                    <tr style="background-color: #0067fb;">
                                        <th style="color: #fff;">User ID</th>
                                        <th style="color: #fff;">Withdrawal ID</th>
                                        <th style="color: #fff;">Amount</th>
                                        <th style="color: #fff;">Wallet Address</th>
                                        <th style="color: #fff;">Date</th>
                                        <th style="color:#fff;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($activewithdrawal as $pwith)
                                    <tr>
                                        <td>{{ $pwith->user_id }}</td>
                                        <td>{{ $pwith->withdrawal_id }}</td>
                                        <td>{{ $pwith->amount }}</td>
                                        <td>{{ $pwith->account }}</td>
                                        <td>{{ date('F d, Y. H:i:s', strtotime($pwith->created_at)) }}</td>
                                        <td>
                                            @if ($pwith->status == 1)
                                            <span style="color: green;"><strong>Paid Successfully</strong></span>
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

        <!-- Footer -->
        <footer class="footer container-fluid pt-10 pb-10  pl-30 pr-30">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="pull-left text-dark pt-5 small">Copyright @ 2019 Wales-Miner. All Rights Reserved</div>
                    <div class="pull-right">Created with by <a href="#" target="_blank">Dcode Arena</a></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->
    </div>
</div>
<!-- /Main Content -->
<script>
    $(document).ready(function() {
        $('#dtactivewithdraw').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>

@endsection