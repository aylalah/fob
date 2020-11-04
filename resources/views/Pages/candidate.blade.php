@extends('layouts.master')

<!-- @section('css')
@endsection -->

@section('breadcrumb')
     
							
@endsection

@section('content')
              
<div id="page-content">
		
		<div class="container">
			<div class="row">

				<div class="col-sm-12 page-content">
					<div class="white-container candidates-search">
						<div class="row">
						<form method="POST" action="{{ url('search-candidate') }}" enctype="multipart/form-data">
								@csrf
							<div class="col-sm-6">
								<input type="text" class="form-control" name="search" placeholder="Search for Talent name or Skill">
							</div>

							<div class="col-sm-2">
								<input type="submit" class="btn btn-default btn-block" value="Search">
							</div>
						</form>
						</div>
					</div>

					<div class="title-lines">
						<h3 class="mt0">Available Candidates</h3>
					</div>

					<div class="clearfix mb30">
					<select class="form-control pull-left" onchange="location = this.options[this.selectedIndex].value;">
							<option value="">Sort By</option>
									@foreach ($talentCat as $gCat)                                                  
									            
								
							<option   value="{{ url('candidate-category') }}/{{$gCat->id}}" >{{$gCat->talentcategory_name}}</option>
							@endforeach
						</select>

						<!-- <ul class="pagination pull-right">
							
							
							<li>{{ $cand->links() }}</li>
							
						</ul> -->
					</div>
					@if(count($cand) > 0)
@foreach ($cand as $c) 
       <?php 
       $like=\App\Like::where('user_id','=',Auth::id())->where('talent_id','=',$c->id)->select(DB::raw('count(*) as like_count, status'))->groupBy('status')->first();
        $countf=\App\favourite::where('user_id','=',Auth::id())->where('f_user_id','=',$c->user_id)->select(DB::raw('count(*) as count, status'))->groupBy('status')->first();
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
					<div class="candidates-item">
						<div class="thumb"><img src="http://localhost/fob/public/upload/{{ $c->image }}" alt=""></div>

						<h6 class="title"><a href="#">{{$c->name}}</a></h6>
						<span class="meta">{{$c->age}} Years Old - {{$c->address_1}}</span>

						<ul class="top-btns">
							<li><a href="#" class="btn btn-gray fa fa-plus toggle"></a></li>
							@if($status == '1') 
							<li><a id="fav1_{{$c->user_id}}" class="btn btn-gray fa fa-star fav fav1_{{$c->user_id}}"></a></li>
							@endif
							@if($status == '2') 	
							<li><a id="fav2_{{$c->user_id}}" class="btn btn-default fa fa-star fav fav2_{{$c->user_id}}"></a></li>
								@endif
							<!-- <li><a href="#" href="{{ url('/add-like') }}/{{$c->id}}" class="btn btn-gray fa fa-star"></a></li> -->
							<!-- @if($type == '0') 
							<li ><a id="like0_{{$c->id}}" class="btn btn-gray fa fa-thumbs-up like like0_{{$c->id}}">{{$c->count_like}}</a></li>
							@endif -->
							@if($type == '1') 
							<li><a id="like1_{{$c->id}}" class="btn btn-gray fa fa-thumbs-up like like1_{{$c->id}}">{{$c->count_like}}</a></li>
							@endif
							@if($type == '2') 	
							<li><a id="like2_{{$c->id}}" class="btn btn-default fa fa-thumbs-up like like2_{{$c->id}}">{{$c->count_like}}</a></li>
								@endif

								<!-- <p id="pp">dshhjsd</p> -->
						</ul>

						<p class="description">{{$c->about}}. <a href="#" class="read-more">Read More</a></p>

						<div class="clearfix"></div>

						<div class="content">
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, nihil, dolores, culpa ullam vero ipsum placeat accusamus nemo ipsa cupiditate id molestiae consectetur quae pariatur repudiandae vel ex quaerat nam iusto aliquid laborum quia adipisci aut ut impedit obcaecati nisi deleniti tempore maxime sequi fugit reiciendis libero quo. Rerum, assumenda.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, at nemo inventore temporibus corporis suscipit.</p>
 -->
						<ul class="list-unstyled">
								<li><strong>Experience:</strong> {{$c->experience}}</li>
								<li><strong>Degree:</strong> {{$c->degree}}</li>
								<li><strong>Career Level:</strong> {{$c->talent_level}}</li>
							</ul>

							<h5>Skills</h5>

							<div class="progress-bar toggle" data-progress="{{$c->rate_1}}">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">{{$c->skill_1}}</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									{{$c->reason_1}}
								</div>
							</div>

						@if($c->skill_2 != null) 
							<div class="progress-bar toggle" data-progress="{{$c->rate_2}}">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">{{$c->skill_2}}</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									{{$c->reason_2}}
								</div>
							</div>
							 @endif
							@if($c->skill_3 != null) 
							<div class="progress-bar toggle" data-progress="{{$c->rate_3}}">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">{{$c->skill_3}}</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									{{$c->reason_3}}
								</div>
							</div>

					 @endif
							<hr>

								<div class="clearfix">
								<a href="mailto:{{$c->email}}" class="btn btn-default pull-left"><i class="fa fa-envelope-o"></i> Contact Me</a>

								<ul class="social-icons pull-right">
									<li><span>Share</span></li>
									<li><a href="{{$c->facebook}}" class="btn btn-gray fa fa-facebook"></a></li>
							<li><a href="{{$c->twitter}}" class="btn btn-gray fa fa-twitter"></a></li>
							<li><a href="{{$c->instagram}}" class="btn btn-gray fa fa-instagram"></a></li>
							
								</ul>
							</div>
						</div>
					</div>
@endforeach
					
					<div class="clearfix">
						<ul class="pagination pull-right">
													{{ $cand->links() }}
							
							
						</ul>
					</div>
					@endif
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
		
	</div> <!-- end #page-content -->

@endsection

@section('script')
	
@endsection

