<header id="header" class="site-header text-black">
	<nav id="header-nav" class="navbar navbar-expand-lg mb-3 px-3">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html">
				<img src="images/MELUCA.png" class="logo" />
			</a>
			<button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button"
				data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar"
				aria-expanded="false" aria-label="Toggle navigation">
				<svg class="navbar-icon" width="50" height="50">
					<use xlink:href="#navbar-icon"></use>
				</svg>
			</button>
			<div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar"
				aria-labelledby="bdNavbarOffcanvasLabel">
				<div class="offcanvas-header px-4 pb-0">
					<a class="navbar-brand" href="index.html">
						<img src="images/main-logo.png" class="logo" />
					</a>
					<button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas"
						aria-label="Close" data-bs-target="#bdNavbar"></button>
				</div>
				<div class="offcanvas-body">
					<ul id="navbar"
						class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
						<li class="nav-item">
							<a class="nav-link me-4" href="{{ route('landing') }}">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link me-4" href="{{ route('shop') }}">Shop</a>
						</li>
						<li class="nav-item">
							<a class="nav-link me-4" href="{{ route('about') }}">About Us</a>
						</li>
						<!-- Button Login -->
						<li class="nav-item">
							<a class="btn btn-primary me-4" href="{{ route('login') }}">Login</a>
						</li>
						<!-- Profile Picture -->
						<li class="nav-item">
							<a class="nav-link" href="{{ route('profile') }}">
								<img src="https://source.unsplash.com/random/300x300/?profile" class="rounded-circle"
									alt="Profile" style="width: 40px; height: 40px;">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
</header>
