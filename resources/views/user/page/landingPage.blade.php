@extends('user.template.templates')

@section('container')
	@include('user.template.landingNavbar')

	<div class="container-fluid py-4">
		<div class="row carousel mb-5">
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner mb-4">
					<div class="carousel-item active">
						<div class="page-header min-vh-75 border-radius-xl m-3" style="background-image: url('{{ asset('img/carousel1.png') }}');">
							<span class="mask bg-gradient-dark"></span>
							<div class="container">
								<div class="row">
									<div class="col-lg-6 my-auto">
										<h4 class="fadeIn1 fadeInBottom mb-0 text-white">Teh Meluca</h4>
										<h1 class="fadeIn2 fadeInBottom text-white">Harum Istimewa, Teh Meluca</h1>
										<p class="lead opacity-8 fadeIn3 fadeInBottom text-white">Menghadirkan pengalaman minum teh yang istimewa dengan aroma harum yang memikat dan
											rasa
											yang tak terlupakan. Setiap tegukan bagaikan sentuhan magis yang memanjakan indra Anda,
											memberikan sensasi relaksasi dan ketenangan.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="page-header min-vh-75 border-radius-xl m-3" style="background-image: url('{{ asset('img/carousel2.png') }}');">
							<span class="mask bg-gradient-dark"></span>
							<div class="container">
								<div class="row">
									<div class="col-lg-6 my-auto">
										<h4 class="fadeIn1 fadeInBottom mb-0 text-white">Teh Meluca</h4>
										<h1 class="fadeIn2 fadeInBottom text-white">Alami, Lembut dan Segar</h1>
										<p class="lead opacity-8 fadeIn3 fadeInBottom text-white">Perwujudan kesegaran alami yang dikemas dalam secangkir teh. Dibuat dengan
											bahan-bahan
											alami pilihan, Teh Meluca menawarkan rasa yang lembut dan menyegarkan, tanpa rasa pahit
											yang mengganggu.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="min-vh-75 position-absolute w-100 top-0">
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
						<span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
						<span class="carousel-control-next-icon position-absolute bottom-50" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</a>
				</div>
			</div>
		</div>
		<div class="row pengertian mb-5">
			<div class="col-12">
				<div class="p-3">
					<h6 class="mb-2 text-center">Apa Itu Meluca</h6>
					<p> Meluca adalah inovasi teh yang menggabungkan khasiat alami dari biji semangka, labu kuning,
						dan melon. Setiap biji dipilih karena manfaat kesehatannya yang luar biasa: biji semangka
						kaya akan lycopene sebagai anti-kanker dan anti-inflamasi, biji labu kuning penuh dengan
						nutrisi yang mendukung kesehatan jantung dan pencernaan, serta biji melon yang mengandung
						flavonoid untuk melindungi dari kerusakan radikal bebas. Dengan Teh Meluca, kami menawarkan
						minuman yang tidak hanya nikmat, tetapi juga mendukung gaya hidup sehat dan ramah
						lingkungan. Rasakan keajaiban alam dalam setiap cangkir Teh Meluca.</p>

				</div>
			</div>
		</div>
		<div class="row keunggulan mb-5">
			<div class="col-12">
				<div class="card p-3 text-center">
					<h6 class="mb-2 text-center">Keunggulan Teh Meluca</h6>
					<div class="row">
						<div class="col-12 col-md-6 col-lg-3">
							<div class="card bg-dark mb-1 border-0 text-white">
								<img class="card-img" src="{{ asset('img/teh1.jpg') }}" alt="Card image">
							</div>
							<p>Dari biji-bijian</p>
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<div class="card bg-dark mb-1 border-0 text-white">
								<img class="card-img" src="{{ asset('img/teh2.jpg') }}" alt="Card image">
							</div>
							<p>100% bahan alami</p>
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<div class="card bg-dark mb-1 border-0 text-white">
								<img class="card-img" src="{{ asset('img/teh3.jpg') }}" alt="Card image">
							</div>
							<p>Tanpa pemanis buatan</p>
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<div class="card bg-dark mb-1 border-0 text-white">
								<img class="card-img" src="{{ asset('img/teh4.jpg') }}" alt="Card image">
							</div>
							<p>Antioksidan Tinggi</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row produk mb-5">
			<div class="col-12">
				<div class="p-3">
					<h6 class="mb-5 text-center">Produk Teh Meluca</h6>
					<div class="row">
						<div class="col-12 col-md-4 mt-5">
							<div class="card">
								<div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
									<a class="d-block blur-shadow-image">
										<img src="{{ asset('img/botol.jpg') }}" alt="img-blur-shadow" class="h-75 img-fluid border-radius-lg img-fixed-height shadow">
									</a>
								</div>
								<div class="card-body px-4 pt-2">
									<a href="javascript:;">
										<h5 class="font-weight-normal mt-3">
											Teh Kemasan Botol
										</h5>
									</a>
									<p>
										Teh siap saji yang praktis dan mudah dibawa kemana-mana. Dengan kemasan botol yang kokoh dan aman.
									</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 mt-5">
							<div class="card">
								<div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
									<a class="d-block blur-shadow-image">
										<img src="{{ asset('img/boxkecil.jpg') }}" alt="img-blur-shadow" class="h-75 img-fluid border-radius-lg img-fixed-height shadow">
									</a>
								</div>
								<div class="card-body px-4 pt-2">
									<a href="javascript:;">
										<h5 class="font-weight-normal mt-3">
											Box Mini
										</h5>
									</a>
									<p>
										Box Mini ini berisi satu kantong teh celup, cocok untuk sekali seduh dan mudah dibawa kemana-mana.
									</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 mt-5">
							<div class="card">
								<div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
									<a class="d-block blur-shadow-image">
										<img src="{{ asset('img/boxbesar.jpg') }}" alt="img-blur-shadow" class="h-75 img-fluid border-radius-lg img-fixed-height shadow">
									</a>
								</div>
								<div class="card-body px-4 pt-2">
									<a href="javascript:;">
										<h5 class="font-weight-normal mt-3">
											Box Besar
										</h5>
									</a>
									<p>
										Box Besar ini berisi 10 kantong teh celup, ideal untuk kebutuhan teh sehari-hari atau untuk acara
										keluarga.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('user.template.footer')
	</div>
@endsection
