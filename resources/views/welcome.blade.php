@extends('layouts.master')

<!-- @section('css')
@endsection -->

@section('breadcrumb')
<div class="header-search-bar">
			<div class="container">
				<form>
					<div class="basic-form clearfix">
						<a href="#" class="toggle"><span></span></a>

						<div class="hsb-input-1">
							<input type="text" class="form-control" placeholder="I'm looking for a ...">
						</div>

						<div class="hsb-text-1">in</div>

						<div class="hsb-container">
							<div class="hsb-input-2">
								<input type="text" class="form-control" placeholder="Location">
							</div>

							<div class="hsb-select">
								<select class="form-control">
									<option value="0">Select Category</option>
									<option value="">Category</option>
									<option value="">Category</option>
									<option value="">Category</option>
									<option value="">Category</option>
								</select>
							</div>
						</div>

						<div class="hsb-submit">
                        <a class="btn btn-default btn-blockk" href="{{ url('/search') }}">Search</a>
							<!-- <input type="submit"  class="btn btn-default btn-block" value="Search"> -->
						</div>
					</div>

					<div class="advanced-form">
						<div class="container">
							<div class="row">
								<label class="col-md-3">Distance</label>

								<div class="col-md-9">
									<div class="range-slider">
										<div class="slider" data-min="1" data-max="200" data-current="100"></div>
										<div class="last-value"><span>100</span> km</div>
									</div>
								</div>
							</div>

							<div class="row">
								<label class="col-md-3">Rating</label>

								<div class="col-md-9">
									<div class="range-slider">
										<div class="slider" data-min="1" data-max="100" data-current="20"></div>
										<div class="last-value">&gt; <span>20</span> %</div>
									</div>
								</div>
							</div>

							<div class="row">
								<label class="col-md-3">Days Published</label>

								<div class="col-md-9">
									<div class="range-slider">
										<div class="slider" data-min="1" data-max="60" data-current="30"></div>
										<div class="last-value">&lt; <span>30</span></div>
									</div>
								</div>
							</div>

							<div class="row">
								<label class="col-md-3">Location</label>

								<div class="col-md-9">
									<input type="text" class="form-control" placeholder="Switzerland">
								</div>
							</div>

							<div class="row">
								<label class="col-md-3">Industry</label>

								<div class="col-md-9">
									<select class="form-control">
										<option value="">Select Industry</option>
										<option value="">Option 1</option>
										<option value="">Option 2</option>
										<option value="">Option 3</option>
										<option value="">Option 4</option>
										<option value="">Option 5</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div> <!-- end .header-search-bar -->

		<div class="header-banner">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="header-banner-box register">
							<div class="counter-container">
								<ul class="counter clearfix">
									<li class="zero">0</li>
									<li>0</li>
									<li>0</li>
									<li>1</li>
									<li>0</li>
									<li>9</li>
								</ul>

								<div><span>Talents</span></div>
							</div>

							<a  href="{{ url('register-user') }}" class="btn btn-default">Register Now</a>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="header-banner-box post-job">
							<img src="img/verified.png" alt="">

							<a  href="{{ url('register-invest') }}" class="btn btn-red">Sponsor</a>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end .header-banner -->       
							
@endsection

@section('content')
              
<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="title-lines">
						<h3 class="mt0">Find a Talent Per</h3>
					</div>

					<div class="find-job-tabs responsive-tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#find-job-tabs-map">Map</a></li>
							<li><a href="#find-job-tabs-industry">Industry</a></li>
							<li><a href="#find-job-tabs-role">Type</a></li>
							<li><a href="#find-job-tabs-country">Country</a></li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane active" id="find-job-tabs-map">
								<div id="find-job-map-tab" class="p5"></div>

								<hr class="m0 primary">

								<div class="row p30">
									<div class="col-sm-6">
										<ul class="filter-list">
											<li><a href="#">Asia <span>(1234)</span></a></li>
											<li><a href="#">Africa <span>(5678)</span></a></li>
											<li><a href="#">Europe <span>(910)</span></a></li>
											<li><a href="#">North America <span>(347)</span></a></li>
										</ul>
									</div>

									<div class="col-sm-6">
										<ul class="filter-list">
											<li><a href="#">Central America <span>(52)</span></a></li>
											<li><a href="#">South America <span>(117)</span></a></li>
											<li><a href="#">Oceania <span>(736)</span></a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="tab-pane" id="find-job-tabs-industry">
								<div class="row p30">
									<div class="col-sm-6">
										<h6 class="mt0">Administrative and Support Services</h6>

										<ul class="filter-list">
											<li><a href="#">Support Services <span>(34)</span></a></li>
											<li><a href="#">Consulting Services <span>(142)</span></a></li>
											<li><a href="#">Customer Service <span>(67)</span></a></li>
											<li><a href="#">Employment Placement <span>(24)</span></a></li>
											<li><a href="#">Agencies/Recruiting <span>(113)</span></a></li>
											<li><a href="#">Human Resources <span>(27)</span></a></li>
											<li><a href="#">Administration <span>(57)</span></a></li>
											<li><a href="#">Contracts/Purchasing <span>(29)</span></a></li>
											<li><a href="#">Secretarial <span>(22)</span></a></li>
											<li><a href="#">Security <span>(26)</span></a></li>
											<li><a href="#">Telemarketing <span>(4)</span></a></li>
											<li><a href="#">Translation <span>(12)</span></a></li>
											<li><a href="#">Management <span>(70)</span></a></li>
											<li><a href="#">Business Support <span>(29)</span></a></li>
										</ul>

										<h6>Healthcare and Science</h6>

										<ul class="filter-list">
											<li><a href="#">Pharmaceutical <span>(42)</span></a></li>
											<li><a href="#">Manufacturing <span>(149)</span></a></li>
											<li><a href="#">Mechanical <span>(28)</span></a></li>
											<li><a href="#">Technical/Maintenance <span>(40)</span></a></li>
											<li><a href="#">Lubricants/Greases Blending <span>(10)</span></a></li>
											<li><a href="#">Textiles <span>(10)</span></a></li>
											<li><a href="#">Aerospace and Defense <span>(14)</span></a></li>
										</ul>
									</div>

									<div class="col-sm-6">
										<h6 class="mt0">Manufacturing and Industrial</h6>

										<ul class="filter-list">
											<li><a href="#">Agriculture/Forestry/Fishing <span>(42)</span></a></li>
											<li><a href="#">Installation/Maintenance <span>(37)</span></a></li>
											<li><a href="#">Manufacturing and Production <span>(96)</span></a></li>
											<li><a href="#">Mining <span>(9)</span></a></li>
											<li><a href="#">Safety/Environment <span>(21)</span></a></li>
											<li><a href="#">Industrial <span>(184)</span></a></li>
											<li><a href="#">Manufacturing <span>(149)</span></a></li>
											<li><a href="#">Mechanical <span>(28)</span></a></li>
											<li><a href="#">Technical/Maintenance <span>(40)</span></a></li>
											<li><a href="#">Lubricants/Greases Blending <span>(10)</span></a></li>
											<li><a href="#">Textiles <span>(10)</span></a></li>
											<li><a href="#">Aerospace and Defense <span>(14)</span></a></li>
										</ul>

										<h6>Healthcare and Science</h6>

										<ul class="filter-list">
											<li><a href="#">Pharmaceutical <span>(42)</span></a></li>
											<li><a href="#">Manufacturing <span>(149)</span></a></li>
											<li><a href="#">Mechanical <span>(28)</span></a></li>
											<li><a href="#">Technical/Maintenance <span>(40)</span></a></li>
											<li><a href="#">Lubricants/Greases Blending <span>(10)</span></a></li>
											<li><a href="#">Textiles <span>(10)</span></a></li>
											<li><a href="#">Aerospace and Defense <span>(14)</span></a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="tab-pane" id="find-job-tabs-role">
								<div class="p30">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, harum, optio, repudiandae voluptatum illum et ipsam quisquam at dolore illo eaque odio inventore quos esse reiciendis laudantium nobis aperiam iure!</p>

									<div class="row">
										<div class="col-sm-6">
											<ul class="filter-list">
												<li><a href="#">Accounting/Banking/Finance Jobs <span>(581)</span></a></li>
												<li><a href="#">Administration Jobs <span>(406)</span></a></li>
												<li><a href="#">Art/Design/Creative Jobs <span>(176)</span></a></li>
												<li><a href="#">Customer Service Jobs <span>(334)</span></a></li>
												<li><a href="#">Education/Training Jobs <span>(180)</span></a></li>
												<li><a href="#">Engineering Jobs <span>(978)</span></a></li>
												<li><a href="#">Healthcare/Medical Jobs <span>(131)</span></a></li>
												<li><a href="#">Human Resources/Personnel Jobs <span>(318)</span></a></li>
												<li><a href="#">Law/Legal Jobs <span>(61)</span></a></li>
												<li><a href="#">Logistics Jobs <span>(144)</span></a></li>
												<li><a href="#">Management Jobs <span>(743)</span></a></li>
												<li><a href="#">Law/Legal Jobs <span>(61)</span></a></li>
												<li><a href="#">Logistics Jobs <span>(144)</span></a></li>
												<li><a href="#">Management Jobs <span>(743)</span></a></li>
											</ul>
										</div>

										<div class="col-sm-6">
											<ul class="filter-list">
												<li><a href="#">Marketing/PR Jobs <span>(329)</span></a></li>
												<li><a href="#">Other Jobs <span>(326)</span></a></li>
												<li><a href="#">Purchasing/Procurement Jobs <span>(130)</span></a></li>
												<li><a href="#">Quality Control Jobs <span>(93)</span></a></li>
												<li><a href="#">Research Jobs <span>(33)</span></a></li>
												<li><a href="#">Safety Jobs <span>(72)</span></a></li>
												<li><a href="#">Sales Jobs <span>(1061)</span></a></li>
												<li><a href="#">Secretarial Jobs <span>(155)</span></a></li>
												<li><a href="#">Support Services Jobs <span>(744)</span></a></li>
												<li><a href="#">Technology/IT Jobs <span>(546)</span></a></li>
												<li><a href="#">Writing/Editing Jobs <span>(19)</span></a></li>
												<li><a href="#">Support Services Jobs <span>(744)</span></a></li>
												<li><a href="#">Technology/IT Jobs <span>(546)</span></a></li>
												<li><a href="#">Writing/Editing Jobs <span>(19)</span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane" id="find-job-tabs-country">
								<div class="row p30">
									<div class="col-sm-6">
										<ul class="country-list">
											<li><a href="#"><img src="img/flag-icons/Afghanistan.png" alt=""> Afghanistan <span>(7)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/African%20Union.png" alt=""> African Union <span>(6)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Aland.png" alt=""> Aland <span>(2)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Albania.png" alt=""> Albania <span>(7)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Alderney.png" alt=""> Alderney <span>(3)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Algeria.png" alt=""> Algeria <span>(4)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/American%20Samoa.png" alt=""> American Samoa <span>(3)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Andorra.png" alt=""> Andorra <span>(5)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Angola.png" alt=""> Angola <span>(3)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Anguilla.png" alt=""> Anguilla <span>(8)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Antarctica.png" alt=""> Antarctica <span>(3)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Antigua%20Barbuda.png" alt=""> Antigua &amp; Barbuda <span>(6)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Arab%20League.png" alt=""> Arab League <span>(3)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Argentina.png" alt=""> Argentina <span>(2)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Armenia.png" alt=""> Armenia <span>(3)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Aruba.png" alt=""> Aruba <span>(8)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/ASEAN.png" alt=""> ASEAN <span>(3)</span></a></li>
										</ul>
									</div>

									<div class="col-sm-6">
										<ul class="country-list">
											<li><a href="#"><img src="img/flag-icons/Kenya.png" alt=""> Kenya <span>(3)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Kiribati.png" alt=""> Kiribati <span>(4)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Kosovo.png" alt=""> Kosovo <span>(2)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Kuwait.png" alt=""> Kuwait <span>(6)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Kyrgyzstan.png" alt=""> Kyrgyzstan <span>(1)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Laos.png" alt=""> Laos <span>(3)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Latvia.png" alt=""> Latvia <span>(4)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Lebanon.png" alt=""> Lebanon <span>(2)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Lesotho.png" alt=""> Lesotho <span>(5)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Liberia.png" alt=""> Liberia <span>(7)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Libya.png" alt=""> Libya <span>(1)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Liechtenstein.png" alt=""> Liechtenstein <span>(6)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Lithuania.png" alt=""> Lithuania <span>(2)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Luxembourg.png" alt=""> Luxembourg <span>(8)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Macao.png" alt=""> Macao <span>(5)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Macedonia.png" alt=""> Macedonia <span>(2)</span></a></li>
											<li><a href="#"><img src="img/flag-icons/Madagascar.png" alt=""> Madagascar <span>(1)</span></a></li>
										</ul>
									</div>
								</div>
                  			</div>
						</div>
					</div> <!-- end .find-job-tabs -->

					<div class="title-lines">
						<h3>Latest Talent</h3>
					</div>

					<div class="latest-jobs-section white-container">
						<div class="flexslider clearfix">
							<ul class="slides">
									@foreach ($cand as $c)  
										<li>

									<div class="image">
										<img src="http://localhost/fob/public/upload/{{ $c->image }}" alt="">
										<a href="#" class="btn btn-default fa fa-search"></a>
										<a href="#" class="btn btn-default fa fa-link"></a>
									</div>

									<div class="content">
										<h5>{{$c->name}} Talent</h5>
										<h6>{{$c->skill_1}} @if($c->skill_2 != null),{{$c->skill_2}} @endif @if($c->skill_3 != null),{{$c->skill_3}} @endif </h6>
										<span class="location">{{$c->address_1}}</span>
										<p>{{$c->about}}. <a href="{{ url('/candidate') }}" class="read-more">Read More</a></p>
									</div>

								</li>
  
						
@endforeach
				
								<!-- <li>
									<div class="image">
										<img src="img/content/face-0.png" alt="">
										<a href="#" class="btn btn-default fa fa-search"></a>
										<a href="#" class="btn btn-default fa fa-link"></a>
									</div>

									<div class="content">
										<h6>Front-End Developer at Envato</h6>
										<span class="location">Sydney, Australia</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, hic corrupti nobis consequuntur nam praesentium dolorem quo accusamus laborum ab. <a href="#" class="read-more">Read More</a></p>
									</div>

								</li>

								<li>
									<div class="image">
										<img src="img/content/face-2.png" alt="">
										<a href="#" class="btn btn-default fa fa-search"></a>
										<a href="#" class="btn btn-default fa fa-link"></a>
									</div>

									<div class="content">
										<h6>Front-End Developer at Envato</h6>
										<span class="location">Sydney, Australia</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, hic corrupti nobis consequuntur nam praesentium dolorem quo accusamus laborum ab. <a href="#" class="read-more">Read More</a></p>
									</div>
								</li>

								<li>
									<div class="image">
										<img src="img/content/face-4.png" alt="">
										<a href="#" class="btn btn-default fa fa-search"></a>
										<a href="#" class="btn btn-default fa fa-link"></a>
									</div>

									<div class="content">
										<h6>Front-End Developer at Envato</h6>
										<span class="location">Sydney, Australia</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, hic corrupti nobis consequuntur nam praesentium dolorem quo accusamus laborum ab. <a href="#" class="read-more">Read More</a></p>
									</div>
								</li>

								<li>
									<div class="image">
										<img src="img/content/face-6.png" alt="">
										<a href="#" class="btn btn-default fa fa-search"></a>
										<a href="#" class="btn btn-default fa fa-link"></a>
									</div>

									<div class="content">
										<h6>Front-End Developer at Envato</h6>
										<span class="location">Sydney, Australia</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, hic corrupti nobis consequuntur nam praesentium dolorem quo accusamus laborum ab. <a href="#" class="read-more">Read More</a></p>
									</div>
								</li> -->
							</ul>
						</div>
					</div> <!-- end .latest-jobs-section -->

					<div class="title-lines">
						<h3>Our Partners</h3>
					</div>

					<div class="our-partners-section white-container">
						<ul class="clearfix">
									@foreach ($invest as $c)    
							<li>
								<div class="css-table">
									<div class="css-table-cell">
										<a href="{{ url('/partners') }}"><img src="http://localhost/fob/public/upload/{{ $c->image }}" alt=""></a>
									</div>
								</div>
							</li>
@endforeach
							<!-- <li>
								<div class="css-table">
									<div class="css-table-cell">
										<a href="#"><img src="img/content/logo-2.png" alt=""></a>
									</div>
								</div>
							</li>

							<li>
								<div class="css-table">
									<div class="css-table-cell">
										<a href="#"><img src="img/content/logo-3.png" alt=""></a>
									</div>
								</div>
							</li>

							<li>
								<div class="css-table">
									<div class="css-table-cell">
										<a href="#"><img src="img/content/logo-2.png" alt=""></a>
									</div>
								</div>
							</li>

							<li>
								<div class="css-table">
									<div class="css-table-cell">
										<a href="#"><img src="img/content/logo-3.png" alt=""></a>
									</div>
								</div>
							</li>

							<li>
								<div class="css-table">
									<div class="css-table-cell">
										<a href="#"><img src="img/content/logo-1.png" alt=""></a>
									</div>
								</div>
							</li> -->
						</ul>
					</div> <!-- end .our-partners-section -->

					<!-- <div class="title-lines">
						<h3>Our Prices</h3>
					</div>

					<div class="pricing-tables tables-3">
						<div class="pricing-tables-column">
							<div class="white-container">
								<h5 class="title">Bronze</h5>

								<span class="price">$ 15</span>

								<ul class="features">
									<li>1 Job Ad</li>
									<li>30 Days</li>
									<li>Standard Positioning</li>
									<li>1 Lorem Ipsum</li>
								</ul>

								<a href="#" class="btn btn-default">Choose</a>
							</div>
						</div>

						<div class="pricing-tables-column">
							<div class="white-container">
								<h5 class="title">Silver</h5>

								<span class="price">$ 49</span>

								<ul class="features">
									<li>5 Job Ad</li>
									<li>45 Days</li>
									<li>Extended Positioning</li>
									<li>5 Lorem Ipsum</li>
								</ul>

								<a href="#" class="btn btn-default">Choose</a>
							</div>
						</div>

						<div class="pricing-tables-column">
							<div class="white-container">
								<h5 class="title">Gold</h5>

								<span class="price">$ 99</span>

								<ul class="features">
									<li>10 Job Ad</li>
									<li>60 Days</li>
									<li>Extra Positioning</li>
									<li>5 Lorem Ipsum</li>
								</ul>

								<a href="#" class="btn btn-default">Choose</a>
							</div>
						</div>
					</div> end .pricing-tables -->
				</div> <!-- end .page-content -->

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container social-widget">
							<h5 class="widget-title">Share Us</h5>

							<div class="widget-content">
								<div class="row row-p5">
									<div class="col-xs-6 col-md-3 share-box facebook">
										<div class="count">86</div>
										<a href="#">Facebook</a>
									</div>

									<div class="col-xs-6 col-md-3 share-box twitter">
										<div class="count">2.2k</div>
										<a href="#">Twitter</a>
									</div>

									<div class="col-xs-6 col-md-3 share-box google">
										<div class="count">324</div>
										<a href="#">Google +</a>
									</div>

									<div class="col-xs-6 col-md-3 share-box linkedin">
										<div class="count">1.5k</div>
										<a href="#">LinkedIn</a>
									</div>
								</div>
							</div>
						</div>

						<div class="widget sidebar-widget text-center">
							<a href="#"><img src="img/content/sidebar-ad.png" alt=""></a>
						</div>

						<div class="white-container">
							<div class="widget sidebar-widget">
								<h5 class="widget-title">5 Tips To Pass Your Interview!</h5>

								<div class="widget-content">
									<div class="fitvidsjs">
										<iframe src="//www.youtube.com/embed/A6XUVjK9W4o?rel=0&controls=2&showinfo=0" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
							</div>

							<div class="widget sidebar-widget">
								<h5 class="widget-title">The Poll</h5>

								<div class="widget-content">
									<p>Are you satisfied with your current employer?</p>
									<div class="radio">
										<label>
											<input type="radio" name="sidebarpoll" value="" checked>
											Definitely Yes
										</label>
									</div>

									<div class="radio">
										<label>
											<input type="radio" name="sidebarpoll" value="">
											Rather Yes
										</label>
									</div>

									<div class="radio">
										<label>
											<input type="radio" name="sidebarpoll" value="">
											I'm not sure
										</label>
									</div>

									<div class="radio">
										<label>
											<input type="radio" name="sidebarpoll" value="">
											Rather Not
										</label>
									</div>

									<div class="radio">
										<label>
											<input type="radio" name="sidebarpoll" value="">
											Not at all
										</label>
									</div>
								</div>
							</div>
						</div>
					</aside>
				</div> <!-- end .page-sidebar -->
			</div>
		</div> <!-- end .container -->

		<div class="success-stories-section">
			<div class="container">
				<h5 class="mt10">Success Stories</h5>

				<div>
					<div class="flexslider">
						<ul class="slides">
							<li>
								<a href="#">
									<img class="thumb" src="img/content/face-0.png" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img class="thumb" src="img/content/face-1.png" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img class="thumb" src="img/content/face-2.png" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img class="thumb" src="img/content/face-3.png" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img class="thumb" src="img/content/face-4.png" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img class="thumb" src="img/content/face-5.png" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img class="thumb" src="img/content/face-6.png" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img class="thumb" src="img/content/face-7.png" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img class="thumb" src="img/content/face-8.png" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img class="thumb" src="img/content/face-9.png" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img class="thumb" src="img/content/face-3.png" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img class="thumb" src="img/content/face-4.png" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img class="thumb" src="img/content/face-5.png" alt="">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end #page-content -->

@endsection

@section('script')
	
@endsection