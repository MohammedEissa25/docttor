<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Register</title>
	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,300&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="css/fontAssume.css" />
	<!-- Customized Bootstrap Stylesheet -->
	<link href="{{asset('assets/login/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link rel="stylesheet" href="{{asset('assets/login/css/reg.css')}}" />
    <style>
       
    </style>
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
	@if(session()->has('succed'))
        <div class="alert alert-info">
            <h3>{{session('succed')}}</h3>
        </div>
    @endif
	<div class="container">
		<div class="screen">
			<div class="screen__content">
				<!-- Start Select  -->
				<div class="form-group d-flex align-items-center justify-content-center mt-4 ms-3 me-3 text-center" dir="rtl">
					<select name="name" id="cboOptions" onchange="showDiv('div',this)" class="form-control w-75 text-center">
						<option value="0">سجل الأن </option>
						<option value="1">سجل الأن (مريض)</option>
						<option value="2">سجل الأن (طبيب)</option>
						<option value="3">سجل الأن (صيدلى)</option>
					</select>
				</div>
				<!-- End Select -->

				<!--Start Mian Header Div-->
				<div class="login" id="div0" style="display: block;">
					<h2 style="font-size: 28px;" class="title">مرحباً بك فى دكتورتك</h2>
				</div>
				<!--End Mian Header Div-->
				<!-- -----------------------------Register------------------------------------- -->

				<!-- Start Form User  -->
				<form method="POST" action="{{route('register')}}" class="login" id="div1" style="display: none;" enctype="multipart/form-data">
					@csrf
					<h2>سجل الأن كمريض</h2>

					<div class="login__field">
						<i class="login__icon fas fa-user"></i>
						<input type="text" name="name" class="login__input" placeholder=" الإسم">
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-envelope"></i>
						<input type="email" name="email" class="login__input" placeholder="البريد الالكتروني">
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-phone"></i>
						<input type="text" name="mobileNumber" class="login__input" placeholder=" رقم الموبايل">
					</div>
					<div class="login__field">
						<input type="date" name="birthDate" class="login__input" placeholder=" تاريخ الميلاد">
					</div>
					<div class="login__field">
						<select name="bloodType" class="form-control ">
                            <Option>اختر فصيلة الدم</Option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
					    </select>
					</div>
					<div class="login__field d-flex align-center justify-content-center">
						<span class="gender">
                            <label for="male">ذكر</label>
                            <input type="radio" name="gender" id="male" value="ذكر">
                        </span>
						<span class="gender">
                            <label for="female">أنثى</label>
                            <input type="radio" name="gender" id="female" value="أنثى">
                        </span>
					</div>
					<div class="login__field photo">
						<i class="login__icon fas fa-image"></i>
						<input type="file" name="image" class="login__input file" >
						
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-lock"></i>
						<input type="password" name="password" class="login__input" id="userpass" placeholder="كلمة المرور ">
						<i class="fa-regular fa-eye show_pass" id="eye1"></i>
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-lock"></i>
						<input type="password" name="password_confirmation" class="login__input" id="userpass" placeholder="كلمة المرور ">
						<i class="fa-regular fa-eye show_pass" id="eye1"></i>
					</div>
					<button class="button login__submit">
						<span class="button__text">سجل الأن</span>
					</button>
				</form>
				<!-- End Form User  -->

				<!-- Start Form Doctor -->
				
				<form method="POST" action="{{route('register_Doctor')}}" class="login" id="div2" style="display: none;" enctype="multipart/form-data">
				@csrf
					<h2>سجل الأن كطبيب</h2>

					<div class="login__field">
						<i class="login__icon fas fa-user"></i>
						<input type="text" name="name" class="login__input" placeholder=" الإسم">
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-envelope"></i>
						<input type="email"  name="email" class="login__input" placeholder="البريد الالكتروني">
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-phone"></i>
						<input type="text" name="mobileNumber" class="login__input" placeholder=" رقم الموبايل">
					</div>
					<div class="login__field">
						<input type="date" name="birthDate" class="login__input" placeholder=" تاريخ الميلاد">
					</div>
					<div class="login__field">
						<input type="text" name="specialization" class="login__input" placeholder="التخصص">
					</div>
					<div class="login__field">
                        <i class=" login__icon fa-solid fa-stethoscope"></i>
						<textarea class="login__input" name="province" placeholder="المحافظة"></textarea>
					</div>
					<div class="login__field">
                        <i class=" login__icon fa-solid fa-stethoscope"></i>
						<textarea class="login__input" name="city" placeholder="المدينة"></textarea>
					</div>
					<div class="login__field ">
						<i class="login__icon fas fa-user-graduate"></i>
						<label for="image">صورة شخصية</label>
						<input type="file" id="image" name="image" class="login__input file" placeholder="صورة شخصية" >
					</div>
					<div class="login__field ">
						<i class="login__icon fas fa-image"></i>
						<label for="certification">صورة الشهادة</label>
						<input type="file" name="certification" class="login__input file" placeholder="صورةالشهادة" >
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-lock"></i>
						<input type="password" name="password" class="login__input" id="userpass2" placeholder="كلمة المرور ">
						<i class="fa-regular fa-eye show_pass" id="eye2"></i>
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-lock"></i>
						<input type="password" name="password_confirmation" class="login__input" id="userpass" placeholder="تأكيد كلمة المرور">
						<i class="fa-regular fa-eye show_pass" id="eye1"></i>
					</div>
					<button type="submit" class="button login__submit">
						<span class="button__text">سجل الأن</span>
					</button>
				</form>
				<!-- End Form Doctor -->

				<!-- Strat Form Pharacist -->
				<form method="POST" action="{{route('register_Pharmacist')}}" class="login" id="div3" style="display: none;" enctype="multipart/form-data">
					@csrf
						<h2>سجل الأن كطبيب</h2>
	
						<div class="login__field">
							<i class="login__icon fas fa-user"></i>
							<input type="text" name="name" class="login__input" placeholder=" الإسم">
						</div>
						<div class="login__field">
							<i class="login__icon fas fa-envelope"></i>
							<input type="email"  name="email" class="login__input" placeholder="البريد الالكتروني">
						</div>
						<div class="login__field">
							<i class="login__icon fas fa-phone"></i>
							<input type="text" name="mobileNumber" class="login__input" placeholder=" رقم الموبايل">
						</div>
						<div class="login__field">
							<input type="date" name="birthDate" class="login__input" placeholder=" تاريخ الميلاد">
						</div>
						<div class="login__field">
							<i class=" login__icon fa-solid fa-stethoscope"></i>
							<textarea class="login__input" name="province" placeholder="المحافظة"></textarea>
						</div>
						<div class="login__field">
							<i class=" login__icon fa-solid fa-stethoscope"></i>
							<textarea class="login__input" name="city" placeholder="المدينة"></textarea>
						</div>
						<div class="login__field ">
							<i class="login__icon fas fa-user-graduate"></i>
							<label for="image">صورة شخصية</label>
							<input type="file" id="image" name="image" class="login__input file" placeholder="صورة شخصية" >
						</div>
						<div class="login__field ">
							<i class="login__icon fas fa-image"></i>
							<label for="certification">صورة الشهادة</label>
							<input type="file" name="certification" class="login__input file" placeholder="صورةالشهادة" >
						</div>
						<div class="login__field">
							<i class="login__icon fas fa-lock"></i>
							<input type="password" name="password" class="login__input" id="userpass2" placeholder="كلمة المرور ">
							<i class="fa-regular fa-eye show_pass" id="eye2"></i>
						</div>
						<div class="login__field">
							<i class="login__icon fas fa-lock"></i>
							<input type="password" name="password_confirmation" class="login__input" id="userpass" placeholder="تأكيد كلمة المرور">
							<i class="fa-regular fa-eye show_pass" id="eye1"></i>
						</div>
						<button type="submit" class="button login__submit">
							<span class="button__text">سجل الأن</span>
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