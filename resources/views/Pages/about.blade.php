@extends('layouts.master')

<!-- @section('css')
@endsection -->

@section('breadcrumb')
     
							
@endsection

@section('content')
              
<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb0">
						<div class="title-lines">
							<h3 class="mt15">Hello, nice to meet you!</h3>
						</div>

						<p><strong>This website is all about a platform to help Discover talents, create benefits for talents, promote talents and get talent some sweet deals. Talent here is not only based on entertainment but also any creativity.</strong></p>

						<p>Arts and crafts are one other category apart from the gifted talents and also the trained or skilled talents. 
Buying and selling or other brands is another aspect in which we only have an advertisement package for, linkable to getting them more customers by finding a perfect talent to model for them. 
In conclusion the purpose of the website is to link Artists to more fan base, get them noticed and also connect them to the most possible support, sponsorship or investors with our uniquely planned and programmed management structure.</p>

						<div class="fitvidsjs">
							<iframe src="//player.vimeo.com/video/24456787" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, consequatur, ratione itaque totam ea blanditiis eius odit at sapiente cum numquam illo. Eligendi, natus, nihil, nemo, voluptates atque quo illum deleniti earum magni optio cupiditate nobis labore fuga vero voluptatem sed autem quasi culpa tempore suscipit delectus reprehenderit animi dolores!</p>

						<h3 class="bottom-line">Our Team</h3>

						<div class="row">
							<div class="col-sm-6 col-md-4">
								<div class="our-team-item">
									<div class="img">
										<img src="img/content/face-0.png" alt="">
									</div>

									<h6>John Doe <span>CEO</span></h6>
								</div>
							</div>

							<div class="col-sm-6 col-md-4">
								<div class="our-team-item">
									<div class="img">
										<img src="img/content/face-2.png" alt="">
									</div>

									<h6>John Doe <span>CEO</span></h6>
								</div>
							</div>

							<div class="col-sm-6 col-md-4">
								<div class="our-team-item">
									<div class="img">
										<img src="img/content/face-4.png" alt="">
									</div>

									<h6>John Doe <span>CEO</span></h6>
								</div>
							</div>

							<div class="col-sm-6 col-md-4">
								<div class="our-team-item">
									<div class="img">
										<img src="img/content/face-6.png" alt="">
									</div>

									<h6>John Doe <span>CEO</span></h6>
								</div>
							</div>

							<div class="col-sm-6 col-md-4">
								<div class="our-team-item">
									<div class="img">
										<img src="img/content/face-8.png" alt="">
									</div>

									<h6>John Doe <span>CEO</span></h6>
								</div>
							</div>

							<div class="col-sm-6 col-md-4">
								<div class="our-team-item">
									<div class="img">
										<img src="img/content/face-9.png" alt="">
									</div>

									<h6>John Doe <span>CEO</span></h6>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container links-widget">
							<ul>
								<li class="active"><a href="{{ url('/about') }}">About Us</a></li>
								<li><a href="{{ url('/policy') }}">Privacy Policy</a></li>
								<li><a href="{{ url('/term-condition') }}">Terms &amp; Conditions</a></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->
@endsection

@section('script')
	
@endsection