@extends('user.template.loginTemplates')

@section('container')
	<div class="page-header min-vh-100">
		<div class="container">
			<div class="row">
				<div class="col-6 d-lg-flex d-none h-100 position-absolute justify-content-center flex-column start-0 top-0 my-auto pe-0 text-center">
					<div class="position-relative bg-gradient-primary h-100 border-radius-lg d-flex flex-column justify-content-center m-3 px-7"
						style="background-image: url('./assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
					</div>
				</div>
				<div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-lg-auto me-lg-5 me-auto ms-auto">
					<div class="card card-plain">
						<div class="card-header">
							<h4 class="font-weight-bolder">Sign Up</h4>
							<p class="mb-0">Enter your email and password to register</p>
						</div>
						<div class="card-body">
							<form role="form" action="{{ route('register') }}" method="POST">
								@csrf
								<div class="input-group input-group-outline mb-3">
									<label class="form-label">Name</label>
									<input type="text" class="form-control" name="name" required>
								</div>
								<div class="input-group input-group-outline mb-3">
									<label class="form-label">Email</label>
									<input type="email" class="form-control" name="email" required>
								</div>
								<div class="input-group input-group-outline mb-3">
									<label class="form-label">Password</label>
									<input type="password" class="form-control" name="password" required>
								</div>
								<div class="form-check form-check-info ps-0 text-start">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked required>
									<label class="form-check-label" for="flexCheckDefault">
										I agree to the <a class="text-dark font-weight-bolder">Terms and
											Conditions</a>
									</label>
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mb-0 mt-4">Register</button>
								</div>
							</form>

						</div>
						<div class="card-footer px-lg-2 px-1 pt-0 text-center">
							<p class="mx-auto mb-2 text-sm">
								Already have an account?
								<a href="{{ route('showLogin') }}" class="text-primary text-gradient font-weight-bold">Sign
									in</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
