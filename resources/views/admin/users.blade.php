@extends('layout.master2')
@section('title')
Total Users || Wales Miner
@endsection

@section('content')
<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid pt-25">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark"><i class="mdi mdi-code-greater-than-or-equal mr-20"></i> TOTAL LIST OF USERS</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active"><span>Users</span></li>
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
                            <table id="dtBasicExample" class="table table-striped table-bordered">
                                <thead style="background-color: #0067fb;">
                                    <tr>
                                        <th style="color: #fff;">User ID</th>
                                        <th style="color: #fff;">Fullname</th>
                                        <th style="color: #fff;">Username</th>
                                        <th style="color: #fff;">Email</th>
                                        <th style="color: #fff;">Registered At</th>
                                        <th style="color: #fff;">Last Accessed</th>
                                        <th style="color: #fff;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alluser as $use)
                                    <tr>
                                        <td> {{ $use['_id'] }}</td>
                                        <td> {{ $use['name'] }}</td>
                                        <td> {{ $use['username'] }}</td>
                                        <td> {{ $use['email'] }}</td>
                                        <td> {{ date('F d, Y. H:i:s', strtotime ($use['registered'])) }}</td>
                                        <td> {{ date('F d, Y. H:i:s', strtotime ($use['lastAccessed'])) }} </td>
                                        <td> <button class="btn btn-primary btn-sm">Delete</button></td>
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
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>


@endsection