@extends('admin.template.templates')

@section('container')
	@include('admin.template.landingNavbar')
	<div class="container-fluid py-4">
		<div class="row">
			<div class="col-12">
				<div class="card mb-4">
					<div class="card-header pb-0">
						<h6>Daftar Kategori</h6>
						<button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#AddCategoryModal">
							Tambah Kategori
						</button>
					</div>
					<div class="card-body p-3">
						<div class="table-responsive p-0">
							<table class="align-items-center mb-0 table" id="categoriesTable">
								<thead>
									<tr>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Kategori</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Produk</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($categories as $category)
										<tr>
											<td class="align-middle text-sm">
												<span class="font-weight-bold text-xs">{{ $category->name }}</span>
											</td>
											<td class="align-middle text-sm">
												<span class="font-weight-bold text-xs">{{ $category->description }}</span>
											</td>
											<td class="align-middle text-sm">
												<span class="font-weight-bold text-xs">{{ $category->products_count }}</span>
											</td>
											<td class="align-middle text-sm">
												<button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#EditCategoryModal{{ $category->id }}">Edit</button>
												<button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#DeleteCategoryModal{{ $category->id }}">Delete</button>
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

	<!-- Add Category Modal -->
	<div class="modal fade" id="AddCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<form action="{{ route('categories.store') }}" method="post" class="modal-content">
				@csrf
				<div class="modal-header">
					<h5 class="modal-title" id="addCategoryModalLabel">Tambah Kategori</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="input-group input-group-dynamic mb-4">
						<span class="input-group-text">Nama Kategori</span>
						<input type="text" name="name" class="form-control" placeholder="Nama Kategori" required>
					</div>
					<div class="input-group input-group-dynamic mb-4">
						<span class="input-group-text">Deskripsi</span>
						<textarea name="description" class="form-control" rows="3" placeholder="Deskripsi Kategori"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>

	@foreach ($categories as $category)
		<!-- Edit Category Modal -->
		<div class="modal fade" id="EditCategoryModal{{ $category->id }}" tabindex="-1" aria-labelledby="editCategoryModalLabel{{ $category->id }}"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form action="{{ route('categories.update', $category) }}" method="post" class="modal-content">
					@csrf
					@method('PUT')
					<div class="modal-header">
						<h5 class="modal-title" id="editCategoryModalLabel{{ $category->id }}">Edit Kategori</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="input-group input-group-dynamic mb-4">
							<span class="input-group-text">Nama Kategori</span>
							<input type="text" name="name" class="form-control" value="{{ $category->name }}" placeholder="Nama Kategori" required>
						</div>
						<div class="input-group input-group-dynamic mb-4">
							<span class="input-group-text">Deskripsi</span>
							<textarea name="description" class="form-control" rows="3" placeholder="Deskripsi Kategori">{{ $category->description }}</textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>

		<!-- Delete Category Modal -->
		<div class="modal fade" id="DeleteCategoryModal{{ $category->id }}" tabindex="-1"
			aria-labelledby="deleteCategoryModalLabel{{ $category->id }}" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form action="{{ route('categories.destroy', $category) }}" method="post" class="modal-content">
					@csrf
					@method('DELETE')
					<div class="modal-header">
						<h5 class="modal-title" id="deleteCategoryModalLabel{{ $category->id }}">Hapus Kategori</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<p>Apakah Anda yakin ingin menghapus kategori <strong>{{ $category->name }}</strong>?</p>
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
		$(document).ready(function() {
			$('#categoriesTable').DataTable();
		});
	</script>
@endsection
