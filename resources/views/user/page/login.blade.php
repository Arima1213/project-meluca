<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Meluca - Login</title>
	<link rel="preconnect" href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
		rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
		crossorigin="anonymous">
	<link
		href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Poppins:wght@200;300;400;500&display=swap"
		rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
</head>

<body class="bg-body" data-bs-spy="scroll" data-bs-target="#navbar"
	data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
	<svg xmlns="http://www.w3.org/2000/svg" style="display: none">
		<!-- SVG symbols here -->
	</svg>

	<div id="preloader">
		<span class="loader">
			<span class="loader-inner"></span>
		</span>
	</div>

	<main>
		<section id="login" class="overflow-hidden py-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-10 col-md-8 col-lg-6">
						<div class="card border-0 shadow-sm">
							<div class="card-body p-5">
								<h2 class="card-title mb-4 text-center">Login</h2>
								<form method="POST" action="{{ route('login') }}">
									@csrf
									<div class="mb-3">
										<label for="email" class="form-label">Email address</label>
										<input type="email" class="form-control" id="email" name="email"
											aria-describedby="emailHelp" required>
									</div>
									<div class="mb-3">
										<label for="password" class="form-label">Password</label>
										<input type="password" class="form-control" id="password" name="password" required>
									</div>
									<div class="form-check mb-3">
										<input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
										<label class="form-check-label" for="rememberMe">Remember me</label>
									</div>
									<button type="submit" class="btn btn-primary w-100">Login</button>
								</form>
								<div class="mt-3 text-center">
									<a href="#">Forgot Password?</a>
								</div>
								<div class="mt-3 text-center">
									<a href="{{ route('showRegister') }}">Don't have an account? Register</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwNr3GXrFH4FhsKts/ILI"
		crossorigin="anonymous"></script>
</body>

</html>
