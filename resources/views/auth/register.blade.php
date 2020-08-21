@extends('layouts.app')

@section('content')
<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 page-content">
					<ul class="form-steps four clearfix">
						<li class="completed">Step 1</li>
						<li class="active">Step 2</li>
						<li>Step 3</li>
						<li>Step 4</li>
					</ul>

					<div class="white-container sign-up-form">
						<div>
								<form method="POST" action="{{ url('register-invest') }}" enctype="multipart/form-data" >
						@csrf
							<h2> Fill in your Information</h2>
<!-- 
							<section>
								<h6 class="bottom-line">You are:</h6>

								<div class="radio-inline">
									<label><input type="radio"> Employee</label>
								</div>

								<div class="radio-inline">
									<label><input type="radio"> Recruiter</label>
								</div>
							</section> -->
						<input name="user_category_id" type="hidden" value="4">
							<section>
								<!-- <h6 class="bottom-line">Personal Info:</h6> -->

								<h6 class="label">Name</h6>

								<div class="row">
									<div class="col-sm-6">
										<input type="text" class="form-control" placeholder="CEO Name" name="ceo_name" required>
									</div>

									<div class="col-sm-6">
										<input type="text" class="form-control" name="company_industry_category" placeholder="Company Name" required>
									</div>
								</div>

								

								<h6 class="label">Company Profile</h6>

								<div class="row">
									<div class="col-sm-12">
										<input type="text" class="form-control" name="company_profile" placeholder="Company Profile">
									</div>

									
								</div>

								<h6 class="label">Social Handles Links</h6>

								<div class="row">
									<div class="col-sm-4">
										<!-- <input type="text" class="form-control" placeholder="Name"> -->
										<input id="instagram" type="text"  placeholder="Instagram" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') }}" autocomplete="instagram" >
										@error('instagram')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<div class="col-sm-4">										
										<input id="twitter" type="text"  placeholder="Twitter" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{ old('twitter') }}" autocomplete="twitter" autofocus>
										<!-- <input name="user_category_id" type="hidden" value="2"> -->
										@error('twitter')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<div class="col-sm-4">									
										<input id="facebook" type="text"  placeholder="Facebook" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') }}"  autocomplete="facebook" autofocus>
										<!-- <input name="user_category_id" type="hidden" value="2"> -->
										@error('facebook')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>


								<div class="row">
									
									<div class="col-sm-12">
										<input type="text" class="form-control" name="website" placeholder="website">
									</div>

									
								</div>
							</section>
<hr class="mt60">							

							<!-- <h2>2. Upload</h2> -->

							<section>
								<h6 class="label">Upload profile</h6>
								<div class="row">
									<div class="col-sm-4">
<input type="file" class="form-control" name="file" required>
									</div>
								</div>
							</section>
							
						</div>

						<hr class="mt60">

						<div class="clearfix">
							<button type="submit" class="btn btn-default btn-large pull-right">Submit</button>
							<!-- <a href="#" class="btn btn-default btn-large pull-right">Submit</a> -->
						</div>
					</form>
					</div>
				</div> <!-- end .page-content -->
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

@endsection
