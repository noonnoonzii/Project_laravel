@extends('layouts.main.index')

@section('content')
	<section class="ftco-section">
		<div class="container" 
		style=" margin-bottom: 20px;
				margin-top: 20px;">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="heading-section">Account</h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		    			<h3 class="mb-4 text-center">Sign In</h3>
		      			<form action="{{route('login')}}" class="signin-form" method="POST">
                    @csrf
		      		<div class="form-group">
		      			<input name="username" type="text" class="form-control text-center" placeholder="Username" required style="margin-bottom: 5px;>
		      		</div>
	            <div class="form-group">
	              <input name="password" type="password" class="form-control text-center" placeholder="Password" required style="margin-bottom: 5px;>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-dark rounded  px-3" href="{{route('home')}}">Login</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a><br>
								</div>
								
	            </div>
	          </form>
			  <div class="form-group row mb-0">
				  <div class="col md-6">
				 <button class="form-control btn btn-dark rounded submit px-3" type="submit" href="{{route('register')}}">Register</button>
			</div>
		      </div>	
				</div>
			</div>
		</div>
	</section>
@endsection
	

