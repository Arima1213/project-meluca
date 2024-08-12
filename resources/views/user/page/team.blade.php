@extends('user.template.templates')

@section('container')
	@include('user.template.landingNavbar')

	<div class="container-fluid py-4">
		<div class="row">
			<div class="col-12 col-md-3">
				<div class="card">
					<div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
						<a class="d-block blur-shadow-image">
							<img src="{{ asset('img/pp-arimahendra.jpg') }}" alt="img-blur-shadow" class="h-100 img-fluid border-radius-lg img-fixed-height shadow">
						</a>
					</div>

					<div class="card card-plain h-100">
						<div class="card-header p-3 pb-0">
							<div class="row">
								<h5 class="mb-1">
									Ari Mahendra Fauzi
								</h5>
								<p class="font-weight-normal mb-0 text-sm">
									Chief Marketing Officer
								</p>
								<div class="col-md-8 d-flex align-items-center mt-2">
									<h6 class="mb-0">Information</h6>
								</div>
							</div>
						</div>
						<div class="card-body p-3 pt-0">
							<p class="text-sm">
								Saya, Ari Mahendra Fauzi, sebagai Chief Marketing Officer (CMO), bertanggung jawab mengembangkan strategi pemasaran, memimpin tim pemasaran,
								menganalisis tren pasar, dan mencari peluang bisnis baru. Saya juga berkolaborasi dengan departemen lain untuk menyelaraskan pemasaran dengan
								tujuan bisnis serta meningkatkan keterlibatan dan loyalitas pelanggan.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-3">
				<div class="card">
					<div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
						<a class="d-block blur-shadow-image">
							<img src="{{ asset('img/pp-arimahendra.jpg') }}" alt="img-blur-shadow" class="h-100 img-fluid border-radius-lg img-fixed-height shadow">
						</a>
					</div>

					<div class="card card-plain h-100">
						<div class="card-header p-3 pb-0">
							<div class="row">
								<h5 class="mb-1">
									Farah Faizah
								</h5>
								<p class="font-weight-normal mb-0 text-sm">
									Chief Technology Officer
								</p>
								<div class="col-md-8 d-flex align-items-center mt-2">
									<h6 class="mb-0">Information</h6>
								</div>
							</div>
						</div>
						<div class="card-body p-3 pt-0">
							<p class="text-sm">
								Namaku Farah Faizah. Orang disekitarku memanggilku Farah. Di tim ini, aku bertanggung jawab sebagai CTO yang memiliki tugas yaitu mengembangkan
								dan mengimplementasikan teknologi informasi untuk mendukung tujuan bisnis. Selain itu, aku juga bertugas untuk mengawasi pengembangan perangkat
								lunak, aplikasi, dan solusi teknologi lainnya, memastikan bahwa teknologi berkontribusi optimal terhadap pencapaian target bisnis
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-3">
				<div class="card">
					<div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
						<a class="d-block blur-shadow-image">
							<img src="{{ asset('img/pp-arimahendra.jpg') }}" alt="img-blur-shadow" class="h-100 img-fluid border-radius-lg img-fixed-height shadow">
						</a>
					</div>

					<div class="card card-plain h-100">
						<div class="card-header p-3 pb-0">
							<div class="row">
								<h5 class="mb-1">
									Denny ariyana
								</h5>
								<p class="font-weight-normal mb-0 text-sm">
									Chief Executive Officer
								</p>
								<div class="col-md-8 d-flex align-items-center mt-2">
									<h6 class="mb-0">Information</h6>
								</div>
							</div>
						</div>
						<div class="card-body p-3 pt-0">
							<p class="text-sm">
								Halo, perkenalkan namaku Denny Ariyana, tapi kamu bisa memanggilku Denny. Di tim ini, aku bertanggung jawab sebagai CEO, memimpin dan
								mengarahkan strategi untuk mencapai tujuan bersama. Di luar pekerjaan, aku punya hobi bermain game, khususnya Mobile Legends. Bagi aku, game
								bukan hanya hiburan, tetapi juga sarana untuk mengasah strategi, kerja sama tim, dan ketangguhan dalam menghadapi tantangan. Jadi, baik dalam
								bisnis maupun game, aku selalu berusaha memberikan yang terbaik!
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-3">
				<div class="card">
					<div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
						<a class="d-block blur-shadow-image">
							<img src="{{ asset('img/pp-arimahendra.jpg') }}" alt="img-blur-shadow" class="h-100 img-fluid border-radius-lg img-fixed-height shadow">
						</a>
					</div>

					<div class="card card-plain h-100">
						<div class="card-header p-3 pb-0">
							<div class="row">
								<h5 class="mb-1">
									Silvia Ayu Ningtyas
								</h5>
								<p class="font-weight-normal mb-0 text-sm">
									Chief Financial Officer
								</p>
								<div class="col-md-8 d-flex align-items-center mt-2">
									<h6 class="mb-0">Information</h6>
								</div>
							</div>
						</div>
						<div class="card-body p-3 pt-0">
							<p class="text-sm">
								Chief Financial Officer (CFO) yang bertanggung jawab atas manajemen keuangan perusahaan. Tugas utamanya meliputi pengelolaan alur kas,
								penyusunan anggaran, analisis keuangan, serta memastikan kestabilan dan likuiditas keuangan perusahaan. Selain itu, saya juga mengawasi proses
								pelaporan keuangan, mendokumentasikan semua transaksi keuangan, dan memberikan wawasan strategis kepada manajemen untuk pengambilan keputusan
								yang berhubungan dengan investasi, penghematan, dan pengembangan bisnis.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
