@extends('layouts.app')

@section('content')
<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 page-content">
					<ul class="form-steps four clearfix">
						<li class="active">Step 1</li>
						<li>Step 2</li>
						<li>Step 3</li>
						<li>Step 4</li>
					</ul>

					<div class="white-container sign-up-form">	<div>

					<form method="POST" action="{{ route('register') }}">
						@csrf
						<h2>1. Fill in your Personal profile</h2>

						<section>
								<h6 class="bottom-line">Personal Info:</h6>

								<h6 class="label">Name</h6>

								<div class="row">
									<div class="col-sm-4">
										<!-- <input type="text" class="form-control" placeholder="Name"> -->
										<input id="name" type="text"  placeholder="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
										@error('name')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<div class="col-sm-4">
										<!-- <input type="text" class="form-control" placeholder="Surname"> -->
										<input id="lastname" type="text"  placeholder="Lastname" class="form-control @error('lastname') is-invalid @enderror" name="name" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
										<input name="user_category_id" type="hidden" value="2">
										@error('lastname')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>		

								<h6 class="label">Email</h6>
								<div class="row">
									<div class="col-sm-4">
										<!-- <input type="text" class="form-control" placeholder="Surname"> -->
										<input id="email" type="email"  placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>

								<h6 class="label">Phone</h6>

								<div class="row">
									<div class="col-sm-4">
										
										<input id="contact" type="text" placeholder="Mobile" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact">

										@error('contact')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<div class="col-sm-4">
									<input id="contact2" type="text" placeholder="Mobile 2" class="form-control @error('contact2') is-invalid @enderror" name="contact2" value="{{ old('contact2') }}" autocomplete="contact2">

										@error('contact2')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<!-- <div class="col-sm-4">
										<input type="text" class="form-control" placeholder="Fax">
									</div> -->
								</div>

								<h6 class="label">Address</h6>

								<div class="row">
									<div class="col-sm-6">
										<!-- <input type="text" class="form-control" placeholder="Address 1"> -->

										<input id="address_1" type="text" placeholder="Address 1" class="form-control @error('address_1') is-invalid @enderror" name="address_1" value="{{ old('address_1') }}" required autocomplete="address_1">

										@error('address_1')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										
									</div>

									<div class="col-sm-6">
										<!-- <input type="text" class="form-control" placeholder="Address 2"> -->

										<input id="address_2" type="text" placeholder="Address 2" class="form-control @error('address_2') is-invalid @enderror" name="address_2" value="{{ old('address_2') }}" autocomplete="address_2">

										@error('address_2')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>

								<div class="row">
									<div class="col-sm-3">
										<select  id="country" class="form-control @error('address_2') is-invalid @enderror" name="address_2" value="{{ old('address_2') }}" required autocomplete="address_2">
											<option value="">Country</option>
											<option value="">Nigeria</option>
											<option value="">South Africa</option>
											<option value="">Gana</option>
											<option value="">United State</option>
											<option value="">United Kingdom</option>
										</select>
									</div>

									<div class="col-sm-3">
									<input id="state" type="text" placeholder="State" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" autocomplete="state">

										@error('state')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<div class="col-sm-3">
									<input id="city" type="text" placeholder="city" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" autocomplete="state">

									@error('city')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
									</div>

									<!-- <div class="col-sm-3">
										<input type="text" class="form-control" placeholder="ZIP Code">
									</div> -->
								</div>
							</section>
								
						<hr class="mt60">							

							<h2>2. Set Password</h2>

							<section>
								<h6 class="bottom-line">Passwords</h6>
								
								<div class="row">
									<div class="col-sm-6">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
									</div>

									<div class="col-sm-6">
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password" required autocomplete="new-password">
									</div>
								</div>
							
							</section>
								
							<hr class="mt60">

							<h2>3. Choose Talent Category</h2>

							<section>
								<h6 class="bottom-line">You are:</h6>

								@foreach ($getCat as $gCat)                                                  
									<div class="radio-inline">
										<label><input type="radio" id="{{$gCat->id}}" name="cat_id" value="{{$gCat->id}}"  >{{$gCat->talentcategory_name}} </label>
									</div>              
								@endforeach
							
							</section>

							<hr class="mt60">	

							<h2>4. Fill in your Talent profile</h2>

						<section>
								<h6 class="bottom-line">Talent Info:</h6>

								<h6 class="label">Disribe your Talent <i style="color:red; font-size:10px">Not more that 150 words</i></h6>
								<div class="row">
									<div class="col-sm-6">
										<!-- <input type="text" class="form-control" placeholder="Surname"> -->
										<textarea id="about" type="text"  placeholder="About" class="form-control @error('about') is-invalid @enderror" name="about" autocomplete="about"></textarea>

										@error('about')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>

								<h6 class="label">Social Handles Links</h6>

								<div class="row">
									<div class="col-sm-4">
										<!-- <input type="text" class="form-control" placeholder="Name"> -->
										<input id="instagram" type="text"  placeholder="Instagram" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') }}" autocomplete="instagram" autofocus>
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

								<h6 class="label">Date of Birth</h6>

								<div class="row">
									<div class="col-sm-12">
										<input type="text" class="month-input" name="MM" placeholder="MM">
										<input type="text" class="day-input" name="DD" placeholder="DD">
										<input type="text" class="year-input" name="YYYY" placeholder="YYYY">

										<input id="age" type="age" class="year-input" placeholder="Age" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" autocomplete="age">
									</div>
								</div>

								<h6 class="label">Gender</h6>
								<div class="row">
									<div class="col-sm-4">
									<div class="radio-inline">
										<label><input type="radio" id="male" name="sex" value="Male"  >Male</label>										
									</div> 
									<div class="radio-inline">										
										<label><input type="radio" id="Female" name="sex" value="Female"  >Female</label>
									</div> 
									</div>
								</div>

								<h6 class="label">Experience</h6>

								<div class="row">
									<div class="col-sm-6">
										
										<input id="experience" type="text" placeholder="Experience" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ old('experience') }}" autocomplete="experience">

										@error('experience')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>

								
								<h6 class="label">Talent Level</h6>

								<div class="row">
									<div class="col-sm-6">
										
										<input id="talent_level" type="text" placeholder="Talent Level" class="form-control @error('talent_level') is-invalid @enderror" name="talent_level" value="{{ old('talent_level') }}" autocomplete="talent_level">

										@error('talent_level')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>

								<h6 class="label">Degree</h6>

								<div class="row">
									<div class="col-sm-6">
										
										<input id="degree" type="text" placeholder="Degree" class="form-control @error('degree') is-invalid @enderror" name="degree" value="{{ old('degree') }}" autocomplete="degree">

										@error('degree')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>

								<h6 class="label">Website</h6>

								<div class="row">
									<div class="col-sm-6">
										
										<input id="website" type="text" placeholder="website" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ old('website') }}" autocomplete="website">

										@error('website')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>

								<h6 class="label">Skill Rate 1</h6>

								<div class="row">
									
									<div class="col-sm-4">										

										<input id="skill_1" type="text" placeholder="Enter a Skill Pertaining to your talent here" class="form-control @error('skill_1') is-invalid @enderror" name="skill_1" value="{{ old('skill_1') }}" autocomplete="skill_1">
																		
									</div>

									<div class="col-sm-4">										

										<input id="rate_1" type="text" placeholder="Rate your Skill Mentioned" class="form-control @error('rate_1') is-invalid @enderror" name="rate_1" value="{{ old('rate_1') }}" autocomplete="rate_1">
																	
									</div>

									<div class="col-sm-4">										

										<input id="about_1" type="text" placeholder="Give Reason For your rating" class="form-control @error('about_1') is-invalid @enderror" name="rate_1" value="{{ old('about_1') }}" autocomplete="about_1">
																
									</div>
								</div>

								<h6 class="label">Skill Rate 2</h6>

								<div class="row">
									
									<div class="col-sm-4">										

										<input id="skill_2" type="text" placeholder="Enter a Skill Pertaining to your talent here" class="form-control @error('skill_2') is-invalid @enderror" name="skill_2" value="{{ old('skill_2') }}" autocomplete="skill_2">
																		
									</div>

									<div class="col-sm-4">										

										<input id="rate_2" type="text" placeholder="Rate your Skill Mentioned" class="form-control @error('rate_2') is-invalid @enderror" name="rate_2" value="{{ old('rate_2') }}" autocomplete="rate_2">
																	
									</div>

									<div class="col-sm-4">										

										<input id="about_2" type="text" placeholder="Give Reason For your rating" class="form-control @error('about_2') is-invalid @enderror" name="rate_2" value="{{ old('about_2') }}" autocomplete="about_2">
																
									</div>
								</div>

								<h6 class="label">Skill Rate 3</h6>

								<div class="row">
									
									<div class="col-sm-4">										

										<input id="skill_3" type="text" placeholder="Enter a Skill Pertaining to your talent here" class="form-control @error('skill_3') is-invalid @enderror" name="skill_2" value="{{ old('skill_3') }}" autocomplete="skill_3">
																		
									</div>

									<div class="col-sm-4">										

										<input id="rate_3" type="text" placeholder="Rate your Skill Mentioned" class="form-control @error('rate_3') is-invalid @enderror" name="rate_3" value="{{ old('rate_3') }}" autocomplete="rate_3">
																	
									</div>

									<div class="col-sm-4">										

										<input id="about_3" type="text" placeholder="Give Reason For your rating" class="form-control @error('about_3') is-invalid @enderror" name="rate_3" value="{{ old('about_3') }}" autocomplete="about_3">
																
									</div>
								</div>
							</section>
								
						<hr class="mt60">						
							
						</div>

						<div class="clearfix">
							<!-- <a href="submit" class="btn btn-default btn-large pull-right">Continue to Step 2</a> -->
							<!-- <button type="submit" id="" onclick="call()" class="btn btn-default btn-large pull-right">Continue to Step 2</button> -->
							<button type="submit" class="btn btn-default btn-large pull-right">Submit</button>
						</div>
					</div>
			</form>
				</div> <!-- end .page-content -->
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

@endsection


@section('script')
	<!-- <script>
	var headno= 1;
		function call(){
			alert(headno+=1)
		}
	</script> -->
	
@endsection
