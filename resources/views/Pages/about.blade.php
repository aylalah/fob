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
							<h3 class="mt15">{{$abt->heading}}</h3>
						</div>

						<!-- <p><strong>This website is all about a platform to help Discover talents, create benefits for talents, promote talents and get talent some sweet deals. Talent here is not only based on entertainment but also any creativity.</strong></p> -->

						<p style="white-space: pre-line;">{{$abt->content}}</p>

						<div class="fitvidsjs">
							<iframe src="//{{$abt->video}}" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>

						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, consequatur, ratione itaque totam ea blanditiis eius odit at sapiente cum numquam illo. Eligendi, natus, nihil, nemo, voluptates atque quo illum deleniti earum magni optio cupiditate nobis labore fuga vero voluptatem sed autem quasi culpa tempore suscipit delectus reprehenderit animi dolores!</p> -->

						<h3 class="bottom-line">Our Team</h3>

						<div class="row">
							 @foreach ($team as $index => $t )  
							<div class="col-sm-6 col-md-4">
								<div class="our-team-item">
									<div class="img">
										   <img  src="http://localhost/fob/storage/app/{{$t->image}}" alt="" />
									</div>

									<h6>{{$t->team_name}} <span>{{$t->designation}}</span></h6>
								</div>
							</div>
     @endforeach
							
							
						</div>
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container links-widget">
							<ul>
								<li class="active"><a href="{{ url('/about') }}">About Us</a></li>
								<li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
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