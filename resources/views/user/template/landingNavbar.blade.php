<nav class="navbar navbar-main navbar-expand-lg border-radius-xl mx-4 px-0 shadow-none" id="navbarBlur" navbar-scroll="true">
	<div class="container-fluid px-3 py-1">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb me-sm-6 mb-0 me-5 bg-transparent px-0 pb-0 pt-1" id="dynamicBreadcrumb">
				<li class="breadcrumb-item text-sm">
					<span class="text-dark opacity-5">Page</span>
				</li>
			</ol>
			<h6 class="font-weight-bolder mb-0" id="currentPage">Dashboard</h6>
		</nav>

		<script>
			function updateBreadcrumb() {
				const path = window.location.pathname;
				const parts = path.split('/').filter(part => part && !part.match(/^\d+$/));

				const breadcrumb = document.getElementById('dynamicBreadcrumb');
				const currentPage = document.getElementById('currentPage');

				// Clear existing items except the first one
				while (breadcrumb.children.length > 1) {
					breadcrumb.removeChild(breadcrumb.lastChild);
				}

				// Add new items
				parts.forEach((part, index) => {
					const li = document.createElement('li');
					li.className = index === parts.length - 1 ?
						'breadcrumb-item text-dark active text-sm' :
						'breadcrumb-item text-sm';
					li.textContent = part.charAt(0).toUpperCase() + part.slice(1);
					if (index === parts.length - 1) {
						li.setAttribute('aria-current', 'page');
					}
					breadcrumb.appendChild(li);
				});

				// Update current page title
				currentPage.textContent = parts[parts.length - 1] ?
					parts[parts.length - 1].charAt(0).toUpperCase() + parts[parts.length - 1].slice(1) :
					'Dashboard';
			}

			// Call the function when the page loads
			document.addEventListener('DOMContentLoaded', updateBreadcrumb);

			// If you're using a single-page application, you might need to call this
			// function whenever the route changes
		</script>
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
				@else
					<li class="nav-item d-flex align-items-center">
						<a href="{{ route('showLogin') }}" class="nav-link text-body font-weight-bold px-0">
							<i class="fa fa-user me-sm-1"></i>
							<span class="d-sm-inline d-none">Sign In</span>
						</a>
					</li>
				@endif
			</ul>
		</div>
	</div>
</nav>
