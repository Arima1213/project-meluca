@extends('user.template.templates')

@section('container')
	@include('user.template.landingNavbar')

	<section class="overflow-hidden">
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-6">
					@if ($product->images->isNotEmpty())
						<img src="{{ $product->images->first()->image_url }}" class="img-fluid" alt="{{ $product->product_name }}">
					@else
						<img src="https://source.unsplash.com/random/600x600/?tea" class="img-fluid" alt="Default Image">
					@endif
				</div>
				<div class="col-md-6">
					<h1>{{ $product->product_name }}</h1>
					<p>{{ $product->product_description }}</p>
					<p>Weight: {{ $product->product_weight }}g</p>
					<p>Price: ${{ $product->price }}</p>
					<p>Stock: {{ $product->stock }}</p>
					<p>
						Categories:
						@foreach ($product->categories as $category)
							<a href="{{ route('products', ['category' => $category->id]) }}">{{ $category->name }}</a>
						@endforeach
					</p>
					<div class="d-flex">
						<form action="{{ route('cart.add', $product->id) }}" method="POST">
							@csrf
							<button type="submit" class="btn btn-primary mr-2">Add to Cart</button>
						</form>
						<form action="{{ route('order.create', $product->id) }}" method="GET">
							@csrf
							<button type="submit" class="btn btn-success">Beli</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
