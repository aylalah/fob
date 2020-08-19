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
					<div class="white-container candidates-search">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<input type="text" class="form-control" placeholder="Location">
							</div>

							<div class="col-sm-4 col-md-5">
								<input type="text" class="form-control" placeholder="Industry / Role">
							</div>

							<div class="col-sm-3 col-md-2">
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
						<div class="thumb"><img src="img/content/face-1.png" alt=""></div>

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
						<div class="thumb"><img src="img/content/face-3.png" alt=""></div>

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
						<div class="thumb"><img src="img/content/face-5.png" alt=""></div>

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
						<div class="thumb"><img src="img/content/face-7.png" alt=""></div>

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
						<div class="thumb"><img src="img/content/face-9.png" alt=""></div>

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
	</div> <!-- end #page-content -->

@endsection

@section('script')
	
@endsection