@extends('user.template.templates')

@section('container')
	@include('user.template.landingNavbar')
	<div class="container-fluid py-4">
		@if (count($products) > 0)
			@foreach ($products as $product)
				<div class="col-6 col-md-4 col-lg-3 mt-5">
					<div class="card">
						<div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
							<a href="{{ url('detail-product/' . $product->id) }}" class="d-block blur-shadow-image">
								<img src="{{ asset('uploads/' . basename($product->images->first()->image_url)) }}" alt="img-blur-shadow"
									class="img-fluid w-100 border-radius-lg shadow">
							</a>
							<div class="colored-shadow" style="background-image: url('{{ asset('uploads/' . basename($product->images->first()->image_url)) }}');">
							</div>
						</div>
						<div class="card-body px-4 pt-2">
							<a href="{{ url('detail-product/' . $product->id) }}">
								<h5 class="font-weight-normal mt-3">{{ $product->product_name }}</h5>
							</a>
							<p>Rp {{ number_format($product->price, 0, ',', '.') }}</p> <!-- Mengubah format harga ke Rupiah -->
							<a href="{{ url('detail-product/' . $product->id) }}" class="btn bg-gradient-primary mb-0 mt-3">Read more</a>
						</div>
					</div>
				</div>
			@endforeach
		@else
			<p>No products found.</p>
		@endif
		@include('user.template.footer')
	</div>
@endsection
