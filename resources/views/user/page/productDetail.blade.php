@extends('user.template.templates')

@section('container')
	@include('user.template.landingNavbar')

	<section class="overflow-hidden">
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-4 d-flex align-items-stretch">
					<img src="{{ asset('storage/' . $product->images->first()->image_url) }}" class="img-fluid w-100 rounded" alt="{{ $product->product_name }}"
						style="object-fit: cover; height: auto; max-height: 75vh;"> <!-- Batasi tinggi gambar -->
				</div>
				<div class="col-md-8">
					<h1>{{ $product->product_name }}</h1>
					<p class="my-0">{{ $product->product_description }}</p>
					<p class="my-0">Weight: {{ $product->product_weight }}g</p>
					<p class="my-0">Price: Rp {{ number_format($product->price, 0, ',', '.') }}</p> <!-- Format harga ke Rupiah -->
					<p class="my-0">Stock: {{ $product->stock }}</p>
					<p class="my-0">
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
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
