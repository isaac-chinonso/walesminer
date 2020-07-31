@extends('layout.header')
@section('title')
Memeber Register || Wales Miner
@endsection

@section('content')

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider parallax fullscreen layer-overlay overlay-dark-9" data-bg-img="assets/images/bg/bg1.jpg">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="col-md-8 col-md-push-2">
                        <div class="panel" style="background-color:#000;opacity: 0.5;filter: alpha(opacity=50); /* For IE8 and earlier */">
                            <div class="panel-heading">
                                @include('include.success')
                                @include('include.warning')
                                @include('include.error')
                                <div class="text-center mt-0 pt-5"><a href="#" class=""><img alt="" src="assets/images/logo.png"></a></div>
                                <h4 class="mt-0 pt-5" style="color:#fff;">Members Registration</h4>
                            </div>
                            <div class="panel-body">
                                <form method="POST" action="{{ route('register')}}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="name" style="color:#fff;">Name</label>
                                            <input id="name" name="name" class="form-control" type="text">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="username" style="color:#fff;">Username</label>
                                            <input id="username" name="username" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="email" style="color:#fff;">Email</label>
                                            <input id="email" name="email" class="form-control" type="email">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="form_password" style="color:#fff;">Password</label>
                                            <input id="form_password" name="password" class="form-control" type="password">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="passwordConfirm" style="color:#fff;">Confrim Password</label>
                                            <input id="passwordConfirm" name="passwordConfirm" class="form-control" type="password">
                                        </div>
                                    </div>
                                    <div class="icon-box mb-0 p-0">
                                        <a href="{{ url('/signin')}}" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                                            <i class="pe-7s-user"></i>
                                        </a>
                                        <h4 class="text-gray pt-10 mt-0 mb-30">Already a Member? Login Now.</h4>
                                    </div><br>
                                    <div class="form-group pull-left mt-10">
                                        <button type="submit" class="btn btn-primary" style="color:#fff;">Register Now</button>
                                    </div>
                                    <div class="clear text-center pt-10">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

@endsection