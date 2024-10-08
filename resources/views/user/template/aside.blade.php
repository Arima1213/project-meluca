<?php
// Cek apakah pengguna sudah login
$isLoggedIn = Auth::check();
?>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-xl fixed-start bg-gradient-dark my-3 ms-3 border-0" id="sidenav-main">
	<div class="sidenav-header">
		<i class="fas fa-times position-absolute d-none d-xl-none end-0 top-0 cursor-pointer p-3 text-white opacity-5" aria-hidden="true" id="iconSidenav"></i>
		<a class="navbar-brand m-0" href="index" target="_blank">
			<span class="font-weight-bold ms-1 text-white">MELUCA</span>
		</a>
	</div>
	<hr class="horizontal light mb-2 mt-0" />
	<div class="navbar-collapse max-height-vh-100 collapse w-auto" id="sidenav-collapse-main">
		<ul class="navbar-nav">
			<?php
			// Mengambil nama slug dari URL
			$currentUrlSlug = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
			?>
			<li class="nav-item">
				<a class="nav-link <?= $currentUrlSlug == '' ? 'active bg-gradient-primary' : '' ?> text-white" href="{{ route('landing') }}">
					<div class="d-flex align-items-center justify-content-center me-2 text-center text-white">
						<i class="fas fa-home opacity-10"></i>
					</div>
					<span class="nav-link-text ms-1">Landing</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $currentUrlSlug == 'products' ? 'active bg-gradient-primary' : '' ?> text-white" href="{{ route('products') }}">
					<div class="d-flex align-items-center justify-content-center me-2 text-center text-white">
						<i class="fas fa-box opacity-10"></i>
					</div>
					<span class="nav-link-text ms-1">Products</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $currentUrlSlug == 'transaction' ? 'active bg-gradient-primary' : '' ?> text-white" href="{{ route('transactions') }}">
					<div class="d-flex align-items-center justify-content-center me-2 text-center text-white">
						<i class="fas fa-receipt opacity-10"></i>
					</div>
					<span class="nav-link-text ms-1">Transactions</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $currentUrlSlug == 'feedback' ? 'active bg-gradient-primary' : '' ?> text-white" href="{{ route('feedback') }}">
					<div class="d-flex align-items-center justify-content-center me-2 text-center text-white">
						<i class="fas fa-comments opacity-10"></i>
					</div>
					<span class="nav-link-text ms-1">Feedback</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $currentUrlSlug == 'teams' ? 'active bg-gradient-primary' : '' ?> text-white" href="{{ route('team') }}">
					<div class="d-flex align-items-center justify-content-center me-2 text-center text-white">
						<i class="fas fa-users opacity-10"></i>
					</div>
					<span class="nav-link-text ms-1">Tim Kami</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $currentUrlSlug == 'aboutus' ? 'active bg-gradient-primary' : '' ?> text-white" href="{{ route('aboutus') }}">
					<div class="d-flex align-items-center justify-content-center me-2 text-center text-white">
						<i class="fas fa-info-circle opacity-10"></i>
					</div>
					<span class="nav-link-text ms-1">Tentang Kami</span>
				</a>
			</li>
		</ul>
	</div>
	<div class="sidenav-footer position-absolute w-100 bottom-0">
		<div class="mx-3">
			<?php if ($isLoggedIn): ?>
			<form action="{{ route('logout') }}" method="get">
				@csrf
				<button class="btn bg-gradient-primary w-100 mt-4" type="submit">Logout</button>
			</form>
			<?php else: ?>
			<a class="btn bg-gradient-primary w-100 mt-4" href="{{ route('login') }}">Login</a>
			<?php endif; ?>
		</div>
	</div>
</aside>
