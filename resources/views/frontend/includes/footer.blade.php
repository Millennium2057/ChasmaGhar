<!-- Start Footer Section -->
<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="{{asset('frontend/assets/images/sofa1.png')}}" alt="Image" class="img-fluid">
				</div>

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="{{asset('frontend/assets/images/envelope-outline.svg')}}" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="{{route('index')}}" class="footer-logo">Chasma<span>Ghar</span></a></div>
						<p class="mb-4">Chasmaghar: Nepal's leading eyewear destination. Discover trendy glasses for every occasion. Shop online and enjoy free nationwide delivery. Elevate your style today!</p>

						<ul class="list-unstyled custom-social">
							<li><a href="https://www.facebook.com/yaman.niraula"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="https://www.instagram.com/niroulamillennium/"><span class="fa fa-brands fa-instagram"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="{{route('about') }}">About us</a></li>
									<li><a href="{{route('services') }}">Services</a></li>
									<li><a href="{{route('blog') }}">Blog</a></li>
									<li><a href="{{route('contact') }}">Contact us</a></li>
								</ul>
							</div>
        					<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Nordic Chair</a></li>
									<li><a href="#">Kruzo Aero</a></li>
									<li><a href="#">Ergonomic Chair</a></li>
								</ul>
							</div>
							<div class="col-6 col-sm-6 col-md-3">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d16960.472664989396!2d87.27199910129153!3d26.66448158794775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1712659450178!5m2!1sen!2snp" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a>  <!-- License information: https://untree.co/license/ -->
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/tiny-slider.js')}}"></script>
		<script src="{{asset('frontend/assets/js/custom.js')}}"></script>