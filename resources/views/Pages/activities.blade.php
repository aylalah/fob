@extends('layouts.master')

<!-- @section('css')
@endsection -->

@section('breadcrumb')
     
							
@endsection

@section('content')
              
<div id="page-content">
		
	<div class="container">
		<div class="row">
				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="white-container mb0">
							<div class="widget sidebar-widget jobs-search-widget">
								<h5 class="widget-title">Search</h5>

								<div class="widget-content">
									<span>I'm looking for a ...</span>

									<select class="form-control mt10 mb10">
										<option value="0">Job</option>
										<option value="">Category</option>
										<option value="">Category</option>
										<option value="">Category</option>
										<option value="">Category</option>
									</select>

									<span>in</span>

									<input type="text" class="form-control mt10" placeholder="Location">

									<input type="text" class="form-control mt15 mb15" placeholder="Industry / Role">

									<input type="submit" class="btn btn-default" value="Search">
								</div>
							</div>

							<div class="widget sidebar-widget jobs-filter-widget">
								<h5 class="widget-title">Filter Results</h5>

								<div class="widget-content">
									<h6>By Region</h6>

									<div>
										<ul class="filter-list">
											<li>
												<a href="#">Asia <span>(1234)</span></a>
												<ul>
													<li>
														<a href="#">Asia <span>(1234)</span></a>
														<ul>
															<li><a href="#">Asia <span>(1234)</span></a></li>
															<li><a href="#">Africa <span>(5678)</span></a></li>
															<li><a href="#">Europe <span>(910)</span></a></li>
															<li><a href="#">North America <span>(347)</span></a></li>
															<li><a href="#">Central America <span>(52)</span></a></li>
															<li><a href="#">South America <span>(117)</span></a></li>
															<li><a href="#">Oceania <span>(736)</span></a></li>
														</ul>
													</li>
													<li><a href="#">Africa <span>(5678)</span></a></li>
													<li><a href="#">Europe <span>(910)</span></a></li>
													<li><a href="#">North America <span>(347)</span></a></li>
													<li><a href="#">Central America <span>(52)</span></a></li>
													<li><a href="#">South America <span>(117)</span></a></li>
													<li><a href="#">Oceania <span>(736)</span></a></li>
												</ul>
											</li>
											<li><a href="#">Africa <span>(5678)</span></a></li>
											<li><a href="#">Europe <span>(910)</span></a></li>
											<li><a href="#">North America <span>(347)</span></a></li>
											<li><a href="#">Central America <span>(52)</span></a></li>
											<li><a href="#">South America <span>(117)</span></a></li>
											<li><a href="#">Oceania <span>(736)</span></a></li>
										</ul>

										<a href="#" class="toggle"></a>
									</div>

									<h6>By Industry</h6>

									<div>
										<ul class="filter-list">
											<li><a href="#">Administration <span>(75)</span></a></li>
											<li><a href="#">Manufactoring <span>(3741)</span></a></li>
											<li><a href="#">Healthcare &amp; Science <span>(115)</span></a></li>
											<li><a href="#">Media &amp; Creative <span>(347)</span></a></li>
											<li><a href="#">Transportation <span>(52)</span></a></li>
										</ul>

										<a href="#" class="toggle"></a>
									</div>

									<h6>By Type</h6>

									<div>
										<ul class="filter-list">
											<li><a href="#">Banking/Finance <span>(300)</span></a></li>
											<li><a href="#">Administration <span>(758)</span></a></li>
											<li><a href="#">Art/Design/Creative <span>(20)</span></a></li>
											<li><a href="#">Customer Service <span>(165)</span></a></li>
											<li><a href="#">Education/Training <span>(11)</span></a></li>
											<li><a href="#">Banking/Finance <span>(9)</span></a></li>
										</ul>

										<a href="#" class="toggle"></a>
									</div>

									<h6>Type of Contract</h6>

									<div class="checkbox"><label><input type="checkbox"> Full-Time</label></div>
									<div class="checkbox"><label><input type="checkbox"> Part-Time</label></div>
									<div class="checkbox"><label><input type="checkbox"> Freelance</label></div>
									<div class="checkbox"><label><input type="checkbox"> Internship</label></div>

									<h6>Work Experience</h6>

									<div class="checkbox"><label><input type="checkbox"> Not Applicable</label></div>
									<div class="checkbox"><label><input type="checkbox"> Mid-Senior Level</label></div>
									<div class="checkbox"><label><input type="checkbox"> Entry Level</label></div>
									<div class="checkbox"><label><input type="checkbox"> Associate</label></div>
									<div class="checkbox"><label><input type="checkbox"> Director</label></div>
									<div class="checkbox"><label><input type="checkbox"> Internship</label></div>
									<div class="checkbox"><label><input type="checkbox"> Executive</label></div>

									<h6>Work Permit</h6>

									<div class="radio"><label><input type="radio"> Full-Time</label></div>
									<div class="radio"><label><input type="radio"> Part-Time</label></div>
									<div class="radio"><label><input type="radio"> Freelance</label></div>

									<h6>Date Posted</h6>

									<div class="range-slider clearfix">
										<div class="slider" data-min="1" data-max="60"></div>
										<div class="first-value"><span>1</span> days</div>
										<div class="last-value"><span>60</span> days</div>
									</div>

									<h6>Salary Range</h6>

									<div class="range-slider clearfix">
										<div class="slider" data-min="1" data-max="100000"></div>
										<div class="first-value">$ <span>1</span></div>
										<div class="last-value">$ <span>100000</span></div>
									</div>

									<input type="submit" class="btn btn-default mt30" value="Filter">
								</div>
							</div>
						</div>
					</aside>
				</div> <!-- end .page-sidebar -->

				<div class="col-sm-8 page-content">
					<div id="jobs-page-map" class="white-container"></div>

					<div class="title-lines">
						<h3 class="mt0">Available Jobs</h3>
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
					@if(count($act) > 0)
					@foreach ($act as $index => $c )
					<div class="jobs-item with-thumb">
						<div class="thumb"><img src="http://localhost/fob/storage/app/{{$c->image}}" alt=""></div>
						<div class="clearfix visible-xs"></div>
						<!-- <div class="date">27 <span>Jun</span></div> -->
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
							{{ $act->links() }}
													</ul>
					</div>
						@endif
				</div>

		</div>
		
	</div> 
</div>
@endsection

@section('script')
	
@endsection

