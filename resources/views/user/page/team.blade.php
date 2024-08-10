@extends('user.template.templates')

@section('container')
	@include('user.template.landingNavbar')

	<div class="container-fluid py-4">
		<div class="row">
			<div class="col-12 col-md-4">
				<div class="card">
					<div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
						<a class="d-block blur-shadow-image">
							<img src="{{ asset('img/botol.jpg') }}" alt="img-blur-shadow" class="h-100 img-fluid border-radius-lg img-fixed-height shadow">
						</a>
					</div>
					<div class="card-body px-4 pt-2">
						<a href="javascript:;">
							<h5 class="font-weight-normal mt-3">
								Teh Kemasan Botol
							</h5>
						</a>
						<p>
							Teh siap saji yang praktis dan mudah dibawa kemana-mana. Dengan kemasan botol yang kokoh dan aman.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="card card-body mb-5">
			<div class="row gx-4 mb-2">
				<div class="col-auto">
					<div class="avatar avatar-xl position-relative">
						<img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
					</div>
				</div>
				<div class="col-auto my-auto">
					<div class="h-100">
						<h5 class="mb-1">
							Denny Ariyana
						</h5>
						<p class="font-weight-normal mb-0 text-sm">
							CEO / Co-Founder
						</p>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="card card-plain h-100">
					<div class="card-header p-3 pb-0">
						<div class="row">
							<div class="col-md-8 d-flex align-items-center">
								<h6 class="mb-0">Profile Information</h6>
							</div>
						</div>
					</div>
					<div class="card-body p-3">
						<div class="row">
							<div class="col-12 col-md-7">
								<p class="text-sm">
									Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the
									short term (pain avoidance is creating an illusion of equality).
								</p>
							</div>
							<div class="col-12 col-md-5">
								<ul class="list-group">
									<li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; Alec M. Thompson</li>
									<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; (44) 123 1234 123</li>
									<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; alecthompson@mail.com</li>
									<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; USA</li>
									<li class="list-group-item border-0 pb-0 ps-0">
										<strong class="text-dark text-sm">Social:</strong> &nbsp;
										<a class="btn btn-facebook btn-simple mb-0 py-0 pe-2 ps-1" href="javascript:;">
											<i class="fab fa-facebook fa-lg"></i>
										</a>
										<a class="btn btn-twitter btn-simple mb-0 py-0 pe-2 ps-1" href="javascript:;">
											<i class="fab fa-twitter fa-lg"></i>
										</a>
										<a class="btn btn-instagram btn-simple mb-0 py-0 pe-2 ps-1" href="javascript:;">
											<i class="fab fa-instagram fa-lg"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card card-body mb-5">
			<div class="row gx-4 mb-2">
				<div class="col-auto">
					<div class="avatar avatar-xl position-relative">
						<img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
					</div>
				</div>
				<div class="col-auto my-auto">
					<div class="h-100">
						<h5 class="mb-1">
							Richard Davis
						</h5>
						<p class="font-weight-normal mb-0 text-sm">
							CEO / Co-Founder
						</p>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="card card-plain h-100">
					<div class="card-header p-3 pb-0">
						<div class="row">
							<div class="col-md-8 d-flex align-items-center">
								<h6 class="mb-0">Profile Information</h6>
							</div>
						</div>
					</div>
					<div class="card-body p-3">
						<div class="row">
							<div class="col-12 col-md-7">
								<p class="text-sm">
									Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the
									short term (pain avoidance is creating an illusion of equality).
								</p>
							</div>
							<div class="col-12 col-md-5">
								<ul class="list-group">
									<li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; Alec M. Thompson</li>
									<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; (44) 123 1234 123</li>
									<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; alecthompson@mail.com</li>
									<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; USA</li>
									<li class="list-group-item border-0 pb-0 ps-0">
										<strong class="text-dark text-sm">Social:</strong> &nbsp;
										<a class="btn btn-facebook btn-simple mb-0 py-0 pe-2 ps-1" href="javascript:;">
											<i class="fab fa-facebook fa-lg"></i>
										</a>
										<a class="btn btn-twitter btn-simple mb-0 py-0 pe-2 ps-1" href="javascript:;">
											<i class="fab fa-twitter fa-lg"></i>
										</a>
										<a class="btn btn-instagram btn-simple mb-0 py-0 pe-2 ps-1" href="javascript:;">
											<i class="fab fa-instagram fa-lg"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card card-body mb-5">
			<div class="row gx-4 mb-2">
				<div class="col-auto">
					<div class="avatar avatar-xl position-relative">
						<img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
					</div>
				</div>
				<div class="col-auto my-auto">
					<div class="h-100">
						<h5 class="mb-1">
							Richard Davis
						</h5>
						<p class="font-weight-normal mb-0 text-sm">
							CEO / Co-Founder
						</p>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="card card-plain h-100">
					<div class="card-header p-3 pb-0">
						<div class="row">
							<div class="col-md-8 d-flex align-items-center">
								<h6 class="mb-0">Profile Information</h6>
							</div>
						</div>
					</div>
					<div class="card-body p-3">
						<div class="row">
							<div class="col-12 col-md-7">
								<p class="text-sm">
									Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the
									short term (pain avoidance is creating an illusion of equality).
								</p>
							</div>
							<div class="col-12 col-md-5">
								<ul class="list-group">
									<li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; Alec M. Thompson</li>
									<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; (44) 123 1234 123</li>
									<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; alecthompson@mail.com</li>
									<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; USA</li>
									<li class="list-group-item border-0 pb-0 ps-0">
										<strong class="text-dark text-sm">Social:</strong> &nbsp;
										<a class="btn btn-facebook btn-simple mb-0 py-0 pe-2 ps-1" href="javascript:;">
											<i class="fab fa-facebook fa-lg"></i>
										</a>
										<a class="btn btn-twitter btn-simple mb-0 py-0 pe-2 ps-1" href="javascript:;">
											<i class="fab fa-twitter fa-lg"></i>
										</a>
										<a class="btn btn-instagram btn-simple mb-0 py-0 pe-2 ps-1" href="javascript:;">
											<i class="fab fa-instagram fa-lg"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card card-body mb-5">
			<div class="row gx-4 mb-2">
				<div class="col-auto">
					<div class="avatar avatar-xl position-relative">
						<img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
					</div>
				</div>
				<div class="col-auto my-auto">
					<div class="h-100">
						<h5 class="mb-1">
							Richard Davis
						</h5>
						<p class="font-weight-normal mb-0 text-sm">
							CEO / Co-Founder
						</p>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="card card-plain h-100">
					<div class="card-header p-3 pb-0">
						<div class="row">
							<div class="col-md-8 d-flex align-items-center">
								<h6 class="mb-0">Profile Information</h6>
							</div>
						</div>
					</div>
					<div class="card-body p-3">
						<div class="row">
							<div class="col-12 col-md-7">
								<p class="text-sm">
									Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the
									short term (pain avoidance is creating an illusion of equality).
								</p>
							</div>
							<div class="col-12 col-md-5">
								<ul class="list-group">
									<li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; Alec M. Thompson</li>
									<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; (44) 123 1234 123</li>
									<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; alecthompson@mail.com</li>
									<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; USA</li>
									<li class="list-group-item border-0 pb-0 ps-0">
										<strong class="text-dark text-sm">Social:</strong> &nbsp;
										<a class="btn btn-facebook btn-simple mb-0 py-0 pe-2 ps-1" href="javascript:;">
											<i class="fab fa-facebook fa-lg"></i>
										</a>
										<a class="btn btn-twitter btn-simple mb-0 py-0 pe-2 ps-1" href="javascript:;">
											<i class="fab fa-twitter fa-lg"></i>
										</a>
										<a class="btn btn-instagram btn-simple mb-0 py-0 pe-2 ps-1" href="javascript:;">
											<i class="fab fa-instagram fa-lg"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
