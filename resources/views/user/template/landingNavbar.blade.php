<nav class="navbar navbar-main navbar-expand-lg border-radius-xl mx-4 px-0 shadow-none" id="navbarBlur" navbar-scroll="true">
	<div class="container-fluid px-3 py-1">
		<!-- Breadcrumb and other content -->
		<div class="navbar-collapse mt-sm-0 me-md-0 me-sm-4 collapse mt-2" id="navbar">
			<div class="ms-md-auto pe-md-3 d-flex align-items-center">
			</div>
			<ul class="navbar-nav justify-content-end">
				@if (auth()->check())
					<li class="nav-item d-flex align-items-center">
						<a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
							<i class="fa fa-user me-sm-1"></i>
							<span class="d-sm-inline d-none"><strong>{{ auth()->user()->email }}</strong></span>
						</a>
					</li>
					<li class="nav-item d-flex align-items-center">
						<a href="{{ route('cart.index') }}" class="nav-link text-body font-weight-bold position-relative px-0">
							<i class="fa fa-shopping-cart me-sm-1"></i>
							<span class="d-sm-inline d-none">Cart</span>
							<span class="badge bg-danger position-absolute start-100 translate-middle badge-rounded-pill top-0" id="cartItemCount"></span>
						</a>
					</li>
				@else
					<li class="nav-item d-flex align-items-center">
						<a href="{{ route('showLogin') }}" class="nav-link text-body font-weight-bold px-0">
							<i class="fa fa-user me-sm-1"></i>
							<span class="d-sm-inline d-none">Sign In</span>
						</a>
					</li>
				@endif
				<li class="nav-item d-xl-none d-flex align-items-center ps-3">
					<a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
						<div class="sidenav-toggler-inner">
							<i class="sidenav-toggler-line"></i>
							<i class="sidenav-toggler-line"></i>
							<i class="sidenav-toggler-line"></i>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		fetchCartItemCount();
	});

	function fetchCartItemCount() {
		fetch('{{ route('cart.count') }}')
			.then(response => response.json())
			.then(data => {
				const cartItemCount = document.getElementById('cartItemCount');
				cartItemCount.textContent = data.count;
			})
			.catch(error => console.error('Error fetching cart item count:', error));
	}
</script>
