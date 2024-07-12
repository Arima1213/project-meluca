@extends('template.template')

@section('container')
	<section id="billboard" class="overflow-hidden">
		<div class="swiper main-swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="banner-item"
									style="
                      background-image: url(images/banner-image1.jpg);
                      background-repeat: no-repeat;
                      background-position: right;
                      height: 682px;
                    ">
									<div class="banner-content padding-large">
										<h1 class="display-1 text-uppercase text-dark pb-2">
											Harum Istimewa, Teh Meluca
										</h1>
										<p>
											Menghadirkan pengalaman minum teh yang istimewa dengan aroma harum yang memikat dan rasa
											yang tak terlupakan. Setiap tegukan bagaikan sentuhan magis yang memanjakan indra Anda,
											memberikan sensasi relaksasi dan ketenangan. Lebih dari sekadar teh biasa, Teh Meluca
											adalah persembahan istimewa untuk memanjakan diri Anda.
										</p>
										<a href="shop.html" class="btn btn-medium btn-arrow position-relative mt-5">
											<span class="text-uppercase">Shop Now</span>
											<svg class="arrow-right position-absolute" width="18" height="20">
												<use xlink:href="#arrow-right"></use>
											</svg>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="banner-item"
									style="
                      background-image: url(images/banner-image2.jpg);
                      background-repeat: no-repeat;
                      background-position: right;
                      height: 682px;
                    ">
									<div class="banner-content padding-large">
										<h1 class="display-1 text-uppercase text-dark pb-2">
											Alami, Lembut dan Segar
										</h1>
										<p>
											Perwujudan kesegaran alami yang dikemas dalam secangkir teh. Dibuat dengan bahan-bahan
											alami pilihan, Teh Meluca menawarkan rasa yang lembut dan menyegarkan, tanpa rasa pahit
											yang mengganggu. Setiap tegukan bagaikan membawa Anda kembali ke alam, memberikan sensasi
											kesegaran dan vitalitas yang luar biasa. Nikmati Teh Meluca dan rasakan perbedaannya.
										</p>
										<a href="shop.html" class="btn btn-medium btn-arrow position-relative mt-5">
											<span class="text-uppercase">Shop Now</span>
											<svg class="arrow-right position-absolute" width="18" height="20">
												<use xlink:href="#arrow-right"></use>
											</svg>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-pagination position-absolute"></div>
	</section>

	<section id="company-services" class="padding-large">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-6 pb-3">
					<div class="icon-box d-flex align-items-center">
						<div class="icon-box-icon pb-3 pe-3 ps-3 pt-3">
							<svg class="shipping-fast">
								<use xlink:href="#shipping-fast" />
							</svg>
						</div>
						<div class="icon-box-content ps-3">
							<h3 class="card-title text-uppercase text-dark">
								Dari biji-bijian
							</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 pb-3">
					<div class="icon-box d-flex align-items-center">
						<div class="icon-box-icon pb-3 pe-3 ps-3 pt-3">
							<svg class="shopping-cart">
								<use xlink:href="#shopping-cart" />
							</svg>
						</div>
						<div class="icon-box-content ps-3">
							<h3 class="card-title text-uppercase text-dark">
								100% bahan alami
							</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 pb-3">
					<div class="icon-box d-flex align-items-center">
						<div class="icon-box-icon pb-3 pe-3 ps-3 pt-3">
							<svg class="gift">
								<use xlink:href="#gift" />
							</svg>
						</div>
						<div class="icon-box-content ps-3">
							<h3 class="card-title text-uppercase text-dark">
								Tanpa pemanis buatan
							</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 pb-3">
					<div class="icon-box d-flex align-items-center">
						<div class="icon-box-icon pb-3 pe-3 ps-3 pt-3">
							<svg class="return">
								<use xlink:href="#return" />
							</svg>
						</div>
						<div class="icon-box-content ps-3">
							<h3 class="card-title text-uppercase text-dark">
								Antioksidan Tinggi
							</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="about-us">
		<div class="container-fluid">
			<div class="row align-items-center justify-content-between g-5">
				<div class="col-lg-6">
					<div class="image-holder jarallax mb-4">
						<img src="images/single-image1.jpg" alt="single" class="img-fluid jarallax-img" />
					</div>
				</div>
				<div class="col-lg-6">
					<div class="detail p-5">
						<div class="display-header">
							<h2 class="display-2 text-uppercase text-dark pb-2">
								Apa Itu Meluca?
							</h2>
							<p class="pb-3">
								Meluca adalah inovasi teh yang menggabungkan khasiat alami dari biji semangka, labu kuning,
								dan melon. Setiap biji dipilih karena manfaat kesehatannya yang luar biasa: biji semangka
								kaya akan lycopene sebagai anti-kanker dan anti-inflamasi, biji labu kuning penuh dengan
								nutrisi yang mendukung kesehatan jantung dan pencernaan, serta biji melon yang mengandung
								flavonoid untuk melindungi dari kerusakan radikal bebas. Dengan Teh Meluca, kami menawarkan
								minuman yang tidak hanya nikmat, tetapi juga mendukung gaya hidup sehat dan ramah
								lingkungan. Rasakan keajaiban alam dalam setiap cangkir Teh Meluca.
							</p>
							<a href="about-us.html" class="btn btn-medium btn-arrow outline-dark position-relative mt-3">
								<span class="text-uppercase">About us</span>
								<svg class="arrow-right position-absolute" width="18" height="20">
									<use xlink:href="#arrow-right"></use>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="featured-products" class="product-store position-relative padding-large">
		<div class="container-fluid">
			<div class="row">
				<div class="display-header d-flex justify-content-between col-md-12 flex-wrap pb-3">
					<h2 class="display-2 text-dark text-uppercase">
						Our Featured Products
					</h2>
					<a href="shop.html" class="btn btn-medium btn-arrow btn-normal position-relative">
						<span class="text-uppercase">Shop All</span>
						<svg class="arrow-right position-absolute" width="18" height="20">
							<use xlink:href="#arrow-right"></use>
						</svg>
					</a>
				</div>
			</div>
			<div class="row">
				<div id="featured-swiper" class="product-swiper col-md-12">
					<div class="swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
									<div class="image-holder">
										<img src="images/product-item1.jpg" alt="product-item"
											class="product-image img-fluid" />
									</div>
									<div class="cart-concern">
										<h3 class="card-title text-uppercase text-primary pt-3">
											<a href="single-product.html" class="text-primary">Black Sofa Set</a>
										</h3>
										<div class="cart-info">
											<a class="pseudo-text-effect" href="#"
												data-after="ADD TO CART"><span>$200</span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
									<div class="image-holder">
										<img src="images/product-item2.jpg" alt="product-item"
											class="product-image img-fluid" />
									</div>
									<div class="cart-concern">
										<h3 class="card-title text-uppercase text-primary pt-3">
											<a href="single-product.html" class="text-primary">Circle Dining Table</a>
										</h3>
										<div class="cart-info">
											<a class="pseudo-text-effect" href="#" data-after="ADD TO CART">
												<span>$200</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
									<div class="image-holder">
										<img src="images/product-item3.jpg" alt="product-item"
											class="product-image img-fluid" />
									</div>
									<div class="cart-concern">
										<h3 class="card-title text-uppercase text-primary pt-3">
											<a href="single-product.html" class="text-primary">Minimal Sofa</a>
										</h3>
										<div class="cart-info">
											<a class="pseudo-text-effect" href="#" data-after="ADD TO CART">
												<span>$200</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
									<div class="image-holder">
										<img src="images/product-item4.jpg" alt="product-item"
											class="product-image img-fluid" />
									</div>
									<div class="cart-concern">
										<h3 class="card-title text-uppercase text-primary pt-3">
											<a href="single-product.html" class="text-primary">Pattern Tea Table</a>
										</h3>
										<div class="cart-info">
											<a class="pseudo-text-effect" href="#" data-after="ADD TO CART">
												<span>$200</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
									<div class="image-holder">
										<img src="images/product-item5.jpg" alt="product-item"
											class="product-image img-fluid" />
									</div>
									<div class="cart-concern">
										<h3 class="card-title text-uppercase text-primary pt-3">
											<a href="single-product.html" class="text-primary">Black Sofa Set</a>
										</h3>
										<div class="cart-info">
											<a class="pseudo-text-effect" href="#" data-after="ADD TO CART">
												<span>$200</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
									<div class="image-holder">
										<img src="images/product-item6.jpg" alt="product-item"
											class="product-image img-fluid" />
									</div>
									<div class="cart-concern">
										<h3 class="card-title text-uppercase text-primary pt-3">
											<a href="single-product.html" class="text-primary">Minimal Sofa</a>
										</h3>
										<div class="cart-info">
											<a class="pseudo-text-effect" href="#" data-after="ADD TO CART">
												<span>$200</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-pagination mt-5 text-center"></div>
				</div>
			</div>
		</div>
	</section>

	<section id="testimonials" class="position-relative">
		<div class="container">
			<div class="row">
				<div class="review-content position-relative">
					<div
						class="swiper-icon swiper-arrow swiper-arrow-prev position-absolute d-flex align-items-center justify-content-center">
						<svg class="icon-arrow" width="25" height="25">
							<use xlink:href="#arrow-left" />
						</svg>
					</div>
					<div class="swiper testimonial-swiper">
						<div class="quotation text-center">
							<svg class="quote">
								<use xlink:href="#quote" />
							</svg>
						</div>
						<div class="swiper-wrapper">
							<div class="swiper-slide d-flex justify-content-center text-center">
								<div class="review-item col-md-10">
									<i class="icon icon-review"></i>
									<blockquote class="fs-4">
										“Hidup sehat adalah pilihan, bukan keterpaksaan.”
									</blockquote>
									<div class="author-detail">
										<div class="name text-primary text-uppercase pt-2">
											Joko Widodo, Presiden ke-7 Republik Indonesia
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide d-flex justify-content-center text-center">
								<div class="review-item col-md-10">
									<i class="icon icon-review"></i>
									<blockquote class="fs-4">
										“A blog is a digital publication that can complement a
										website or exist independently. A blog may include
										articles, short posts, listicles, infographics, videos,
										and other digital content.”
									</blockquote>
									<div class="author-detail">
										<div class="name text-primary text-uppercase pt-2">
											Jennie Rose
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div
						class="swiper-icon swiper-arrow swiper-arrow-next position-absolute d-flex align-items-center justify-content-center">
						<svg class="icon-arrow" width="25" height="25">
							<use xlink:href="#arrow-right" />
						</svg>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-pagination position-absolute text-center"></div>
	</section>

	<section id="collections" class="position-relative padding-large">
		<div class="container-fluid">
			<div class="row">
				<div class="swiper collection-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide overflow-hidden">
							<div class="product-card">
								<div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
									<h3 class="card-title text-uppercase">
										<a href="shop.html">Living Rooms</a>
									</h3>
								</div>
								<div class="image-overlay position-relative">
									<div class="product-image">
										<img src="images/product-item5.jpg" alt="product-item"
											class="product-image img-fluid" />
										<div class="text-box box-slide position-absolute">
											<div class="text-content bg-light p-5">
												<h3>About Room</h3>
												<p>
													Assumenda temporibus quidem ipsam. fuga corporis
													iusto similique voluptates sint quibusdam.
												</p>
												<ul>
													<li>Various Types of Bedroom</li>
													<li>Different Size of Bed</li>
													<li>Comfortable and Clean Room</li>
												</ul>
												<a href="#" class="btn btn-normal mt-3">Learn More</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide overflow-hidden">
							<div class="product-card">
								<div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
									<h3 class="card-title text-uppercase">
										<a href="shop.html">Bed Rooms</a>
									</h3>
								</div>
								<div class="image-overlay position-relative">
									<div class="product-image">
										<img src="images/product-item6.jpg" alt="product-item"
											class="product-image img-fluid" />

										<div class="text-box box-slide position-absolute">
											<div class="text-content bg-light p-5">
												<h3>About Room</h3>
												<p>
													Assumenda temporibus quidem ipsam. fuga corporis
													iusto similique voluptates sint quibusdam.
												</p>
												<ul>
													<li>Various Types of Bedroom</li>
													<li>Different Size of Bed</li>
													<li>Comfortable and Clean Room</li>
												</ul>
												<a href="#" class="btn btn-normal mt-3">Learn More</a>
											</div>
										</div>
									</div>
									<!-- product-image -->
								</div>
							</div>
						</div>
						<div class="swiper-slide overflow-hidden">
							<div class="product-card">
								<div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
									<h3 class="card-title text-uppercase">
										<a href="shop.html">Kitchens</a>
									</h3>
								</div>
								<div class="image-overlay position-relative">
									<div class="product-image">
										<img src="images/product-item7.jpg" alt="product-item"
											class="product-image img-fluid" />

										<div class="text-box box-slide position-absolute">
											<div class="text-content bg-light p-5">
												<h3>About Kitchen</h3>
												<p>
													Assumenda temporibus quidem ipsam. fuga corporis
													iusto similique voluptates sint quibusdam.
												</p>
												<ul>
													<li>Various Types of Bedroom</li>
													<li>Different Size of Bed</li>
													<li>Comfortable and Clean Room</li>
												</ul>
												<a href="#" class="btn btn-normal mt-3">Learn More</a>
											</div>
										</div>
									</div>
									<!-- product-image -->
								</div>
							</div>
						</div>
						<div class="swiper-slide overflow-hidden">
							<div class="product-card">
								<div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
									<h3 class="card-title text-uppercase">
										<a href="shop.html">Guest Rooms</a>
									</h3>
								</div>
								<div class="image-overlay position-relative">
									<div class="product-image">
										<img src="images/product-item8.jpg" alt="product-item"
											class="product-image img-fluid" />

										<div class="text-box box-slide position-absolute">
											<div class="text-content bg-light p-5">
												<h3>About Kitchen</h3>
												<p>
													Assumenda temporibus quidem ipsam. fuga corporis
													iusto similique voluptates sint quibusdam.
												</p>
												<ul>
													<li>Various Types of Bedroom</li>
													<li>Different Size of Bed</li>
													<li>Comfortable and Clean Room</li>
												</ul>
												<a href="#" class="btn btn-normal mt-3">Learn More</a>
											</div>
										</div>
									</div>
									<!-- product-image -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-pagination position-absolute text-center"></div>
	</section>

	<section class="subscribe">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8">
					<div class="subscribe-content padding-large">
						<div class="subscribe-header">
							<h2 class="display-4">
								Get offers & discounts by subscribing us
							</h2>
						</div>
						<form id="form">
							<input type="text" name="email" placeholder="Enter Your Email Addresss"
								class="w-100 bg-light fst-italic border-0 ps-5" />
							<button class="btn btn-full btn-black text-uppercase">
								Subscribe Now
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="trending-products" class="product-store padding-large">
		<div class="container-fluid">
			<div class="row overflow-hidden">
				<div class="display-header d-flex justify-content-between col-md-12 pb-3">
					<h2 class="display-2 text-dark text-uppercase">
						Trending products
					</h2>
					<a href="shop.html" class="btn btn-medium btn-arrow btn-normal position-relative">
						<span class="text-uppercase">Shop all</span>
						<svg class="arrow-right position-absolute" width="18" height="20">
							<use xlink:href="#arrow-right"></use>
						</svg>
					</a>
				</div>
				<div id="trending-swiper" class="product-swiper col-md-12">
					<div class="swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
									<div class="image-holder">
										<img src="images/product-item1.jpg" alt="product-item"
											class="product-image img-fluid" />
									</div>
									<div class="cart-concern">
										<h3 class="card-title text-uppercase text-primary pt-3">
											<a href="single-product.html">Black Sofa Set</a>
										</h3>
										<div class="cart-info">
											<a class="pseudo-text-effect" href="#"
												data-after="ADD TO CART"><span>$200</span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
									<div class="image-holder">
										<img src="images/product-item2.jpg" alt="product-item"
											class="product-image img-fluid" />
									</div>
									<div class="cart-concern">
										<h3 class="card-title text-uppercase text-primary pt-3">
											<a href="single-product.html">Circle Dining Table</a>
										</h3>
										<div class="cart-info">
											<a class="pseudo-text-effect" href="#" data-after="ADD TO CART">
												<span>$200</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
									<div class="image-holder">
										<img src="images/product-item3.jpg" alt="product-item"
											class="product-image img-fluid" />
									</div>
									<div class="cart-concern">
										<h3 class="card-title text-uppercase text-primary pt-3">
											<a href="single-product.html">Minimal Sofa</a>
										</h3>
										<div class="cart-info">
											<a class="pseudo-text-effect" href="#" data-after="ADD TO CART">
												<span>$200</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
									<div class="image-holder">
										<img src="images/product-item4.jpg" alt="product-item"
											class="product-image img-fluid" />
									</div>
									<div class="cart-concern">
										<h3 class="card-title text-uppercase text-primary pt-3">
											<a href="single-product.html">Pattern Tea Table</a>
										</h3>
										<div class="cart-info">
											<a class="pseudo-text-effect" href="#" data-after="ADD TO CART">
												<span>$200</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
									<div class="image-holder">
										<img src="images/product-item5.jpg" alt="product-item"
											class="product-image img-fluid" />
									</div>
									<div class="cart-concern">
										<h3 class="card-title text-uppercase text-primary pt-3">
											<a href="single-product.html">Black Sofa Set</a>
										</h3>
										<div class="cart-info">
											<a class="pseudo-text-effect" href="#" data-after="ADD TO CART">
												<span>$200</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
									<div class="image-holder">
										<img src="images/product-item6.jpg" alt="product-item"
											class="product-image img-fluid" />
									</div>
									<div class="cart-concern">
										<h3 class="card-title text-uppercase text-primary pt-3">
											<a href="single-product.html">Minimal Sofa</a>
										</h3>
										<div class="cart-info">
											<a class="pseudo-text-effect" href="#" data-after="ADD TO CART">
												<span>$200</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-pagination mt-5 text-center"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="latest-blog">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="display-header d-flex justify-content-between flex-wrap pb-3">
						<h2 class="display-2 text-dark text-uppercase">
							Read Our Articles
						</h2>
						<a href="blog.html" class="btn btn-medium btn-arrow btn-normal position-relative">
							<span class="text-uppercase">See all articles</span>
							<svg class="arrow-right position-absolute" width="18" height="20">
								<use xlink:href="#arrow-right"></use>
							</svg>
						</a>
					</div>
				</div>
			</div>
			<div class="row g-3 post-grid">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
					<div class="card-item">
						<div class="card border-0 bg-transparent">
							<div class="card-image">
								<img src="images/post-item1.jpg" alt="" class="post-image img-fluid" />
							</div>
						</div>
						<div class="card-body mt-4 p-0">
							<h3 class="card-title text-uppercase">
								<a href="single-post.html">Best looking interior things for bedrooms</a>
							</h3>
							<p>
								Enim ut nunc, ultrices mauris felis viverra amet. Ante sed
								dictum nisi suscipit ac ut faucibus pretium interdum.
							</p>
							<a href="single-post.html" class="btn btn-normal text-uppercase p-0"><em>Read More</em></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
					<div class="card-item">
						<div class="card border-0">
							<div class="card-image">
								<img src="images/post-item2.jpg" alt="" class="post-image img-fluid" />
							</div>
						</div>
						<div class="card-body mt-4 p-0">
							<h3 class="card-title text-uppercase">
								<a href="single-post.html">Trending modern furniture design in 2022</a>
							</h3>
							<p>
								Enim ut nunc, ultrices mauris felis viverra amet. Ante sed
								dictum nisi suscipit ac ut faucibus pretium interdum.
							</p>
							<a href="single-post.html" class="btn btn-normal text-uppercase p-0"><em>Read More</em></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
					<div class="card-item">
						<div class="card border-0">
							<div class="card-image">
								<img src="images/post-item3.jpg" alt="" class="post-image img-fluid" />
							</div>
						</div>
						<div class="card-body mt-4 p-0">
							<h3 class="card-title text-uppercase">
								<a href="single-post.html">Why is simple firniture design looks fabulous</a>
							</h3>
							<p>
								Enim ut nunc, ultrices mauris felis viverra amet. Ante sed
								dictum nisi suscipit ac ut faucibus pretium interdum.
							</p>
							<a href="single-post.html" class="btn btn-normal text-uppercase p-0"><em>Read More</em></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="brand-collection"
		class="padding-small border-top border-bottom margin-large mb-0 overflow-hidden">
		<div class="container">
			<div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
				<a href="#"><img src="images/brand-logo-1.svg" alt="brand" /></a>
				<a href="#"><img src="images/brand-logo-2.svg" alt="brand" /></a>
				<a href="#"><img src="images/brand-logo-3.svg" alt="brand" /></a>
				<a href="#"><img src="images/brand-logo-4.svg" alt="brand" /></a>
				<a href="#"><img src="images/brand-logo-5.svg" alt="brand" /></a>
			</div>
		</div>
	</section>
@endsection