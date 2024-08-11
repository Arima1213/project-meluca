@extends('user.template.templates')

@section('container')
	@include('user.template.landingNavbar')

	<section class="overflow-hidden">
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-4 d-flex align-items-stretch">
					<img src="{{ asset('storage/' . $product->images->first()->image_url) }}" class="img-fluid w-100 h-75" alt="{{ $product->product_name }}"
						style="object-fit: cover; ">
				</div>
				<div class="col-md-8">
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
						{{-- <form action="{{ route('order.create', $product->id) }}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-success">Beli</button>
                        </form> --}}
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
