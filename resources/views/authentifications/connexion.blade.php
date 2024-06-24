
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
									<input type="email" class="form-control"  placeholder="Email Address *" name="email" value="{{old('email')}}">
                  @error('email')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
								</div>
							</div>
							<div class="formsix-e">
								<div class="form-group i-password">
									<input type="password" class="form-control" id="password2" placeholder="Password *" name="password" value="{{old('password')}}">
                  @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
								</div>
							</div>
							
							<div class="login_btn_wrapper">
								<button type="submit" class="btn btn-primary login_btn"> se connecter</button>
							</div>
              </form>
							<div class="login_message">
								<p>Vous&rsquo; n'avez pas de compte ? <a href="{{url('/compte')}}"> s'inscrire </a> </p>
							</div>
						</div>
						<!-- /.login_wrapper-->
					</div>
				</div>
			</div>
		</div>
</body>
</html>