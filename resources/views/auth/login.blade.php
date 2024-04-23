<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sign In</title>
	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,300&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/login/css/fontAssume.css')}}" />
	<!-- Customized Bootstrap Stylesheet -->
	<link href="{{asset('assets/login/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link rel="stylesheet" href="{{asset('assets/login/css/style.css')}}" />
</head>

<body>

	@if ($errors->any())
    <div class="alert alert-danger">
        <h3>Error Occured</h3>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
	<div class="container">
		<div class="screen">
			<div class="screen__content">
	@if(session()->has('status'))
        <div class="alert alert-info">
            <h3>{{session('status')}}</h3>
        </div>
    @endif

				<!-- Start Select  -->
				<div class="form-group d-flex align-items-center justify-content-center mt-4 ms-3 me-3 text-center" dir="rtl">
					<select name="name" id="cboOptions" onchange="showDiv('div',this)" class="form-control w-75 text-center">
						<option value="0">تسجيل دخول </option>
						<option value="1">تسجيل دخول (مريض)</option>
						<option value="2">تسجيل دخول (طبيب)</option>
						<option value="3">تسجيل دخول (صيدلى)</option>
					</select>
				</div>
				<!-- End Select -->

				<!--Start Mian Header Div-->
				<div class="login" id="div0" style="display: block;">
					<h2 style="font-size: 28px;" class="title">مرحباً بك فى دكتورتك</h2>
				</div>
				<!--End Mian Header Div-->
				<!-- -----------------------------Login------------------------------------- -->

				<!-- Start Form User  -->
				<form action="{{route('login.user')}}" method="POST" class="login" id="div1" style="display: none;">
					@csrf
					<h2>الدخول كمريض</h2>

					<div class="login__field">
						<i class="login__icon fas fa-envelope"></i>
						<input type="email" name="email" class="login__input" placeholder="البريد الالكتروني">
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-lock"></i>
						<input type="password" name="password" class="login__input" id="userpass" placeholder="كلمة المرور ">
						<i class="fa-regular fa-eye show_pass" id="eye1"></i>
					</div>
					<button class="button login__submit">
						<span class="button__text">تسجيل الدخول</span>
					</button>
				</form>
				<!-- End Form User  -->

				<!-- Start Form Doctor -->
				
				<form action="{{route('login.doctor')}}" method="POST" class="login" id="div2" style="display: none;">
					@csrf
					<h2> الدخول كطبيب</h2>
					<div class="login__field">
						<i class="login__icon fas fa-envelope"></i>
						<input type="email" name="email" class="login__input" placeholder="البريد الالكتروني">
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-lock"></i>
						<input type="password" name="password" class="login__input" id="userpass2" placeholder="كلمة المرور ">
						<i class="fa-regular fa-eye show_pass" id="eye2"></i>
					</div>
					<button type="submit" class="button login__submit">
						<span class="button__text"> تسجيل الدخول</span>
					</button>
				</form>
				<!-- End Form Doctor -->

				<!-- Strat Form Pharacist -->
				<form action="{{route('login.Pharmacist')}}" method="POST" class="login" id="div3" style="display: none;">
					@csrf
					<h2>الدخول كصيدلي</h2>
					<div class="login__field">
						<i class="login__icon fas fa-envelope"></i>
						<input type="email" name="email" class="login__input" placeholder="البريد الالكتروني">
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-lock"></i>
						<input type="password" name="password" class="login__input" id="userpass2" placeholder="كلمة المرور ">
						<i class="fa-regular fa-eye show_pass" id="eye2"></i>
					</div>
					<button type="submit" class="button login__submit">
						<span class="button__text"> تسجيل الدخول</span>
					</button>
				</form>
				
				<!-- End Form Pharacist -->

				<div class="social-login">
				</div>
			</div>
			<!-- Start Backeground -->
			<div class="screen__background">
				<span class="screen__background__shape screen__background__shape4"></span>
				<span class="screen__background__shape screen__background__shape3"></span>
				<span class="screen__background__shape screen__background__shape2"></span>
				<span class="screen__background__shape screen__background__shape1"></span>
			</div>
			<!-- End Backeground -->
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

	<script src="{{asset('assets/login/js/script.js')}}"></script>
</body>

</html>