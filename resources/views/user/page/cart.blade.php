@extends('user.template.templates')

@section('container')
	@include('user.template.landingNavbar')

	<div class="container-fluid py-4">
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
							{{ Auth::user()->name }}
						</h5>
						<p class="font-weight-normal mb-0 text-sm">
							User
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				@if ($cart)
					@foreach ($cart->cartItems as $item)
						<div class="card card-plain h-100 mb-4">
							<div class="card-header p-3 pb-0">
								<div class="row">
									<div class="col-md-8 d-flex align-items-center">
										<h6 class="mb-0">Product Information</h6>
									</div>
								</div>
							</div>
							<div class="card-body p-3">
								<div class="row">
									<div class="col-12 col-md-5">
										<img src="{{ asset('storage/products/' . $item->product->image_url) }}" alt="{{ $item->product->name }}" class="img-fluid">
									</div>
									<div class="col-12 col-md-7">
										<h5>{{ $item->product->name }}</h5>
										<p class="text-sm">Price: ${{ $item->product->price }}</p>
										<p class="text-sm">Quantity: {{ $item->quantity }}</p>
										<p class="text-sm">Total: ${{ $item->product->price * $item->quantity }}</p>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				@else
					<p>Your cart is empty.</p>
				@endif
			</div>
		</div>
	</div>
@endsection
