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
						@if ($cartEmpty)
							<p>Your cart is empty.</p>
						@else
							@php
								$total = 0;
							@endphp
							@foreach ($cartItems as $item)
								<div class="row">
									<p class="col text-bold">{{ $item->product->product_name }}</p>
									<p class="col">Price: ${{ number_format($item->product->price, 2) }}</p>
									<p class="col">Quantity: {{ $item->quantity }}</p>
									<p class="col">Total: ${{ number_format($item->product->price * $item->quantity, 2) }}</p>
									@php
										$total += $item->product->price * $item->quantity;
									@endphp
								</div>
							@endforeach

							<!-- Display total amount -->
							<div class="row mt-4">
								<div class="col text-end">
									<h5>Total Amount: $<span id="total-amount">{{ number_format($total, 2) }}</span></h5>
								</div>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Script to dynamically calculate total amount using JS -->
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			let total = 0;

			// Loop through all total elements and sum them up
			document.querySelectorAll('.row p:last-child').forEach(function(item) {
				let itemTotal = parseFloat(item.textContent.replace('Total: $', '').replace(',', ''));
				total += itemTotal;
			});

			// Display the total amount
			document.getElementById('total-amount').textContent = total.toFixed(2);
		});
	</script>
@endsection
