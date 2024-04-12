@extends('frontend.includes.app')

@section('main-content')

<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>Expert Craftsmanship <span clsas="d-block">Timeless Style</span></h1>
					<p class="mb-3">Expertly crafted eyewear with timeless style, showcasing exceptional craftsmanship for the modern individual seeking enduring sophistication.</p>
					<p><a href="{{route('shop') }}" class="btn btn-secondary me-2">Shop Now</a></p>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="hero-img-wrap">
					<img src="{{asset('frontend/assets/images/couch.png')}}" class="img-fluid" style="height: 500px;">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->

<!-- Start Product Section -->
<div class="product-section">
	<div class="container">
		<div class="row">

			<!-- Start Column 1 -->
			<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
				<h2 class="mb-4 section-title">Crafted with excellent material.</h2>
				<p class="mb-4">Expertly crafted with top-notch materials, ensuring durability and long-lasting quality in every pair of modern eyewear. </p>
				<p><a href="{{ route('shop') }}" class="btn">Explore</a></p>
			</div>
			<!-- End Column 1 -->

			<!-- Start Column 2 -->
			@foreach($homeProducts as $product)
			<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
				<a class="product-item" href="cart.html">
					<img src="{{$product->image}}" class="img-fluid product-thumbnail">
					<h3 class="product-title">{{$product->name}}</h3>
					<strong class="product-price">Rs {{$product->price}}</strong>
					<span class="icon-cross">
						<img src="{{asset('frontend/assets/images/cross.svg')}}" class="img-fluid">
					</span>
				</a>
			</div>
			@endforeach
			<!-- End Column 2 -->

			<!-- Start Column 3 -->
			
			<!-- End Column 4 -->

		</div>
	</div>
</div>
<!-- End Product Section -->

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-6">
				<h2 class="section-title">Why Choose Us</h2>
				<p>Discover premium sunglasses with UV protection, exceptional comfort, and wide selection, ensuring affordable luxury and customer satisfaction with fast shipping.</p>

				<div class="row my-5">
					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{asset('frontend/assets/images/truck.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Fast &amp; Free Shipping</h3>
							<p>Enjoy fast and free shipping on all orders for ultimate convenience and savings.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{asset('frontend/assets/images/bag.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Easy to Shop</h3>
							<p>Shopping made easy with user-friendly navigation and intuitive interface for seamless browsing and purchasing.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{asset('frontend/assets/images/support.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>24/7 Support</h3>
							<p>Receive round-the-clock support for any inquiries or assistance you may need, ensuring peace of mind always.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{asset('frontend/assets/images/return.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Hassle Free Returns</h3>
							<p>Easily return items hassle-free, ensuring your satisfaction with every purchase made on our platform.</p>
						</div>
					</div>

				</div>
			</div>

			<div class="col-lg-5">
				<div class="img-wrap">
					<img src="{{asset('frontend/assets/images/truck.jpg')}}" style=" height: 600px;" alt="Image" class="img-fluid">
				</div>
			</div>

		</div>
	</div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start We Help Section -->
<div class="we-help-section">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-7 mb-5 mb-lg-0">
				<div class="imgs-grid">
					<div class="grid grid-1"><img src="{{asset('frontend/assets/images/img-grid-1.jpg')}}" class="h-80 w-100"     alt="Untree.co"></div>
					<div class="grid grid-2"><img src="{{asset('frontend/assets/images/img-grid-2.jpg')}}" alt="Untree.co"></div>
					<div class="grid grid-3"><img src="{{asset('frontend/assets/images/img-grid-3.jpg')}}" class="h-80 w-100" alt="Untree.co"></div>
				</div>
			</div>
			<div class="col-lg-5 ps-lg-5">
				<h2 class="section-title mb-4">Elevate your style with modern eyewear.</h2>
				<p>Elevate your style effortlessly with contemporary eyewear, offering versatile designs, advanced technology, and convenient accessibility for both fashion and function. Make a statement with modern glasses or sunglasses today.</p>

				<ul class="list-unstyled custom-list my-4">
					<li>Upgrade your style with chic eyewear choices.</li>
					<li>Style with sleek modern eyewear designs.</li>
					<li>Elevate your look with modern eyewear.</li>
					<li>Enhance your look with trendy eyewear options.</li>
				</ul>
				<p><a herf="#" class="btn">Explore</a></p>
			</div>
		</div>
	</div>
</div>
<!-- End We Help Section -->


<!-- Start Testimonial Slider -->
<div class="testimonial-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 mx-auto text-center">
				<h2 class="section-title">Testimonials</h2>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="testimonial-slider-wrap text-center">

					<div id="testimonial-nav">
						<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
						<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
					</div>

					<div class="testimonial-slider">

						<div class="item">
							<div class="row justify-content-center">
								<div class="col-lg-8 mx-auto">

									<div class="testimonial-block text-center">
										<blockquote class="mb-5">
											<p>&ldquo;Chasmaghar's eyewear transformed my look! From casual to formal, their collection offers versatile options. I love the convenience of online shopping and the free delivery is a bonus!&rdquo;</p>
										</blockquote>

										<div class="author-info">
											<div class="author-pic">
												<img src="{{asset('frontend/assets/images/person-1.png')}}" alt="Maria Jones" class="img-fluid">
											</div>
											<h3 class="font-weight-bold">Sonu Dhakal</h3>
											<span class="position d-block mb-3">CEO, Co-Founder, Hunchha Digital</span>
										</div>
									</div>

								</div>
							</div>
						</div>
						<!-- END item -->

						<div class="item">
							<div class="row justify-content-center">
								<div class="col-lg-8 mx-auto">

									<div class="testimonial-block text-center">
										<blockquote class="mb-5">
											<p>&ldquo;Exceptional quality and style define Chasmaghar's eyewear. Each pair is a statement piece, and the free nationwide delivery makes shopping effortless. I'm a loyal customer for life!&rdquo;</p>
										</blockquote>

										<div class="author-info">
											<div class="author-pic">
												<img src="{{asset('frontend/assets/images/person-1.png')}}" alt="Maria Jones" class="img-fluid">
											</div>
											<h3 class="font-weight-bold">Amit Karki</h3>
											<span class="position d-block mb-3">Senior Laravel Developer</span>
										</div>
									</div>

								</div>
							</div>
						</div>
						<!-- END item -->

						<div class="item">
							<div class="row justify-content-center">
								<div class="col-lg-8 mx-auto">

									<div class="testimonial-block text-center">
										<blockquote class="mb-5">
											<p>&ldquo;Chasmaghar exceeded my expectations! Their eyewear is not only fashionable but also comfortable. With free nationwide delivery, shopping has never been easier. Highly recommend their collection!&rdquo;</p>
										</blockquote>

										<div class="author-info">
											<div class="author-pic">
												<img src="{{asset('frontend/assets/images/person-1.png')}}" alt="Maria Jones" class="img-fluid">
											</div>
											<h3 class="font-weight-bold">Manish Chaudhary</h3>
											<span class="position d-block mb-3">Node Developer</span>
										</div>
									</div>

								</div>
							</div>
						</div>
						<!-- END item -->

					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Testimonial Slider -->

<!-- Start Blog Section -->
<div class="blog-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-6">
				<h2 class="section-title">Recent Blog</h2>
			</div>
			<div class="col-md-6 text-start text-md-end">
				<a href="{{route('blog') }}" class="more">View All Posts</a>
			</div>
		</div>

		<div class="row">

			<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
				<div class="post-entry">
					<a href="#" class="post-thumbnail"><img src="{{asset('frontend/assets/images/post-1.jpg')}}" alt="Image" class="img-fluid"></a>
					<div class="post-content-entry">
						<h3><a href="#">First Time Home Owner Ideas</a></h3>
						<div class="meta">
							<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
				<div class="post-entry">
					<a href="#" class="post-thumbnail"><img src="{{asset('frontend/assets/images/post-2.jpg')}}" alt="Image" class="img-fluid"></a>
					<div class="post-content-entry">
						<h3><a href="#">How To Keep Your Furniture Clean</a></h3>
						<div class="meta">
							<span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
				<div class="post-entry">
					<a href="#" class="post-thumbnail"><img src="{{asset('frontend/assets/images/post-3.jpg')}}" alt="Image" class="img-fluid"></a>
					<div class="post-content-entry">
						<h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
						<div class="meta">
							<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- End Blog Section -->


@endsection