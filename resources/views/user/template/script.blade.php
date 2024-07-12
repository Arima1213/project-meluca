<script src="./assets/js/core/popper.min.js"></script>
<script src="./assets/js/core/bootstrap.min.js"></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="./assets/js/plugins/chartjs.min.js"></script>
<script src="./assets/js/material-dashboard.min.js?v=3.0.0"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	@if (Session::has('alert'))
		Swal.fire({
			icon: '{{ Session::get('alert')['type'] }}',
			title: '{{ Session::get('alert')['title'] }}',
			text: '{{ Session::get('alert')['message'] }}',
			showConfirmButton: false,
			timer: 3000
		});
	@endif
</script>
<script>
	var win = navigator.platform.indexOf('Win') > -1;
	if (win && document.querySelector('#sidenav-scrollbar')) {
		var options = {
			damping: '0.5',
		};
		Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
	}
</script>
