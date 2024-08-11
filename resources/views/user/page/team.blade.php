@extends('user.template.templates')

@section('container')
	@include('user.template.landingNavbar')

	<div class="container-fluid py-4">
		<div class="row">
			<div class="col-12 col-md-3">
				<div class="card">
					<div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
						<a class="d-block blur-shadow-image">
							<img src="{{ asset('img/pp-arimahendra.jpg') }}" alt="img-blur-shadow" class="h-100 img-fluid border-radius-lg img-fixed-height shadow">
						</a>
					</div>

					<div class="card card-plain h-100">
						<div class="card-header p-3 pb-0">
							<div class="row">
								<h5 class="mb-1">
									Ari Mahendra Fauzi
								</h5>
								<p class="font-weight-normal mb-0 text-sm">
									Chief Technology Officer
								</p>
								<div class="col-md-8 d-flex align-items-center mt-2">
									<h6 class="mb-0">Information</h6>
								</div>
							</div>
						</div>
						<div class="card-body p-3">
							<p class="text-sm">
								Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the
								short term (pain avoidance is creating an illusion of equality).
							</p>
							<ul class="list-group">
								<li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Github:</strong> &nbsp; https://github.com/Arima1213</li>
								<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; +62 873 362 238 489</li>
								<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; arima3992@mail.com</li>
								<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; Surabaya</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
