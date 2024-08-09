<!DOCTYPE html>
<html lang="en">

<head>
	@include('admin.template.header')
</head>

<body class="g-sidenav-show bg-gray-200">
	{{-- aside start --}}
	@include('admin.template.aside')
	{{-- aside end --}}
	<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
		{{-- main content --}}
		@yield('container')
		{{-- end main content --}}
	</main>
	{{-- setting start --}}
	@include('admin.template.setting')
	{{-- setting end --}}
	{{-- script start --}}
	@include('admin.template.script')
	{{-- script end --}}
</body>

</html>
