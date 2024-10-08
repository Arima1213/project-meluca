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
								<div class="row mb-3" data-weight="{{ $item->product->product_weight * $item->quantity }}">
									<p class="col text-bold">{{ $item->product->product_name }}</p>
									<p class="col">Price: Rp{{ number_format($item->product->price, 0, ',', '.') }}</p>
									<p class="col">Quantity: {{ $item->quantity }}</p>
									<p class="col">Total: Rp{{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}</p>
									<p class="col">
									<form action="{{ route('cart.delete', $item->id) }}" method="POST">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger btn-sm">Remove</button>
									</form>
									</p>
								</div>
							@endforeach

							<!-- Section Pengiriman -->
							<div class="row mt-4">
								<div class="col-md-4">
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
								<div class="col-md-4">
									<div class="form-group">
										<label for="city">City</label>
										<select id="city" class="form-control">
											<option value="">Select City</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="courier">Courier</label>
										<select id="courier" class="form-control">
											<option value="jne">JNE</option>
											<option value="pos">POS</option>
											<option value="tiki">TIKI</option>
										</select>
									</div>
								</div>
							</div>

							<div class="row mt-4">
								<div class="col-md-12 row gap-3" id="shipping-options"></div>
							</div>

							<!-- Section Total -->
							<div class="row mt-4">
								<div class="col text-right">
									<h6>Total: Rp<span
											id="total-amount">{{ number_format($cartItems->sum(fn($item) => $item->product->price * $item->quantity), 0, ',', '.') }}</span></h6>
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
			let totalAmount = {{ $cartItems->sum(fn($item) => $item->product->price * $item->quantity) }};
			let totalWeight = 0;

			// Hitung total berat produk
			$('.row[data-weight]').each(function() {
				totalWeight += parseFloat($(this).data('weight'));
			});

			$('#province').on('change', function() {
				let provinceId = $(this).val();
				if (provinceId) {
					$.ajax({
						url: '/get-cities/' + provinceId,
						type: 'GET',
						success: function(data) {
							$('#city').empty().append('<option value="">Select City</option>');
							$.each(data, function(key, value) {
								$('#city').append('<option value="' + value.city_id + '">' + value.city_name +
									'</option>');
							});
						}
					});
				} else {
					$('#city').empty().append('<option value="">Select City</option>');
				}
			});

			$('#city, #courier').on('change', function() {
				let cityId = $('#city').val();
				let courier = $('#courier').val();

				if (cityId && courier) {
					$.ajax({
						url: '/get-shipping-cost',
						type: 'POST',
						data: {
							_token: '{{ csrf_token() }}',
							city: cityId,
							weight: totalWeight, // Mengirimkan total berat ke controller
							courier: courier
						},
						success: function(data) {
							$('#shipping-options').empty();
							$.each(data[0].costs, function(index, cost) {
								let btn = $('<button class="btn btn-outline-primary mr-2 shipping-option-btn col">')
									.text(cost.service + ' - Rp' + cost.cost[0].value.toLocaleString('id-ID'))
									.data('cost', cost.cost[0].value)
									.data('service', cost.service);

								$('#shipping-options').append(btn);
							});
						}
					});
				}
			});

			$(document).on('click', '.shipping-option-btn', function() {
				$('.shipping-option-btn').removeClass('btn-success').addClass('btn-outline-primary');
				$(this).removeClass('btn-outline-primary').addClass('btn-success');

				let shippingCost = $(this).data('cost');
				let newTotal = parseFloat(totalAmount) + parseFloat(shippingCost);

				$('#total-amount').text(newTotal.toLocaleString('id-ID'));
			});
		});
	</script>
@endsection
