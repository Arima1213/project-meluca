@extends('user.template.templates')

@section('container')
	@include('user.template.landingNavbar')

	<section class="overflow-hidden">
		<div class="container mt-5">
			<div class="row mb-4">
				<div class="col-12">
					<h2>Categories</h2>
					<ul class="list-inline">
						@foreach ($categories as $category)
							<li class="list-inline-item">
								<a href="{{ route('products', ['category' => $category->id]) }}" class="btn btn-outline-primary">{{ $category->name }}</a>
							</li>
						@endforeach
					</ul>
				</div>
			</div>

			<div class="row">
				@foreach ($products as $product)
					<div class="col-6 col-md-4 col-lg-3 mb-4 px-3">
						<div class="card">
							<img src="{{ asset('storage/' . $product->images->first()->image_url) }}" class="card-img-top square-img" alt="{{ $product->product_name }}">
							<div class="card-body">
								<h5 class="card-title">{{ $product->product_name }}</h5>
								<p class="card-text mb-4">{{ $product->product_description }}</p>
								<p class="card-text">Weight: {{ $product->product_weight }}g</p>
								<p class="card-text">Price: ${{ $product->price }}</p>
								<p class="card-text">Stock: {{ $product->stock }}</p>
								<p class="card-text">
									Categories:
									@foreach ($product->categories as $category)
										<a href="{{ route('products', ['category' => $category->id]) }}">{{ $category->name }}</a>
									@endforeach
								</p>
								<a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">View Details</a>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
@endsection
