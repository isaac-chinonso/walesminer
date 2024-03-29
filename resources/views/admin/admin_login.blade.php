@extends('layout.header')
@section('title')
Admin Login || Wales Miner
@endsection

@section('content')

<!-- Start main-content -->
<div class="main-content">
  <!-- Section: home -->
  <section id="home" class="divider parallax fullscreen layer-overlay overlay-dark-9" data-bg-img="assets/images/bg/bg1.jpg">
    <div class="display-table">
      <div class="display-table-cell">
        <div class="container">
          <div class="col-md-6 col-md-push-3">
            <div class="panel" style="background-color:#000;opacity: 0.5;filter: alpha(opacity=50); /* For IE8 and earlier */">
              <div class="panel-heading">
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="text-center mt-0 pt-5"><a href="#" class=""><img alt="" src="assets/images/logo.png"></a></div>
                <h4 class="mt-0 pt-5" style="color:#fff;">Admin Login</h4>
              </div>
              <div class="panel-body">
                <form method="POST" action="{{ route('adminlogin')}}">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_username_email" style="color:#fff;">Email</label>
                      <input id="form_username_email" name="email" class="form-control" type="email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_password" style="color:#fff;">Password</label>
                      <input id="form_password" name="password" class="form-control" type="password">
                    </div>
                  </div>
                  <div class="form-group pull-left mt-10">
                    <button type="submit" class="btn btn-primary">Login</button>
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