@extends('layouts.app')

@section('title', "Registrazione")

@section('content')
<form class="login100-form validate-form flex-sb flex-w" action="{{route('register')}}" method="post" name="signup" enctype="multipart/form-data">
				@csrf

					<span class="login100-form-title p-b-51">
						SignUp
					</span>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Nome is required">
						<input class="input100" type="text" name="name" placeholder="Nome">
						<span class="focus-input100"></span>
						@error("name")
						{{$message}}
						@enderror
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Cognome is required">
						<input class="input100" type="text" name="surname" placeholder="Cognome">
						<span class="focus-input100"></span>
						@error("surname")
						{{$message}}
						@enderror
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                    <input class="input100" type="text" name="username" placeholder="Username" verifyUsername="{{route('controllaUtente')}}">
						<span class="focus-input100"></span>
						@error("username")
						{{$message}}
						@enderror
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="date" name="birth" placeholder="Data di Nascita">
						<span class="focus-input100"></span>
						@error("birth")
						{{$message}}
						@enderror
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						@error("email")
						{{$message}}
						@enderror
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						@error("password")
						{{$message}}
						@enderror
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password_confirmation" placeholder="Ripeti Password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Nome is required">
						<input class="input100" type="file" name="photo" accept="images/*" placeholder="Scegli foto">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							SignUp
						</button>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" >
					<a href='{{route("login")}}'>Login</a>
						</button>
					</div>

				</form>
@endsection

@section('script')
<script src="{{asset('js/signup.js')}}" defer="true"></script>
@endsection
