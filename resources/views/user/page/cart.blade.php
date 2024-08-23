@extends('user.template.templates')

@section('container')
	@include('user.template.landingNavbar')
	<div class="container-fluid py-4">
		<div class="row">
			<div class="col-12">
				<div class="card my-4">
					<div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
						<div class="bg-gradient-primary shadow-primary border-radius-lg pb-3 pt-4">
							<h6 class="text-capitalize ps-3 text-white">Shopping Cart</h6>
						</div>
					</div>
					<div class="card-body">
						@if ($cartItems->isEmpty())
							<p>Your cart is empty.</p>
						@else
							@foreach ($cartItems as $item)
								<div class="row">
									<p class="col text-bold">{{ $item->product->product_name }}</p>
									<p class="col">Price: ${{ number_format($item->product->price, 2) }}</p>
									<p class="col">Quantity: {{ $item->quantity }}</p>
									<p class="col">Total: ${{ number_format($item->product->price * $item->quantity, 2) }}</p>
								</div>
							@endforeach

							<!-- Section Pengiriman -->
							<div class="row mt-4">
								<div class="col-md-6">
									<div class="form-group">
										<label for="province">Province</label>
										<select id="province" class="form-control">
											<option value="">Select Province</option>
											@foreach ($provinces as $province)
												<option value="{{ $province['province_id'] }}">{{ $province['province'] }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="city">City</label>
										<select id="city" class="form-control">
											<option value="">Select City</option>
										</select>
									</div>
								</div>
							</div>

							<!-- Section Total -->
							<div class="row mt-4">
								<div class="col text-right">
									<h6>Total: $<span id="total-amount">{{ number_format($cartItems->sum(fn($item) => $item->product->price * $item->quantity), 2) }}</span></h6>
								</div>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			$('#province').on('change', function() {
				let provinceId = $(this).val();
				if (provinceId) {
					$.ajax({
						url: '/get-cities/' + provinceId,
						type: 'GET',
						success: function(data) {
							$('#city').empty();
							$('#city').append('<option value="">Select City</option>');
							$.each(data, function(key, value) {
								$('#city').append('<option value="' + value.city_id + '">' + value.city_name +
									'</option>');
							});
						}
					});
				} else {
					$('#city').empty();
					$('#city').append('<option value="">Select City</option>');
				}
			});
		});
	</script>
@endsection
