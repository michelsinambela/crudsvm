<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>REGISTER SVM</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  {{-- Icon Font Awesome  --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-dark card-dark">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><i class="fa-brands fa-laravel"></i></a>
    </div>
    <div class="card-body">

      <form action="/registeruser" method="post">
		@csrf
        <div class="input-group mb-3">
			<input type="name" class="form-control" name="name" placeholder="Name">
			<div class="input-group-append">
			</div>
		  </div>

		<div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
          </div>
        </div>

		<div class="input-group mb-3">
			<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
			<div class="input-group-append">
			</div>
		  </div>

        <div class="row">
          <div class="col-8">
			<p class="mb-0">
				<a href="/login" class="text-center text-secondary">Already Registered?</a>
			</p>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-dark btn-block">REGISTER</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('template/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
