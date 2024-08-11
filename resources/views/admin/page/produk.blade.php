@extends('admin.template.templates')

@section('container')
	@include('admin.template.landingNavbar')
	<div class="container-fluid py-4">
		<div class="row">
			<div class="col-12">
				<div class="card mb-4">
					<div class="card-header pb-0">
						<h6>Daftar Produk</h6>
						<button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#AddProductModal">
							Tambah Produk
						</button>
					</div>
					<div class="card-body p-3">
						<div class="table-responsive p-0">
							<table class="align-items-center mb-0 table" id="productsTable">
								<thead>
									<tr>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Produk</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stok</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Berat</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($products as $product)
										<tr>
											<td class="align-middle text-sm">
												<span class="font-weight-bold text-xs">{{ $product->product_name }}</span>
											</td>
											<td class="align-middle text-sm">
												<span class="font-weight-bold text-xs">{{ Str::limit($product->product_description, 30) }}</span>
											</td>
											</td>
											<td class="align-middle text-sm">
												<span class="font-weight-bold text-xs">{{ $product->price }}</span>
											</td>
											<td class="align-middle text-sm">
												<span class="font-weight-bold text-xs">{{ $product->stock }}</span>
											</td>
											<td class="align-middle text-sm">
												<span class="font-weight-bold text-xs">{{ $product->product_weight }}</span>
											</td>
											<td class="align-middle text-sm">
												<span class="font-weight-bold text-xs">
													@foreach ($product->categories as $category)
														{{ $category->name }}@if (!$loop->last)
															,
														@endif
													@endforeach
												</span>
											</td>
											<td class="align-middle text-sm">
												<img src="{{ asset('storage/' . $product->images->first()->image_url) }}" alt="Product Image">
											</td>
											<td class="align-middle text-sm">
												<button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#EditProductModal{{ $product->id }}">Edit</button>
												<button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#DeleteProductModal{{ $product->id }}">Delete</button>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Add Product Modal -->
	<div class="modal fade" id="AddProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<form enctype="multipart/form-data" action="{{ route('admin-product-add') }}" method="post" class="modal-content">
				@csrf
				<div class="modal-header">
					<h5 class="modal-title" id="addProductModalLabel">Tambah Produk</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="input-group input-group-dynamic mb-4">
						<span class="input-group-text">Upload Gambar</span>
						<input type="file" name="image" class="form-control" accept="image/*" onchange="previewImage(this, 'imagePreview')">
					</div>
					<div class="mb-4">
						<img id="imagePreview" src="#" alt="Preview Gambar" style="max-width: 100%; height: auto; display: none;">
					</div>
					<div class="input-group input-group-dynamic mb-4">
						<span class="input-group-text">Nama Produk</span>
						<input type="text" name="name" class="form-control" placeholder="Nama Produk" required>
					</div>
					<div class="input-group input-group-dynamic mb-4">
						<span class="input-group-text">Deskripsi</span>
						<textarea name="description" class="form-control" rows="3" placeholder="Deskripsi Produk" required></textarea>
					</div>
					<div class="input-group input-group-dynamic mb-4">
						<span class="input-group-text">Berat (g)</span>
						<input type="number" name="weight" class="form-control" placeholder="Berat Produk" required>
					</div>
					<div class="input-group input-group-dynamic mb-4">
						<span class="input-group-text">Harga</span>
						<input type="number" name="price" class="form-control" placeholder="Harga Produk" required>
					</div>
					<div class="input-group input-group-dynamic mb-4">
						<span class="input-group-text">Stok</span>
						<input type="number" name="stock" class="form-control" placeholder="Stok Produk" required>
					</div>
					<span>Kategori (pilih satu atau lebih)</span>
					<div class="input-group input-group-dynamic mb-4">
						<select name="categories[]" class="form-control" multiple>
							@if ($categories->isEmpty())
								<option disabled selected>Tidak ada kategori</option>
							@else
								@foreach ($categories as $category)
									<option value="{{ $category->id }}">{{ $category->name }}</option>
								@endforeach
							@endif
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>

	@foreach ($products as $product)
		<!-- Edit Product Modal -->
		<div class="modal fade" id="EditProductModal{{ $product->id }}" tabindex="-1" aria-labelledby="editProductModalLabel{{ $product->id }}"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form enctype="multipart/form-data" action="{{ route('admin-product-update') }}" method="post" class="modal-content">
					@csrf
					<input type="hidden" name="id" value="{{ $product->id }}">
					<div class="modal-header">
						<h5 class="modal-title" id="editProductModalLabel{{ $product->id }}">Edit Produk</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="input-group input-group-dynamic mb-4">
							<span class="input-group-text">Upload Gambar</span>
							<input type="file" name="image" class="form-control" accept="image/*"
								onchange="previewImage(this, 'imagePreview{{ $product->id }}')">
						</div>
						<div class="mb-4">
							<img id="imagePreview{{ $product->id }}"
								src="{{ asset('storage/' . ($product->images->first() ? $product->images->first()->image_url : 'default.jpg')) }}" alt="Product Image"
								style="max-width: 100%; height: auto;">
						</div>
						<div class="input-group input-group-dynamic mb-4">
							<span class="input-group-text">Nama Produk</span>
							<input type="text" name="name" class="form-control" value="{{ $product->product_name }}" placeholder="Nama Produk" required>
						</div>
						<div class="input-group input-group-dynamic mb-4">
							<span class="input-group-text">Deskripsi</span>
							<textarea name="description" class="form-control" rows="3" placeholder="Deskripsi Produk" required>{{ $product->product_description }}</textarea>
						</div>
						<div class="input-group input-group-dynamic mb-4">
							<span class="input-group-text">Berat (g)</span>
							<input type="number" name="weight" class="form-control" value="{{ $product->product_weight }}" placeholder="Berat Produk" required>
						</div>
						<div class="input-group input-group-dynamic mb-4">
							<span class="input-group-text">Harga</span>
							<input type="number" name="price" class="form-control" value="{{ $product->price }}" placeholder="Harga Produk" required>
						</div>
						<div class="input-group input-group-dynamic mb-4">
							<span class="input-group-text">Stok</span>
							<input type="number" name="stock" class="form-control" value="{{ $product->stock }}" placeholder="Stok Produk" required>
						</div>
						<div class="input-group input-group-dynamic mb-4">
							<span class="input-group-text">Kategori</span>
							<select name="categories[]" class="form-control" multiple required>
								@foreach ($categories as $category)
									<option value="{{ $category->id }}" {{ in_array($category->id, $product->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
										{{ $category->name }}
									</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>

		<!-- Delete Product Modal -->
		<div class="modal fade" id="DeleteProductModal{{ $product->id }}" tabindex="-1" aria-labelledby="deleteProductModalLabel{{ $product->id }}"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form action="{{ route('admin-product-delete') }}" method="post" class="modal-content">
					@csrf
					<input type="hidden" name="id" value="{{ $product->id }}">
					<div class="modal-header">
						<h5 class="modal-title" id="deleteProductModalLabel{{ $product->id }}">Hapus Produk</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<p>Apakah Anda yakin ingin menghapus produk <strong>{{ $product->product_name }}</strong>? Aksi ini tidak dapat dibatalkan.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-danger">Hapus</button>
					</div>
				</form>
			</div>
		</div>
	@endforeach
	<script>
		function previewImage(input, previewId) {
			if (input.files && input.files[0]) {
				const reader = new FileReader();
				reader.onload = function(e) {
					const preview = document.getElementById(previewId);
					preview.src = e.target.result;
					preview.style.display = 'block';
				};
				reader.readAsDataURL(input.files[0]);
			}
		}

		$(document).ready(function() {
			$('#productsTable').DataTable();
		});
	</script>
@endsection
