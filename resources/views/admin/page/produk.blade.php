@extends('admin.template.templates')

@section('container')
	<div class="container-fluid py-4">
		<div class="row">
			<div class="col-12">
				<div class="card my-4">
					<div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
						<div class="bg-gradient-primary shadow-primary border-radius-lg pb-3 pt-4">
							<h6 class="text-capitalize ps-3 text-white">Product Management</h6>
						</div>
					</div>

					<div class="card-body overflow-scroll px-0 px-4 pb-2">
						<!-- Button trigger modal -->
						<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#TambahProdukModal">Tambah Produk</button>

						<!-- Modal -->
						<div class="modal fade" id="TambahProdukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<form enctype="multipart/form-data" action="{{ route('simpan-produk') }}" method="post" class="modal-content">
									@csrf
									<div class="modal-header">
										<h5 class="modal-title font-weight-normal" id="exampleModalLabel">Tambah Produk</h5>
										<button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="input-group input-group-static mb-4">
											<label for="imageUpload">Upload Gambar</label>
											<input type="file" name="image" id="imageUpload" class="form-control" accept="image/*" onchange="previewImage()" required>
											<small>Ukuran maksimal: 5MB</small>
										</div>
										<div class="mb-4">
											<img id="imagePreview" src="#" alt="Preview Gambar" style="display:none; max-width: 100%; height: auto;">
										</div>
										<div class="input-group input-group-static mb-4">
											<label>Nama Produk</label>
											<input type="text" name="name" class="form-control" required>
										</div>
										<div class="input-group input-group-static mb-4">
											<label>Deskripsi</label>
											<textarea name="description" class="form-control" rows="3" required></textarea>
										</div>
										<div class="input-group input-group-static mb-4">
											<label>Berat Produk (gram)</label>
											<input type="number" name="weight" class="form-control" required>
										</div>
										<div class="input-group input-group-static mb-4">
											<label>Harga</label>
											<input type="number" name="price" class="form-control" required>
										</div>
										<div class="input-group input-group-static mb-4">
											<label>Stok</label>
											<input type="number" name="stock" class="form-control" required>
										</div>
										<div class="input-group input-group-static mb-4">
											<label>Kategori</label>
											<select name="categories[]" class="form-control" multiple required>
												@foreach ($categories as $category)
													<option value="{{ $category->id }}">{{ $category->name }}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn bg-gradient-primary">Save Changes</button>
									</div>
								</form>
							</div>
						</div>
						<table id="example" class="display table-striped table-bordered table" style="width:100%">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama</th>
									<th>Harga</th>
									<th>Stok</th>
									<th>Created At</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@if (count($products) > 0)
									@foreach ($products as $product)
										<tr>
											<td>{{ $product->id }}</td>
											<td>{{ $product->product_name }}</td>
											<td>{{ $product->price }}</td>
											<td>{{ $product->stock }}</td>
											<td>{{ $product->created_at }}</td>
											<td class="text-center align-middle">
												<!-- Button trigger modal -->
												<button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#EditModal{{ $product->id }}">Edit</button>
												<!-- Modal Edit -->
												<div class="modal fade" id="EditModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
													aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered" role="document">
														<form action="editProduct.php" method="post" class="modal-content" enctype="multipart/form-data">
															@csrf
															<input type="hidden" name="id" class="form-control" value="{{ $product->id }}" readonly>
															<div class="modal-header">
																<h5 class="modal-title font-weight-normal" id="exampleModalLabel">Edit Product {{ $product->product_name }}</h5>
																<button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<div class="input-group input-group-static mb-4">
																	<label for="imageUpload">Upload Gambar</label>
																	<input type="file" name="image" id="imageUpload" class="form-control" accept="image/*" onchange="previewImage()" required>
																	<small>Ukuran maksimal: 5MB</small>
																</div>
																<div class="mb-4">
																	<img id="imagePreview" src="#" alt="Preview Gambar" style="display:none; max-width: 100%; height: auto;">
																</div>
																<div class="input-group input-group-static mb-4">
																	<label>Nama</label>
																	<input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}">
																</div>
																<div class="input-group input-group-static mb-4">
																	<label>Deskripsi</label>
																	<textarea name="product_description" class="form-control" rows="3">{{ $product->product_description }}</textarea>
																</div>
																<div class="input-group input-group-static mb-4">
																	<label>Harga</label>
																	<input type="text" name="price" class="form-control" value="{{ $product->price }}">
																</div>
																<div class="input-group input-group-static mb-4">
																	<label>Stok</label>
																	<input type="text" name="stock" class="form-control" value="{{ $product->stock }}">
																</div>
																<div class="input-group input-group-static mb-4">
																	<label>Kategori</label>
																	<select name="categories[]" class="form-control" multiple required>
																		@foreach ($categories as $category)
																			<option value="{{ $category->id }}" @if (in_array($category->id, $product->categories->pluck('id')->toArray())) selected @endif>
																				{{ $category->name }}
																			</option>
																		@endforeach
																	</select>
																</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
																<button type="submit" class="btn bg-gradient-primary">Save Changes</button>
															</div>
														</form>
													</div>
												</div>
												<!-- end modal -->
												<button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $product->id }}">Delete</button>
												<!-- Modal Delete -->
												<div class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
													aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered" role="document">
														<form action="deleteProduct.php" method="post" class="modal-content">
															@csrf
															<input type="hidden" name="id" class="form-control" value="{{ $product->id }}" readonly>
															<div class="modal-header">
																<h5 class="modal-title font-weight-normal" id="exampleModalLabel">Delete Product</h5>
																<button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																Are you sure you want to delete product<br>
																{{ $product->product_name }}?
															</div>
															<div class="modal-footer">
																<button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
																<button type="submit" class="btn bg-gradient-primary">Delete</button>
															</div>
														</form>
													</div>
												</div>
												<!-- end modal -->
											</td>
										</tr>
									@endforeach
								@else
									<tr>
										<td class="text-center" colspan="6">No data available</td>
									</tr>
								@endif
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function previewImage() {
			var file = document.getElementById('imageUpload').files[0];
			var reader = new FileReader();
			reader.onloadend = function() {
				document.getElementById('imagePreview').src = reader.result;
				document.getElementById('imagePreview').style.display = 'block';
			}
			if (file) {
				reader.readAsDataURL(file);
			} else {
				document.getElementById('imagePreview').src = "";
				document.getElementById('imagePreview').style.display = 'none';
			}
		}
	</script>
	<script>
		function previewImage() {
			var file = document.getElementById('imageUpload').files[0];
			var reader = new FileReader();
			reader.onloadend = function() {
				document.getElementById('imagePreview').src = reader.result;
				document.getElementById('imagePreview').style.display = 'block';
			}
			if (file) {
				reader.readAsDataURL(file);
			} else {
				document.getElementById('imagePreview').src = "";
				document.getElementById('imagePreview').style.display = 'none';
			}
		}
	</script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable({});
		});
	</script>
@endsection
