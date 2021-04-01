@extends('layouts.app')

@section('title', "Login")


@section('content')
<form class="login100-form validate-form flex-sb flex-w" action='{{route("login")}}' method="POST" name="signin">
				@csrf
					<span class="login100-form-title p-b-51">
						Login
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							<a href='{{route("register")}}'>SignUp</a>
						</button>
					</div>

				</form>
@endsection
