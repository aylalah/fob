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

<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container candidates-single-widget">
							<div class="widget-content">
								<div class="thumb">
									<img src="img/content/face-6.png" alt="">
								</div>

								<h5 class="bottom-line">Candidate Details</h5>

								<table>
									<tbody>
										<tr>
											<td>Name</td>
											<td>Abu Antar</td>
										</tr>

										<tr>
											<td>Age</td>
											<td>38 Years Old</td>
										</tr>

										<tr>
											<td>Location</td>
											<td>Jordan Amman</td>
										</tr>

										<tr>
											<td>Experiance</td>
											<td>15 Years</td>
										</tr>

										<tr>
											<td>Dgree</td>
											<td>MBA</td>
										</tr>

										<tr>
											<td>Career Lavel</td>
											<td>Mid-Level</td>
										</tr>

										<tr>
											<td>Phone</td>
											<td>(800) 123-4567</td>
										</tr>

										<tr>
											<td>Fax</td>
											<td>(800) 123-4568</td>
										</tr>

										<tr>
											<td>E-mail</td>
											<td><a href="mailto:example@example.com">example@example.com</a></td>
										</tr>

										<tr>
											<td>Website</td>
											<td><a href="#">example.com</a></td>
										</tr>
									</tbody>
								</table>

								<h5 class="bottom-line">Professional Rating</h5>

								<table>
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
								</table>
							</div>
						</div>
					</aside>
				</div> <!-- end .page-sidebar -->

				<div class="col-sm-8 page-content">
					<div class="clearfix mb30 hidden-xs">
						<a href="#" class="btn btn-gray pull-left">Back to Listings</a>
						<div class="pull-right">
							<a href="#" class="btn btn-gray">Previous</a>
							<a href="#" class="btn btn-gray">Next</a>
						</div>
					</div>

					<div class="candidates-item candidates-single-item">
						<h6 class="title"><a href="#">John Doe</a></h6>
						<span class="meta">24 Years Old - Sydney, AU</span>

						<ul class="top-btns">
							<li><a href="#" class="btn btn-gray fa fa-star"></a></li>
						</ul>

						<ul class="social-icons clearfix">
							<li><a href="#" class="btn btn-gray fa fa-facebook"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-twitter"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-google-plus"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-dribbble"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-pinterest"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-linkedin"></a></li>
						</ul>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum accusantium deleniti neque architecto vitae.</p>

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

					<div class="title-lines">
						<h3 class="mt0">Similar Candidates</h3>
					</div>

					<div class="candidates-item">
						<div class="thumb"><img src="img/content/face-0.png" alt=""></div>

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
						<div class="thumb"><img src="img/content/face-2.png" alt=""></div>

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
				</div> <!-- end .page-content -->
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->
@endsection
