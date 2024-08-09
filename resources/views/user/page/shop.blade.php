@extends('user.template.templates')

@section('container')
	@include('user.template.landingNavbar')

	<section class="overflow-hidden">
		<div class="container mt-5">
			<div class="row">
				<div class="col-6 col-md-4 col-lg-3 mb-4 px-3">
					<div class="card">
						<img src="https://source.unsplash.com/random/300x300/?tea" class="card-img-top square-img" alt="Random Tea Image">
						<div class="card-body">
							<h5 class="card-title">Card title 1</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk
								of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-md-4 col-lg-3 mb-4 px-3">
					<div class="card">
						<img src="https://source.unsplash.com/random/300x300/?tea" class="card-img-top square-img" alt="Random Tea Image">
						<div class="card-body">
							<h5 class="card-title">Card title 2</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk
								of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-md-4 col-lg-3 mb-4 px-3">
					<div class="card">
						<img src="https://source.unsplash.com/random/300x300/?tea" class="card-img-top square-img" alt="Random Tea Image">
						<div class="card-body">
							<h5 class="card-title">Card title 3</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk
								of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-md-4 col-lg-3 mb-4 px-3">
					<div class="card">
						<img src="https://source.unsplash.com/random/300x300/?tea" class="card-img-top square-img" alt="Random Tea Image">
						<div class="card-body">
							<h5 class="card-title">Card title 3</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk
								of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
