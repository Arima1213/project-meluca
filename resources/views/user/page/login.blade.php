@extends('user.template.loginTemplates')

@section('container')
	<div class="page-header align-items-start min-vh-100"
		style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
		<span class="mask bg-gradient-dark opacity-6"></span>
		<div class="container my-auto">
			<div class="row">
				<div class="col-lg-4 col-md-8 col-12 mx-auto">
					<div class="card z-index-0 fadeIn3 fadeInBottom">
						<div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
							<div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
								<h4 class="font-weight-bolder mb-0 mt-2 text-center text-white">Login</h4>
								<p class="mb-0 mt-2 text-center text-white">Blasta Hidroponik</p>
							</div>
						</div>
						<div class="card-body">
							<form role="form" class="text-start" action="funcLogin.php" method="post">
								<div class="input-group input-group-outline my-3">
									<label class="form-label">Email</label>
									<input type="email" name="email" class="form-control">
								</div>
								<div class="input-group input-group-outline mb-3">
									<label class="form-label">Password</label>
									<input type="password" name="password" class="form-control">
								</div>
								<div class="text-center">
									<button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Login</button>
								</div>
								<p class="mt-4 text-center text-sm">
									Don't have an account?
									<a href="{{ route('showRegister') }}" class="text-primary text-gradient font-weight-bold">Sign
										up</a>
								</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
