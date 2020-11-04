@extends('layouts.master')

<!-- @section('css')
@endsection -->

@section('breadcrumb')
<!-- <div class="header-search-bar"> -->
			<!-- <div class="container">
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
							<input type="submit"  class="btn btn-default btn-block" value="Search">
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
			</div> -->
		<!-- </div>  -->
		<!-- end .header-search-bar -->

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

							<a  href="{{ url('register-talent') }}" class="btn btn-default">Talents</a>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="header-banner-box post-job">
							<img src="img/verified.png" alt="">

							<a  href="{{ url('register-investor') }}" class="btn btn-red">Sponsor</a>
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
					

					<div class="latest-jobs-section white-container">
						<div class="flexslider clearfix">
							<ul class="slides">
								@foreach ($cand as $c)  
									<li>								
										<img style="width: 100%; height: auto; vertical-align: middle;" src="http://localhost/fob/public/img/img_1.jpeg" alt="">								
									</li>	
									<li>								
										<img style="width: 100%; height: auto; vertical-align: middle;" src="http://localhost/fob/public/img/img_2.jpeg" alt="">								
									</li>	
									<li>								
										<img style="width: 100%; height: auto; vertical-align: middle;" src="http://localhost/fob/public/img/img_3.jpeg" alt="">								
									</li>	
									<!-- <li>								
										<img style="width: 100%; height: auto; vertical-align: middle;" src="http://localhost/fob/public/img/img_4.jpeg" alt="">								
									</li>	 -->
									<li>								
										<img style="width: 100%; height: auto; vertical-align: middle;" src="http://localhost/fob/public/img/img_5.jpeg" alt="">								
									</li>	
									<li>								
										<img style="width: 100%; height: auto; vertical-align: middle;" src="http://localhost/fob/public/img/img_6.jpeg" alt="">								
									</li>	
									<li>								
										<img style="width: 100%; height: auto; vertical-align: middle;" src="http://localhost/fob/public/img/img_7.jpeg" alt="">								
									</li>	
									<li>								
										<img style="width: 100%; height: auto; vertical-align: middle;" src="http://localhost/fob/public/img/img_8.jpeg" alt="">								
									</li>	
								
								@endforeach
							</ul>
						</div>
					</div> 
					</div>
					<!-- end .latest-jobs-section -->
					<div class="col-sm-12 page-content">
				<div class="title-lines">
					<h3 class="mt0">Our Activities</h3>
				</div>

				<div class="clearfix mb30">
					<ul class="jobs-view-toggle pull-left">
						<li><a href="#" data-layout="with-thumb" class="btn btn-gray fa fa-th-list active"></a></li>
						<li><a href="#" data-layout="" class="btn btn-gray fa fa-list"></a></li>
						<li><a href="#" data-layout="compact" class="btn btn-gray fa fa-align-justify"></a></li>
					</ul>

					<select class="form-control pull-left">
						<option value="">Sort By</option>
						<option value="">1</option>
						<option value="">2</option>
						<option value="">3</option>
						<option value="">4</option>
					</select>

					<ul class="pagination pull-right">
						<li><a href="#" class="fa fa-angle-left"></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#" class="fa fa-angle-right"></a></li>
					</ul>
				</div>

				<div class="jobs-item with-thumb">
					<div class="thumb"><img src="img/content/bus-00.png" alt=""></div>
					<div class="clearfix visible-xs"></div>
					<div class="date">27 <span>Jun</span></div>
					<h6 class="title"><a href="#">Front-end Developer</a></h6>
					<span class="meta">Envato, Sydney, AU</span>

					<ul class="top-btns">
						<li><a href="#" class="btn btn-gray fa fa-eye toggle"></a></li>
						<li><a href="#" class="btn btn-gray fa fa-star"></a></li>
						<li><a href="#" class="btn btn-gray fa fa-link"></a></li>
					</ul>

					<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum accusantium deleniti neque architecto vitae. <a href="#" class="read-more">Read More</a></p>

				</div>

				@foreach ($activities as $index => $c )
					<div class="jobs-item with-thumb">
						<div class="thumb"><img src="http://{{$app_url->app_url2}}/storage/app/{{$c->image}}" alt=""></div>
						<div class="clearfix visible-xs"></div>
						<div class="date">{{$c->day_}} <span>{{$c->month_}}</span></div>
						<h6 class="title"><a href="#">{{$c->tittle}}</a></h6>
						<span class="meta">{{$c->category_name}}</span>

						<ul class="top-btns">
							<li><a href="#" class="btn btn-gray fa fa-plus toggle"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-star"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-link"></a></li>
						</ul>

						<p class="description" style="white-space: pre-line;">{{$c->content}}<a href="#" class="read-more">Read More</a></p>
						<div class="clearfix"></div>
												<div class="content">
													<!-- <p style="white-space: pre-line;">{{$c->content}}</p> -->

													<h5>Image Gallery</h5>
													<?php
						$g_image=App\ActGallery::orderBy('id','desc')->join('galleries','act_galleries.gallery_id','=','galleries.id')->join('activities','act_galleries.activities_id','=','activities.id')->select('act_galleries.*','activities.tittle','galleries.image_name')->where('galleries.image_type','=','image')->where('galleries.subject','=','activities')->where('act_galleries.activities_id','=',$c->id)->get();
						$g_video=App\ActGallery::orderBy('id','desc')->join('galleries','act_galleries.gallery_id','=','galleries.id')->join('activities','act_galleries.activities_id','=','activities.id')->select('act_galleries.*','activities.tittle','galleries.image_name')->where('galleries.image_type','=','video')->where('galleries.subject','=','activities')->where('act_galleries.activities_id','=',$c->id)->get();
						// echo $g_image;
													?>
									<div class="row">
						<ul class="slides">
							@if(!$g_image->isEmpty())
							@foreach ($g_image as $img )
						<li>
														<a href="#">
															<img style="position: relative;	height: 200px;" class="thumb" src="http://localhost/fob/storage/app/{{$img->image_name}}" alt="">
														</a>
													</li>
						@endforeach
													
						@else
							
						@endif
													
						</ul></div>
										
								<hr>					
						<h5>Video Gallery</h5>

													<ul class="additional-requirements clearfix">
														<div class="row">
															@if(!$g_video->isEmpty())
							@foreach ($g_video as $v )
								<div class="fitvidsjs col-sm-6">
													<iframe src="//{{$v->image_name}}" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
												</div>
						
						@endforeach
						@else
    
							@endif
														
														</div>	
														</ul>
														<hr>
														<!-- <div class="clearfix">
															<a href="#" class="btn btn-default pull-left">Apply for this Job</a>

															<ul class="social-icons pull-right">
																<li><span>Share</span></li>
																<li><a href="#" class="btn btn-gray fa fa-facebook"></a></li>
																<li><a href="#" class="btn btn-gray fa fa-twitter"></a></li>
																<li><a href="#" class="btn btn-gray fa fa-google-plus"></a></li>
															</ul>
														</div> -->
													</div>
												</div>
							@endforeach

				


					


				<div class="clearfix">
					<ul class="pagination pull-right">
						<li><a href="#" class="fa fa-angle-left"></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#" class="fa fa-angle-right"></a></li>
					</ul>
				</div>
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
							</ul>
						</div>
					</div> <!-- end .latest-jobs-section -->

					<div class="title-lines">
						<h3>Our Partners</h3>
					</div>

					<div class="our-partners-section white-container">
						<ul class="clearfix">

						<li>
								<div class="css-table">
									<div class="css-table-cell">
										<a href="#"><img src="img/content/logo-1.png" alt=""></a>
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
							</li>
							<!-- @foreach ($invest as $c)    
								<li>
									<div class="css-table">
										<div class="css-table-cell">
											<a href="{{ url('/partners') }}"><img src="http://localhost/fob/public/upload/{{ $c->image }}" style="width: 100%;height: 50px" alt=""></a>
										</div>
									</div>
								</li>
							@endforeach -->
							
						</ul>
					</div> <!-- end .our-partners-section -->

					
				</div> <!-- end .page-content -->

				<!-- <div class="col-sm-4 page-sidebar">
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
				</div> -->
				 <!-- end .page-sidebar -->
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
									<img style="position: relative;	height: 100px;" class="thumb" src="http://localhost/fob/public/img/photos/image_1.jpeg" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img style="position: relative;	height: 100px;" class="thumb" src="http://localhost/fob/public/img/photos/image_2.jpeg" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img style="position: relative;	height: 100px;" class="thumb" src="http://localhost/fob/public/img/photos/image_3.jpeg" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img style="position: relative;	height: 100px;" class="thumb" src="http://localhost/fob/public/img/photos/image_4.jpeg" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img style="position: relative;	height: 100px;" class="thumb" src="http://localhost/fob/public/img/photos/image_5.jpeg" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img style="position: relative;	height: 100px;" class="thumb" src="http://localhost/fob/public/img/photos/img_4.jpeg" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img style="position: relative;	height: 100px;" class="thumb" src="http://localhost/fob/public/img/photos/img_5.jpeg" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img style="position: relative;	height: 100px;" class="thumb" src="http://localhost/fob/public/img/photos/img_6.jpeg" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img style="position: relative;	height: 100px;" class="thumb" src="http://localhost/fob/public/img/photos/img_8.jpeg" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img class="thumb" src="http://localhost/fob/public/img/photos/image_1.jpeg" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img class="thumb" src="http://localhost/fob/public/img/photos/image_1.jpeg" alt="">
								</a>
							</li>

							<li>
								<a href="#">
									<img class="thumb" src="http://localhost/fob/public/img/photos/image_1.jpeg" alt="">
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