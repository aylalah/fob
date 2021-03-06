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
							<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Location">
							</div>

							<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Industry / Role">
							</div>

							<div class="col-sm-2">
								<input type="submit" class="btn btn-default btn-block" value="Search">
							</div>
						</div>
					</div>

					<div class="title-lines">
						<h3 class="mt0">Available Candidates</h3>
					</div>

					<div class="clearfix mb30">
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

					<div class="candidates-item">
						<div class="thumb"><img src="img/content/face-0.png" alt=""></div>

						<h6 class="title"><a href="{{ url('/candidate-d') }}">John Doe</a></h6>
						<span class="meta">24 Years Old - Sydney, AU</span>

						<ul class="top-btns">
							<li><a href="#" class="btn btn-gray fa fa-plus toggle"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-star"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-link"></a></li>
						</ul>

						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum accusantium deleniti neque architecto vitae. <a href="#" class="read-more">Read More</a></p>

						<div class="clearfix"></div>

						<div class="content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, nihil, dolores, culpa ullam vero ipsum placeat accusamus nemo ipsa cupiditate id molestiae consectetur quae pariatur repudiandae vel ex quaerat nam iusto aliquid laborum quia adipisci aut ut impedit obcaecati nisi deleniti tempore maxime sequi fugit reiciendis libero quo. Rerum, assumenda.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, at nemo inventore temporibus corporis suscipit.</p>

							<ul class="list-unstyled">
								<li><strong>Experience:</strong> 5 Years</li>
								<li><strong>Degree:</strong> MBA</li>
								<li><strong>Career Level:</strong> Mid Career</li>
							</ul>

							<h5>Skills</h5>

							<div class="progress-bar toggle" data-progress="60">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">Web Design</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, asperiores.
								</div>
							</div>

							<div class="progress-bar toggle" data-progress="60">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">Development</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, asperiores.
								</div>
							</div>

							<div class="progress-bar toggle" data-progress="60">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">UI/UX</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, asperiores.
								</div>
							</div>

							<hr>

							<div class="clearfix">
								<a href="#" class="btn btn-default pull-left"><i class="fa fa-envelope-o"></i> Contact Me</a>

								<ul class="social-icons pull-right">
									<li><span>Share</span></li>
									<li><a href="#" class="btn btn-gray fa fa-facebook"></a></li>
									<li><a href="#" class="btn btn-gray fa fa-twitter"></a></li>
									<li><a href="#" class="btn btn-gray fa fa-google-plus"></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="candidates-item">
						<div class="thumb"><img src="img/content/face-2.png" alt=""></div>

						<h6 class="title"><a href="{{ url('/candidate-d') }}">John Doe</a></h6>
						<span class="meta">24 Years Old - Sydney, AU</span>

						<ul class="top-btns">
							<li><a href="#" class="btn btn-gray fa fa-plus toggle"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-star"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-link"></a></li>
						</ul>

						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum accusantium deleniti neque architecto vitae. <a href="#" class="read-more">Read More</a></p>

						<div class="clearfix"></div>

						<div class="content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, nihil, dolores, culpa ullam vero ipsum placeat accusamus nemo ipsa cupiditate id molestiae consectetur quae pariatur repudiandae vel ex quaerat nam iusto aliquid laborum quia adipisci aut ut impedit obcaecati nisi deleniti tempore maxime sequi fugit reiciendis libero quo. Rerum, assumenda.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, at nemo inventore temporibus corporis suscipit.</p>

							<ul class="list-unstyled">
								<li><strong>Experience:</strong> 5 Years</li>
								<li><strong>Degree:</strong> MBA</li>
								<li><strong>Career Level:</strong> Mid Career</li>
							</ul>

							<h5>Skills</h5>

							<div class="progress-bar toggle" data-progress="60">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">Web Design</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, asperiores.
								</div>
							</div>

							<div class="progress-bar toggle" data-progress="60">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">Development</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, asperiores.
								</div>
							</div>

							<div class="progress-bar toggle" data-progress="60">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">UI/UX</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, asperiores.
								</div>
							</div>

							<hr>

							<div class="clearfix">
								<a href="#" class="btn btn-default pull-left"><i class="fa fa-envelope-o"></i> Contact Me</a>

								<ul class="social-icons pull-right">
									<li><span>Share</span></li>
									<li><a href="#" class="btn btn-gray fa fa-facebook"></a></li>
									<li><a href="#" class="btn btn-gray fa fa-twitter"></a></li>
									<li><a href="#" class="btn btn-gray fa fa-google-plus"></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="candidates-item">
						<div class="thumb"><img src="img/content/face-4.png" alt=""></div>

						<h6 class="title"><a href="{{ url('/candidate-d') }}">John Doe</a></h6>
						<span class="meta">24 Years Old - Sydney, AU</span>

						<ul class="top-btns">
							<li><a href="#" class="btn btn-gray fa fa-plus toggle"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-star"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-link"></a></li>
						</ul>

						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum accusantium deleniti neque architecto vitae. <a href="#" class="read-more">Read More</a></p>

						<div class="clearfix"></div>

						<div class="content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, nihil, dolores, culpa ullam vero ipsum placeat accusamus nemo ipsa cupiditate id molestiae consectetur quae pariatur repudiandae vel ex quaerat nam iusto aliquid laborum quia adipisci aut ut impedit obcaecati nisi deleniti tempore maxime sequi fugit reiciendis libero quo. Rerum, assumenda.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, at nemo inventore temporibus corporis suscipit.</p>

							<ul class="list-unstyled">
								<li><strong>Experience:</strong> 5 Years</li>
								<li><strong>Degree:</strong> MBA</li>
								<li><strong>Career Level:</strong> Mid Career</li>
							</ul>

							<h5>Skills</h5>

							<div class="progress-bar toggle" data-progress="60">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">Web Design</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, asperiores.
								</div>
							</div>

							<div class="progress-bar toggle" data-progress="60">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">Development</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, asperiores.
								</div>
							</div>

							<div class="progress-bar toggle" data-progress="60">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">UI/UX</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, asperiores.
								</div>
							</div>

							<hr>

							<div class="clearfix">
								<a href="#" class="btn btn-default pull-left"><i class="fa fa-envelope-o"></i> Contact Me</a>

								<ul class="social-icons pull-right">
									<li><span>Share</span></li>
									<li><a href="#" class="btn btn-gray fa fa-facebook"></a></li>
									<li><a href="#" class="btn btn-gray fa fa-twitter"></a></li>
									<li><a href="#" class="btn btn-gray fa fa-google-plus"></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="candidates-item">
						<div class="thumb"><img src="img/content/face-6.png" alt=""></div>

						<h6 class="title"><a href="#">John Doe</a></h6>
						<span class="meta">24 Years Old - Sydney, AU</span>

						<ul class="top-btns">
							<li><a href="#" class="btn btn-gray fa fa-plus toggle"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-star"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-link"></a></li>
						</ul>

						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum accusantium deleniti neque architecto vitae. <a href="#" class="read-more">Read More</a></p>

						<div class="clearfix"></div>

						<div class="content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, nihil, dolores, culpa ullam vero ipsum placeat accusamus nemo ipsa cupiditate id molestiae consectetur quae pariatur repudiandae vel ex quaerat nam iusto aliquid laborum quia adipisci aut ut impedit obcaecati nisi deleniti tempore maxime sequi fugit reiciendis libero quo. Rerum, assumenda.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, at nemo inventore temporibus corporis suscipit.</p>

							<ul class="list-unstyled">
								<li><strong>Experience:</strong> 5 Years</li>
								<li><strong>Degree:</strong> MBA</li>
								<li><strong>Career Level:</strong> Mid Career</li>
							</ul>

							<h5>Skills</h5>

							<div class="progress-bar toggle" data-progress="60">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">Web Design</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, asperiores.
								</div>
							</div>

							<div class="progress-bar toggle" data-progress="60">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">Development</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, asperiores.
								</div>
							</div>

							<div class="progress-bar toggle" data-progress="60">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">UI/UX</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, asperiores.
								</div>
							</div>

							<hr>

							<div class="clearfix">
								<a href="#" class="btn btn-default pull-left"><i class="fa fa-envelope-o"></i> Contact Me</a>

								<ul class="social-icons pull-right">
									<li><span>Share</span></li>
									<li><a href="#" class="btn btn-gray fa fa-facebook"></a></li>
									<li><a href="#" class="btn btn-gray fa fa-twitter"></a></li>
									<li><a href="#" class="btn btn-gray fa fa-google-plus"></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="candidates-item">
						<div class="thumb"><img src="img/content/face-8.png" alt=""></div>

						<h6 class="title"><a href="#">John Doe</a></h6>
						<span class="meta">24 Years Old - Sydney, AU</span>

						<ul class="top-btns">
							<li><a href="#" class="btn btn-gray fa fa-plus toggle"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-star"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-link"></a></li>
						</ul>

						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum accusantium deleniti neque architecto vitae. <a href="#" class="read-more">Read More</a></p>

						<div class="clearfix"></div>

						<div class="content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, nihil, dolores, culpa ullam vero ipsum placeat accusamus nemo ipsa cupiditate id molestiae consectetur quae pariatur repudiandae vel ex quaerat nam iusto aliquid laborum quia adipisci aut ut impedit obcaecati nisi deleniti tempore maxime sequi fugit reiciendis libero quo. Rerum, assumenda.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, at nemo inventore temporibus corporis suscipit.</p>

							<ul class="list-unstyled">
								<li><strong>Experience:</strong> 5 Years</li>
								<li><strong>Degree:</strong> MBA</li>
								<li><strong>Career Level:</strong> Mid Career</li>
							</ul>

							<h5>Skills</h5>

							<div class="progress-bar toggle" data-progress="60">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">Web Design</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, asperiores.
								</div>
							</div>

							<div class="progress-bar toggle" data-progress="60">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">Development</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, asperiores.
								</div>
							</div>

							<div class="progress-bar toggle" data-progress="60">
								<a href="#" class="progress-bar-toggle"></a>
								<h6 class="progress-bar-title">UI/UX</h6>
								<div class="progress-bar-inner"><span></span></div>
								<div class="progress-bar-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, asperiores.
								</div>
							</div>

							<hr>

							<div class="clearfix">
								<a href="#" class="btn btn-default pull-left"><i class="fa fa-envelope-o"></i> Contact Me</a>

								<ul class="social-icons pull-right">
									<li><span>Share</span></li>
									<li><a href="#" class="btn btn-gray fa fa-facebook"></a></li>
									<li><a href="#" class="btn btn-gray fa fa-twitter"></a></li>
									<li><a href="#" class="btn btn-gray fa fa-google-plus"></a></li>
								</ul>
							</div>
						</div>
					</div>

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
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->
@endsection

@section('script')
	
@endsection