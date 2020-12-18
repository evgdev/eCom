@extends('master')
@section('content')
<div class="container custom-login">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
	<form class="form-signin">
		<div class="form-group">
	      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
	      <label for="inputEmail" >Email address</label>
	      <input type="email" id="inputEmail" class="form-control mb-5" placeholder="Email address" required autofocus>
	      <div class="mt-5">
	      <label for="inputPassword" class=" mt-5">Password</label>
	      <input type="password" id="inputPassword" class="form-control mt-5" placeholder="Password" required>
	      </div>
	      <div class="checkbox mb-3">
	        <label>
	          <input type="checkbox" value="remember-me"> Remember me
	        </label>
	      </div>
	      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </div>
    </form>			
		</div>
	</div>
</div>

@endsection