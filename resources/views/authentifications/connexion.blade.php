
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="{{ asset('css/form.css') }}">
  <title>Document</title>
</head>
<body>
<div class="login_form_wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<!-- login_wrapper -->
						<div class="login_wrapper">
						<h2>connexion</h2>
  @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
  <form action="{{Route('login')}}" method="post">
    @csrf
   @Method('POST')
							<div class="formsix-pos">
								<div class="form-group i-email">
									<input type="email" class="form-control" required="" id="email2" placeholder="Email Address *" name="email" value="{{old('email')}}">
                  @error('email')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
								</div>
							</div>
							<div class="formsix-e">
								<div class="form-group i-password">
									<input type="password" class="form-control" required="" id="password2" placeholder="Password *" name="password" value="{{old('password')}}">
                  @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
								</div>
							</div>
							<div class="login_remember_box">
								<label class="control control--checkbox">Remember me
									<input type="checkbox">
									<span class="control__indicator"></span>
								</label>
								<a href="#" class="forget_password">
									Forgot Password
								</a>
							</div>
							<div class="login_btn_wrapper">
								<button type="submit" class="btn btn-primary login_btn"> Login </button>
							</div>
              </form>
							<div class="login_message">
								<p>Don&rsquo;t have an account ? <a href="{{url('/compte')}}"> Sign up </a> </p>
							</div>
						</div>
						<!-- /.login_wrapper-->
					</div>
				</div>
			</div>
		</div>
</body>
</html>