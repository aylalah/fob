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
					<div id="contact-page-map" class="white-container"></div>

					<div class="white-container mb0">
						<div class="row">
							<div class="col-sm-6">
								<h5 class="bottom-line mt10">Headquarters</h5>

								<address>
									121 King Street, Melbourne <br>
									Victoria 3000 Australia <br>
									Envato Pty Ltd
								</address>

								<p>
									Phone: <a href="tel:+11234567890">+1 123-456-7890</a> <br>
									Email: <a href="mailto:email@example.com">email@example.com</a>
								</p>
							</div>

							<div class="col-sm-6">
								<h5 class="bottom-line mt10">Secondary Office</h5>

								<address>
									47 Queen Street, Melbourne <br>
									Victoria 3000 Australia <br>
									Envato Pty Ltd
								</address>

								<p>
									Phone: <a href="tel:+11234567890">+1 123-456-7890</a> <br>
									Email: <a href="mailto:email@example.com">email@example.com</a>
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container contact-form-widget">
							<h5 class="widget-title">Send Us a Message</h5>

							<div class="widget-content">
								<p>Consectetur adipisicing elit. Incidunt odio in sed velit quod. Unde dolores minima quisquam libero veritatis consequuntur accusamus nemo.</p>

								<form class="mt30">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name">
									</div>

									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>

									<div class="form-group">
										<input type="text" class="form-control" placeholder="Website">
									</div>

									<div class="form-group">
										<textarea class="form-control" rows="5" placeholder="How can we help you?"></textarea>
									</div>

									<button type="submit" class="btn btn-default"><i class="fa fa-envelope-o"></i> Send Message</button>
								</form>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->
@endsection

@section('script')
	
@endsection