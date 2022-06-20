<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Guru</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('assetslogin/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assetslogin/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assetslogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assetslogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assetslogin/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('assetslogin/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assetslogin/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assetslogin/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('assetslogin/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assetslogin/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assetslogin/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form action="{{ route('login-guru')}}" method="POST" enctype="multipart/form-data" class="login100-form validate-form" >
				@if(Session::has('success'))
				<div class="alert alert-success">{{Session::get('success')}}</div>
				@endif
				@if(Session::has('fail'))
				<div class="alert alert-success">{{Session::get('fail')}}</div>
				@endif
				@csrf
					<span class="login100-form-title p-b-43">
						Teacher Login
					</span>
					
					<div class= "wrap-input100 validate-input" style="width:570px" data-validate="NUPTK is required">
						<input class="input100" type="password" name="NUPTK" value="{{old('NUPTK')}}">
						<span class="label-input100">NUPTK</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>
					
					<div class="text-center w-full p-t-23">
						<a href="#" class="txt1">
							Forgot password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="{{ asset('assetslogin/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assetslogin/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assetslogin/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('assetslogin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assetslogin/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assetslogin/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('assetslogin/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assetslogin/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assetslogin/js/main.js') }}"></script>
	<script>
		$('input').on('keyup',function(){
			var input = $(this).val();
			localStorage.setItem("NUPTK", input);
			
		})
	</script>

</body>
</html>