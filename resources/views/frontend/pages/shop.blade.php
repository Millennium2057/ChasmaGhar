@extends('frontend.includes.app')
@Section('main-content')

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7">
                <div class="intro-excerpt">
                    <h1>Shop</h1>
                    <p class="mb-4">
                        Shopping offered by Chasmaghar include stylish eyewear for all occasions, convenient online shopping, and nationwide free delivery.</p>
                    <p><a href="{{route ('shop')}}" class="btn btn-secondary me-2">Shop Now</a></p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-img-wrap">
                    <img src="{{asset('frontend/assets/images/couch.png')}}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->


		

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">

		      		<!-- Start Column 1 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="{{asset('frontend/assets/images/product-3.png')}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="{{asset('frontend/assets/images/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 1 -->
						
					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="{{asset('frontend/assets/images/product-1.png')}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="{{asset('frontend/assets/images/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="{{asset('frontend/assets/images/product-2.png')}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Kruzo Aero Chair</h3>
							<strong class="product-price">$78.00</strong>

							<span class="icon-cross">
								<img src="{{asset('frontend/assets/images/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="{{asset('frontend/assets/images/product-3.png')}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Ergonomic Chair</h3>
							<strong class="product-price">$43.00</strong>

							<span class="icon-cross">
								<img src="{{asset('frontend/assets/images/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->


					<!-- Start Column 1 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="{{asset('frontend/assets/images/product-3.png')}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="{{asset('frontend/assets/images/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 1 -->
						
					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="{{asset('frontend/assets/images/product-1.png')}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="{{asset('frontend/assets/images/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="{{asset('frontend/assets/images/product-2.png')}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Kruzo Aero Chair</h3>
							<strong class="product-price">$78.00</strong>

							<span class="icon-cross">
								<img src="{{asset('frontend/assets/images/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="{{asset('frontend/assets/images/product-3.png')}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Ergonomic Chair</h3>
							<strong class="product-price">$43.00</strong>

							<span class="icon-cross">
								<img src="{{asset('frontend/assets/images/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->

		      	</div>
		    </div>
		</div>

@endsection