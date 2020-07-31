@extends('layout.master2')
@section('title')
Pending Deposits || Wales Miner
@endsection

@section('content')
<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid pt-25">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark"><i class="mdi mdi-code-greater-than-or-equal mr-20"></i> PENDING DEPOSITS</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active"><span>Pending Deposits</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div><br>
        <!-- /Title -->

        <!-- Row -->
        <h6>Record Details</h6><br>
        @include('include.Success')
        @include('include.error')
        @include('include.warning')
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body table-responsive">
                            <table id="dtPendingDeposit" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="6" style="color:red;"><strong>Total Amount Pending:</strong></td>
                                        <td style="color:red;"><strong>${{ $totalpending }}</strong></td>
                                    </tr>
                                    <tr style="background-color: #0067fb;">
                                        <th style="color: #fff;">User ID</th>
                                        <th style="color: #fff;">Deposit ID</th>
                                        <th style="color: #fff;">Plan</th>
                                        <th style="color: #fff;">Amount</th>
                                        <th style="color: #fff;">Date</th>
                                        <th style="color:#fff;">Status</th>
                                        <th style="color: #fff;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pendingdeposit as $pdep)
                                    <tr>
                                        <td>{{ $pdep->user_id }}</td>
                                        <td>{{ $pdep->deposit_id }}</td>
                                        <td>
                                            @if ($pdep->plan == 1)
                                            <span>1st Plan</span>
                                            @elseif ($pdep->plan == 2)
                                            <span>2nd Plan</span>
                                            @elseif ($pdep->plan == 3)
                                            <span>3rd Plan</span>
                                            @elseif ($pdep->plan == 4)
                                            <span>4th Plan</span>
                                            @elseif ($pdep->plan == 5)
                                            <span>5th Plan</span>
                                            @endif
                                        </td>
                                        <td>{{ $pdep->amount }}</td>
                                        <td>{{ date('F d, Y. H:i:s', strtotime($pdep->created_at)) }}</td>
                                        <td>
                                            @if ($pdep->status == 0)
                                            <span style="color: red;"><strong>Pending</strong></span>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-success btn-block btn-sm"><a href="#" data-toggle="modal" data-target="#activate{{ $pdep->id }}" style="color:#fff;">Ativate Deposit</a></button>

                                            <!-- sample modal content -->
                                            <div id="activate{{ $pdep->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4><strong>Confirm Activation</strong></h4>
                                                            <p>Are you sure you want to activate this deposit</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                                            <a href="{{ route('activatedeposit',$pdep->id) }}" class="btn btn-success waves-effect waves-light">Yes</a>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
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
                $('#dtPendingDeposit').DataTable();
                $('.dataTables_length').addClass('bs-select');
            });
        </script>

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

@endsection