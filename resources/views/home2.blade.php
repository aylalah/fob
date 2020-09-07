@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

@if(Auth::user()->user_category_id == 1)  
 
	 @endif

@if(Auth::user()->username !== null)   

<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container candidates-single-widget">
							<div class="widget-content">
								<div class="thumb">
									<img src="http://localhost/fob/public/upload/{{ Auth::user()->image }}" alt="">
								</div>

								<h5 class="bottom-line">{{$user->category_name}} Details</h5>

								<table>
									<tbody>
										<tr>
											<td>Name</td>
											<td>{{ Auth::user()->name }}</td>
										</tr>
								 @if(Auth::user()->age !== null)  
										<tr>
											<td>Age</td>
											<td>{{ Auth::user()->age}}</td>
										</tr>
 								 @endif

  									 @if(Auth::user()->address_1 !== null)  
										<tr>
											<td>Address</td>
											<td>{{ Auth::user()->address_1 }}</td>
										</tr>
										  @endif

										 @if(Auth::user()->address_2 !== null)    
											<tr>
											<td>Address 2</td>
											<td>{{ Auth::user()->address_2 }}</td>
										</tr>
										  @endif

										  @if(Auth::user()->state !== null)   
										<tr>
											<td>State</td>
											<td>{{ Auth::user()->state }}</td>
										</tr>
 									 @endif

  									@if(Auth::user()->country !== null)   
										<tr>
											<td>Country</td>
											<td>{{ Auth::user()->country }}</td>
										</tr>
 									 @endif

										@if(Auth::user()->city !== null)   
										<tr>
											<td>City</td>
											<td>{{Auth::user()->city}}</td>
										</tr>
  										@endif

 										 @if(Auth::user()->contact !== null)   
										<tr>
											<td>Phone</td>
											<td>{{ Auth::user()->contact}}</td>
										</tr>
										  @endif

 							 		@if(Auth::user()->contact2 !== null)    
										<tr>
											<td>Phone 2</td>
											<td>{{ Auth::user()->contact2 }}</td>
										</tr>
										   @endif

										<tr>
											<td>E-mail</td>
											<td><a target="_blank" href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</a></td>
										</tr>
									<!-- @if(Auth::user()->website !== null)   
										<tr>
											<td>Website</td>
											<td><a href="{{Auth::user()->website}}" target="">{{Auth::user()->website}}</a></td>
										</tr>
										  @endif -->
									</tbody>
								</table>
					@if(Auth::user()->user_category_id == 2) 
								<h5 class="bottom-line"></h5>

								<!-- <table>
									<tbody>
										<tr>
											<td>Expertise</td>
											<td>
												<ul class="stars">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</td>
										</tr>

										<tr>
											<td>Knowledge</td>
											<td>
												<ul class="stars">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</td>
										</tr>

										<tr>
											<td>Quality</td>
											<td>
												<ul class="stars">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</td>
										</tr>

										<tr>
											<td>Price</td>
											<td>
												<ul class="stars">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</td>
										</tr>

										<tr>
											<td>Services</td>
											<td>
												<ul class="stars">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</td>
										</tr>
									</tbody>
								</table> -->
								<aside>
						<div class="widget sidebar-widget white-container links-widget">
							<ul>
								<li class="active"><a href="{{ url('/home') }}">Dashboard</a></li>
								<li><a href="{{ url('/favourite') }}">Favourite</a></li>
							</ul>
						</div>
					</aside>

					@endif
					
					<h5 class="bottom-line"></h5>
					@if(Auth::user()->user_category_id == 4)
					<aside>
						<div class="widget sidebar-widget white-container links-widget">
							<ul>
								<li class="active"><a href="{{ url('/home') }}">Dashboard</a></li>
								<li><a href="{{ url('/favourite') }}">Favourite</a></li>
								<li><a href="{{ url('/term-condition') }}">Sponsor</a></li>
							</ul>
						</div>
					</aside>

					@endif
							</div>
						</div>
					</aside>
				</div> <!-- end .page-sidebar -->

				<div class="col-sm-8 page-content">
					<!-- <div class="clearfix mb30 hidden-xs">
						<a href="#" class="btn btn-gray pull-left">Back to Listings</a>
						<div class="pull-right">
							<a href="#" class="btn btn-gray">Previous</a>
							<a href="#" class="btn btn-gray">Next</a>
						</div>
					</div> -->
					<!-- Member or Talent -->
@if(Auth::user()->user_category_id == 2)   
@if($d) 

					<div class="candidates-item candidates-single-item">
						<h6 class="title"><a >{{ Auth::user()->name }}</a></h6>
						<span class="meta">{{$d->age}} Years Old </span>

						<ul class="top-btns">
							<li><a href="#" class="btn btn-gray fa fa-star"></a></li>
						</ul>

						

						<p style="white-space: pre-line;">{{$d->about}}</p>

					<!-- 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, nihil, dolores, culpa ullam vero ipsum placeat accusamus nemo ipsa cupiditate id molestiae consectetur quae pariatur repudiandae vel ex quaerat nam iusto aliquid laborum quia adipisci aut ut impedit obcaecati nisi deleniti tempore maxime sequi fugit reiciendis libero quo. Rerum, assumenda.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, at nemo inventore temporibus corporis suscipit.</p> -->

						<ul class="list-unstyled">
								<li><strong>Experience:</strong> {{$d->experience}}</li>
								<li><strong>Degree:</strong> {{$d->degree}}</li>
								<li><strong>Career Level:</strong> {{$d->talent_level}}</li>
								<li><strong>Website:</strong><a href="{{$d->website}}" target="_blank"> {{$d->website}}</a> </li>
							</ul>

							<h5>Skills</h5>

							<hr>
							<div class="progress-bar toggle" data-progress="{{$d->rate_1}}">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">{{$d->skill_1}}</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									{{$d->reason_1}}
								</div>
							</div>
@if($d->skill_2 != null) 
							<div class="progress-bar toggle" data-progress="{{$d->rate_2}}">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">{{$d->skill_2}}</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									{{$d->reason_2}}
								</div>
							</div>
							 @endif
							@if($d->skill_3 != null) 
							<div class="progress-bar toggle" data-progress="{{$d->rate_3}}">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">{{$d->skill_3}}</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									{{$d->reason_3}}
								</div>
							</div>

					 @endif
						<hr>

						<div class="clearfix">
								<a href="mailto:{{Auth::user()->email}}" class="btn btn-default pull-left"><i class="fa fa-envelope-o"></i> Contact Me</a>

								<ul class="social-icons pull-right">
									<li><span>Share</span></li>
									<li><a href="{{$d->facebook}}" class="btn btn-gray fa fa-facebook" target="_blank"></a></li>
							<li><a href="{{$d->twitter}}" class="btn btn-gray fa fa-twitter" target="_blank"></a></li>
							<li><a href="{{$d->instagram}}" class="btn btn-gray fa fa-instagram" target="_blank"></a></li>
							
								</ul>
							</div>
					</div>
  @endif
 @endif




<!-- Investor -->
@if(Auth::user()->user_category_id == 4) 
@if($invest) 
					<div class="candidates-item candidates-single-item">
						
						<h6 class="title"><a >{{$invest->ceo_name}}</a></h6>
						

						<ul class="top-btns">
							<li><a href="#" class="btn btn-gray fa fa-star"></a></li>
						</ul>

						<ul class="social-icons clearfix">
							<li><a href="{{$invest->facebook}}" class="btn btn-gray fa fa-facebook"  target="_blank"></a></li>
							<li><a href="{{$invest->twitter}}" class="btn btn-gray fa fa-twitter" target="_blank"></a></li>
							<li><a href="{{$invest->instagram}}" class="btn btn-gray fa fa-instagram" target="_blank"></a></li>
							
						</ul>

						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum accusantium deleniti neque architecto vitae.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, nihil, dolores, culpa ullam vero ipsum placeat accusamus nemo ipsa cupiditate id molestiae consectetur quae pariatur repudiandae vel ex quaerat nam iusto aliquid laborum quia adipisci aut ut impedit obcaecati nisi deleniti tempore maxime sequi fugit reiciendis libero quo. Rerum, assumenda.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, at nemo inventore temporibus corporis suscipit.</p>
 -->
						<ul class="list-unstyled">
							<li><strong>Company Name:</strong>{{$invest->company_industry_category}}</li>
							<li><strong>Company Profile:</strong> {{$invest->company_profile}}</li>
							<li><strong>Website:</strong><a href="{{$invest->website}}" target="_blank"> {{$invest->website}}</a> </li>
						</ul>

				
						<hr>

						<!-- <div class="clearfix">
							<a href="#" class="btn btn-default pull-left"><i class="fa fa-envelope-o"></i> Contact Me</a>

							<ul class="social-icons pull-right">
								<li><span>Share</span></li>
								<li><a href="#" class="btn btn-gray fa fa-facebook"></a></li>
								<li><a href="#" class="btn btn-gray fa fa-twitter"></a></li>
								<li><a href="#" class="btn btn-gray fa fa-google-plus"></a></li>
							</ul>
						</div> -->
					</div>
					 @endif	
  @endif
					<div class="title-lines">
						<h3 class="mt0">Similar Candidates</h3>
					</div>
 @foreach ($cat as $d)
     
   {{$d->id}}
   <?php 
       $like=\App\Like::where('user_id','=',Auth::id())->where('talent_id','=',$d->id)->select(DB::raw('count(*) as like_count, status'))->groupBy('status')->first();
        $countf=\App\favourite::where('user_id','=',Auth::id())->where('f_user_id','=',$d->user_id)->select(DB::raw('count(*) as count, status'))->groupBy('status')->first();
        if ($like) {
        $count_status=$like->like_count;
        $type = $like->status;
      // echo $type;
    }else{
    	$type=1;
    	// echo $type;
    }
  
       if ($countf) {
        // $count_status=$l->like_count;
        $status = $countf->status;
      // echo $type;
    }else{
    	$status=1;
    	// echo $type;
    }   
    
?>	
  @if(Auth::user()->id != $d->user_id)  

					<div class="candidates-item">
						<div class="thumb"><img src="http://localhost/fob/public/upload/{{$d->image}}" alt=""></div>

						<h6 class="title"><a href="#">{{$d->name}}</a></h6>
						<span class="meta">{{$d->age}} Years Old 
						<!-- - Sydney, AU -->
					</span>

						<ul class="top-btns">
							<li><a href="#" class="btn btn-gray fa fa-plus toggle"></a></li>
							@if($status == '1') 
							<li><a id="fav1_{{$d->user_id}}" class="btn btn-gray fa fa-star fav fav1_{{$d->user_id}}"></a></li>
							@endif
							@if($status == '2') 	
							<li><a id="fav2_{{$d->user_id}}" class="btn btn-default fa fa-star fav fav2_{{$d->user_id}}"></a></li>
								@endif
							@if($type == '1') 
							<li><a id="like1_{{$d->id}}" class="btn btn-gray fa fa-thumbs-up like like1_{{$d->id}}">{{$d->count_like}}</a></li>
							@endif
							@if($type == '2') 	
							<li><a id="like2_{{$d->id}}" class="btn btn-default fa fa-thumbs-up like like2_{{$d->id}}">{{$d->count_like}}</a></li>
								@endif
							<!-- <li><a href="#" class="btn btn-gray fa fa-star"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-link"></a></li> -->
						</ul>

						<p class="description">{{$d->about}} <a href="#" class="read-more">Read More</a></p>

						<div class="clearfix"></div>

						<div class="content">
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, nihil, dolores, culpa ullam vero ipsum placeat accusamus nemo ipsa cupiditate id molestiae consectetur quae pariatur repudiandae vel ex quaerat nam iusto aliquid laborum quia adipisci aut ut impedit obcaecati nisi deleniti tempore maxime sequi fugit reiciendis libero quo. Rerum, assumenda.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, at nemo inventore temporibus corporis suscipit.</p> -->

							<ul class="list-unstyled">
								<li><strong>Experience:</strong> {{$d->experience}}</li>
								<li><strong>Degree:</strong> {{$d->degree}}</li>
								<li><strong>Career Level:</strong> {{$d->talent_level}}</li>
							</ul>

							<h5>Skills</h5>

							<div class="progress-bar toggle" data-progress="{{$d->rate_1}}">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">{{$d->skill_1}}</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									{{$d->reason_1}}
								</div>
							</div>

						@if($d->skill_2 != null) 
							<div class="progress-bar toggle" data-progress="{{$d->rate_2}}">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">{{$d->skill_2}}</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									{{$d->reason_2}}
								</div>
							</div>
							 @endif
							@if($d->skill_3 != null) 
							<div class="progress-bar toggle" data-progress="{{$d->rate_3}}">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">{{$d->skill_3}}</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									{{$d->reason_3}}
								</div>
							</div>

					 @endif

							<hr>

							<div class="clearfix">
								<a href="mailto:{{$d->email}}" class="btn btn-default pull-left"><i class="fa fa-envelope-o"></i> Contact Me</a>

								<ul class="social-icons pull-right">
									<li><span>Share</span></li>
									<li><a href="{{$d->facebook}}" class="btn btn-gray fa fa-facebook" target="_blank"></a></li>
							<li><a href="{{$d->twitter}}" class="btn btn-gray fa fa-twitter" target="_blank"></a></li>
							<li><a href="{{$d->instagram}}" class="btn btn-gray fa fa-instagram" target="_blank"></a></li>
							
								</ul>
							</div>
						</div>
					</div>
					

   @endif
   
        @endforeach
					
							<hr>

							<!-- <div class="clearfix">
								<a href="#" class="btn btn-default pull-left"><i class="fa fa-envelope-o"></i> Contact Me</a>

								<ul class="social-icons pull-right">
									<li><span>Share</span></li>
									<li><a href="#" class="btn btn-gray fa fa-facebook"></a></li>
									<li><a href="#" class="btn btn-gray fa fa-twitter"></a></li>
									<li><a href="#" class="btn btn-gray fa fa-google-plus"></a></li>
								</ul>
							</div> -->
						</div>
					</div>
				</div> <!-- end .page-content -->
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->
@else
@if(Auth::user()->user_category_id == 2)  
 @include('auth.register-user')
	 @endif

	 @if(Auth::user()->user_category_id == 4) 
@include('auth.register')
	@endif

	@endif 
@endsection
