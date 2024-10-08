<div class="fixed-plugin">
	<a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
		<i class="material-icons py-2">settings</i>
	</a>
	<div class="card shadow-lg">
		<div class="card-header pb-0 pt-3">
			<div class="float-start">
				<h5 class="mb-0 mt-3">UI Configurator</h5>
				<p>Website LMS dan Tryout.</p>
			</div>
			<div class="float-end mt-4">
				<button class="btn btn-link text-dark fixed-plugin-close-button p-0">
					<i class="material-icons">clear</i>
				</button>
			</div>
			<!-- End Toggle Button -->
		</div>
		<hr class="horizontal dark my-1" />
		<div class="card-body pt-sm-3 pt-0">
			<!-- Sidebar Backgrounds -->
			<div>
				<h6 class="mb-0">Sidebar Colors</h6>
			</div>
			<a href="javascript:void(0)" class="switch-trigger background-color">
				<div class="badge-colors my-2 text-start">
					<span class="badge bg-gradient-primary active filter" data-color="primary" onclick="sidebarColor(this)"></span>
					<span class="badge bg-gradient-dark filter" data-color="dark" onclick="sidebarColor(this)"></span>
					<span class="badge bg-gradient-info filter" data-color="info" onclick="sidebarColor(this)"></span>
					<span class="badge bg-gradient-success filter" data-color="success" onclick="sidebarColor(this)"></span>
					<span class="badge bg-gradient-warning filter" data-color="warning" onclick="sidebarColor(this)"></span>
					<span class="badge bg-gradient-danger filter" data-color="danger" onclick="sidebarColor(this)"></span>
				</div>
			</a>
			<!-- Sidenav Type -->
			<div class="mt-3">
				<h6 class="mb-0">Sidenav Type</h6>
				<p class="text-sm">Choose between 2 different sidenav types.</p>
			</div>
			<div class="d-flex">
				<button class="btn bg-gradient-dark active mb-2 px-3" data-class="bg-gradient-dark" onclick="sidebarType(this)">
					Dark
				</button>
				<button class="btn bg-gradient-dark mb-2 ms-2 px-3" data-class="bg-transparent" onclick="sidebarType(this)">
					Transparent
				</button>
				<button class="btn bg-gradient-dark mb-2 ms-2 px-3" data-class="bg-white" onclick="sidebarType(this)">
					White
				</button>
			</div>
			<p class="d-xl-none d-block mt-2 text-sm">
				You can change the sidenav type just on desktop view.
			</p>
			<!-- Navbar Fixed -->
			<div class="d-flex mt-3">
				<h6 class="mb-0">Navbar Fixed</h6>
				<div class="form-check form-switch my-auto ms-auto ps-0">
					<input class="form-check-input ms-auto mt-1" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)" />
				</div>
			</div>
			<hr class="horizontal dark my-3" />
			<div class="d-flex mt-2">
				<h6 class="mb-0">Light / Dark</h6>
				<div class="form-check form-switch my-auto ms-auto ps-0">
					<input class="form-check-input ms-auto mt-1" type="checkbox" id="dark-version" onclick="darkMode(this)" />
				</div>
			</div>
		</div>
	</div>
</div>
