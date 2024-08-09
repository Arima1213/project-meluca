@extends('admin.template.templates')

@section('container')
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
					<div class="card-body px-0 pb-2 pt-0">
						<div class="table-responsive p-0">
							<table class="align-items-center mb-0 table">
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
												<span class="font-weight-bold text-xs">{{ $product->product_description }}</span>
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
														{{ $category->category_name }}
													@endforeach
												</span>
											</td>
											<td class="align-middle text-sm">
												<img src="{{ asset('storage/' . $product->images->first()->image_url) }}" alt="Product Image" width="50">
											</td>
											<td class="align-middle text-sm">
												<button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#EditProductModal{{ $product->id }}">Edit</button>
												<button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#DeleteProductModal{{ $product->id }}">Delete</button>
											</td>
										</tr>

										<!-- Edit Modal -->
										<div class="modal fade" id="EditProductModal{{ $product->id }}" tabindex="-1" role="dialog"
											aria-labelledby="editModalLabel{{ $product->id }}" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<form enctype="multipart/form-data" action="{{ route('update-produk') }}" method="post" class="modal-content">
													@csrf
													<input type="hidden" name="id" value="{{ $product->id }}">
													<div class="modal-header">
														<h5 class="modal-title font-weight-normal" id="editModalLabel{{ $product->id }}">Edit Produk</h5>
														<button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<div class="input-group input-group-static mb-4">
															<label for="imageUpload">Upload Gambar</label>
															<input type="file" name="image" id="imageUpload" class="form-control" accept="image/*"
																onchange="previewImage(this, 'imagePreview{{ $product->id }}')">
															<small>Ukuran maksimal: 5MB</small>
														</div>
														<div class="mb-4">
															<img id="imagePreview{{ $product->id }}" src="{{ asset('storage/' . $product->images->first()->image_url) }}" alt="Preview Gambar"
																style="max-width: 100%; height: auto;">
														</div>
														<div class="input-group input-group-static mb-4">
															<label>Nama Produk</label>
															<input type="text" name="name" class="form-control" value="{{ $product->product_name }}" required>
														</div>
														<div class="input-group input-group-static mb-4">
															<label>Deskripsi</label>
															<textarea name="description" class="form-control" rows="3" required>{{ $product->product_description }}</textarea>
														</div>
														<div class="input-group input-group-static mb-4">
															<label>Berat Produk (gram)</label>
															<input type="number" name="weight" class="form-control" value="{{ $product->product_weight }}" required>
														</div>
														<div class="input-group input-group-static mb-4">
															<label>Harga</label>
															<input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
														</div>
														<div class="input-group input-group-static mb-4">
															<label>Stok</label>
															<input type="number" name="stock" class="form-control" value="{{ $product->stock }}" required>
														</div>
														<div class="input-group input-group-static mb-4">
															<label>Kategori Produk</label>
															<select name="categories[]" class="form-control" multiple required>
																@foreach ($categories as $category)
																	<option value="{{ $category->id }}" @if (in_array($category->id, $product->categories->pluck('id')->toArray())) selected @endif>{{ $category->category_name }}</option>
																@endforeach
															</select>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
														<button type="submit" class="btn bg-gradient-primary">Save changes</button>
													</div>
												</form>
											</div>
										</div>

										<!-- Delete Modal -->
										<div class="modal fade" id="DeleteProductModal{{ $product->id }}" tabindex="-1" role="dialog"
											aria-labelledby="deleteModalLabel{{ $product->id }}" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title font-weight-normal" id="deleteModalLabel{{ $product->id }}">Konfirmasi Hapus Produk</h5>
														<button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<p>Apakah Anda yakin ingin menghapus produk <strong>{{ $product->product_name }}</strong>?</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
														<form action="{{ route('delete-produk') }}" method="post" style="display:inline;">
															@csrf
															<input type="hidden" name="id" value="{{ $product->id }}">
															<button type="submit" class="btn bg-gradient-danger">Delete</button>
														</form>
													</div>
												</div>
											</div>
										</div>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>

					<!-- Add Product Modal -->
					<div class="modal fade" id="AddProductModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<form enctype="multipart/form-data" action="{{ route('add-produk') }}" method="post" class="modal-content">
								@csrf
								<div class="modal-header">
									<h5 class="modal-title font-weight-normal" id="addModalLabel">Tambah Produk</h5>
									<button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="input-group input-group-static mb-4">
										<label for="imageUpload">Upload Gambar</label>
										<input type="file" name="image" id="imageUpload" class="form-control" accept="image/*"
											onchange="previewImage(this, 'imagePreviewAdd')">
										<small>Ukuran maksimal: 5MB</small>
									</div>
									<div class="mb-4">
										<img id="imagePreviewAdd" src="#" alt="Preview Gambar" style="max-width: 100%; height: auto;">
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
										<label>Kategori Produk</label>
										<select name="categories[]" class="form-control" multiple required>
											@foreach ($categories as $category)
												<option value="{{ $category->id }}">{{ $category->category_name }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
									<button type="submit" class="btn bg-gradient-primary">Save changes</button>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection
