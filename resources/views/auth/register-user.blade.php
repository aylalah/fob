@extends('layouts.app')

@section('content')


<section class="page_breadcrumbs ds parallax section_padding_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Talents Registration</h2>
                <ol class="breadcrumb greylinks">
                    <li>
                        <a href="index.html">
                Home
            </a>
                    </li>
                    <li>
                        <a href="shop-register.html#">Login</a>
                    </li>
                    <li class="active">Registration</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section class="ds section_padding_top_100 section_padding_bottom_100">
    <div class="container">

        <div class="row">

            <form method="POST" action="{{ url('register-user') }}" enctype="multipart/form-data">

                <div class="col-sm-6">
                    <div class="form-group validate-required" id="billing_first_name_field">
                        <label for="billing_first_name" class="control-label">
                            <span class="grey">First Name:</span>
                            <span class="required">*</span>
                        </label>
                        <input id="billing_first_name" type="text"  placeholder="name" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name">
                    </div>

                    <div class="form-group" id="billing_company_field">
                        <label for="billing_company" class="control-label">
                            <span class="grey">Brand Name:</span>
                        </label>
                        <input type="text" class="form-control " name="billing_company" id="billing_company" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username" value="" required autocomplete="username">
                    </div>


                </div>

                <div class="col-sm-6">
                    <div class="form-group validate-required" id="billing_last_name_field">
                        <label for="billing_last_name" class="control-label">
                            <span class="grey">Last Name:</span>
                            <span class="required">*</span>
                        </label>

                        <input type="text" class="form-control " name="billing_company" id="billing_company" placeholder="Last name" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="" required autocomplete="lastname">

                    </div>

                    <div class="form-group validate-required validate-email" id="billing_email_field">
                        <label for="billing_email" class="control-label">
                            <span class="grey">Email Address:</span>
                            <span class="required">*</span>
                        </label>

                        <input type="text"  class="form-control @error('email') is-invalid @enderror" name="billing_email" id="billing_email" placeholder="" name="email" value="" required autocomplete="email">

                    </div>

                </div>

                <div class="col-sm-12">
                    <div class="form-group address-field validate-required" id="billing_address_fields">
                        <label for="billing_address_1" class="control-label">
                            <span class="grey">Address:</span>
                            <span class="required">*</span>
                        </label>

                        <input type="text" class="form-control " name="billing_address_1" id="billing_address_1" placeholder="" value="">

                    </div>

                </div>

                <div class="col-sm-6">

                    <div class="form-group address-field validate-required" id="billing_city_field">
                        <label for="billing_city" class="control-label">
                            <span class="grey">Town / City:</span>
                            <span class="required">*</span>
                        </label>

                        <input type="text" class="form-control " name="billing_city" id="billing_city" placeholder="" value="">

                    </div>

                    <div class="form-group address-field validate-required validate-postcode" id="billing_postcode_field">
                        <label for="billing_postcode" class="control-label">
                            <span class="grey">Postcode:</span>
                            <span class="required">*</span>
                        </label>

                        <input type="text" class="form-control " name="billing_postcode" id="billing_postcode" placeholder="" value="">

                    </div>

                    <div class="form-group validate-required validate-phone" id="billing_phone_field">
                        <label for="billing_phone" class="control-label">
                            <span class="grey">Phone:</span>
                            <span class="required">*</span>
                        </label>

                        <input type="text" class="form-control " name="billing_phone" id="billing_phone" placeholder="" value="">

                    </div>


                    <div class="form-group" id="billing_password_field">
                        <label for="billing_password" class="control-label">
                            <span class="grey">Password:</span>
                            <span class="required">*</span>
                        </label>

                        <input type="text" class="form-control " name="billing_password" id="billing_password" placeholder="" value="">

                    </div>


                    <div class="form-group">

                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios"> Ship to this address
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios"> Ship to different address
                            </label>
                        </div>

                    </div>

                </div>

                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="billing_state" class="control-label">
                            <span class="grey">State/Province:</span>
                            <span class="required">*</span>
                        </label>

                        <select class="form-control" name="billing_state" id="billing_state">
                            <option value="">Select a country…</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB" selected="selected">United Kingdom (UK)</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="billing_country" class="control-label">
                            <span class="grey">Country:</span>
                            <span class="required">*</span>
                        </label>

                        <select class="form-control" name="billing_country" id="billing_country">
                            <option value="">Select a country…</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB" selected="selected">United Kingdom (UK)</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                    </div>

                    <div class="form-group validate-required validate-fax" id="billing_fax_field">
                        <label for="billing_fax" class="control-label">
                            <span class="grey">Fax:</span>
                            <span class="required">*</span>
                        </label>

                        <input type="text" class="form-control " name="billing_fax" id="billing_fax" placeholder="" value="">

                    </div>


                    <div class="form-group" id="billing_password2_field">
                        <label for="billing_password2" class="control-label">
                            <span class="grey">Confirm Password:</span>
                            <span class="required">*</span>
                        </label>

                        <input type="text" class="form-control " name="billing_password2" id="billing_password2" placeholder="" value="">

                    </div>


                </div>

                <div class="col-sm-12">

                    <button type="submit" class="theme_button wide_button color1 topmargin_40">Register Now</button>
                    <button type="reset" class="theme_button wide_button">Clear Form</button>

                </div>

            </form>


        </div>
    </div>
</section>





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

					<form method="POST" action="{{ url('register-user') }}" enctype="multipart/form-data">
						@csrf
						<h2>1. Fill in your Personal profile</h2>

						<section>
								<h6 class="bottom-line">Personal Info:</h6>

								<h6 class="label">Name</h6>

								<div class="row">
									<div class="col-sm-4">
										<!-- <input type="text" class="form-control" placeholder="Name"> -->
										<!-- <input id="name" type="text"  placeholder="name" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" disabled> -->
										<input id="name" type="text"  placeholder="name" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name">

									</div>
								</div>
								<h6 class="label">Email</h6>
								<div class="row">
									<div class="col-sm-4">
										<!-- <input type="text" class="form-control" placeholder="Surname"> -->
										<!-- <input id="email" type="email"  placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" disabled> -->
										<input id="email" type="email"  placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email">
									</div>
								</div>
								<h6 class="label">Password</h6>
								<div class="row">
									<div class="col-sm-4">
										<!-- <input type="text" class="form-control" placeholder="Surname"> -->
										<!-- <input id="email" type="email"  placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" disabled> -->
										<input id="password" type="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" value="" required autocomplete="password">
									</div>
								</div>
								<h6 class="label">Confirm Password</h6>
								<div class="row">
									<div class="col-sm-4">
										<!-- <input type="text" class="form-control" placeholder="Surname"> -->
										<!-- <input id="email" type="email"  placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" disabled> -->
										<input id="c-password" type="password"  placeholder="Confirm Password" class="form-control @error('password') is-invalid @enderror" name="c-password" value="" required autocomplete="password">
									</div>
								</div>
								<h6 class="label">Phone</h6>
								<div class="row">
									<div class="col-sm-4">

										<!-- <input id="contact" type="number" placeholder="Mobile" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus> -->
										<input id="contact" type="number" placeholder="Mobile" class="form-control @error('contact') is-invalid @enderror" name="contact" value="" required autocomplete="contact" autofocus>

										@error('contact')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<div class="col-sm-4">
									<!-- <input id="contact2" type="number" placeholder="Mobile 2" class="form-control @error('contact2') is-invalid @enderror" name="contact2" value="{{ old('contact2') }}" autocomplete="contact2"> -->
									<input id="contact2" type="number" placeholder="Mobile 2" class="form-control @error('contact2') is-invalid @enderror" name="contact2" value="" autocomplete="contact2">

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
										<input type="hidden" class="form-control" value="2" name="user_category_id">

										<!-- <input id="address_1" type="text" placeholder="Address 1" class="form-control @error('address_1') is-invalid @enderror" name="address_1" value="{{ old('address_1') }}" required autocomplete="address_1"> -->
										<input id="address_1" type="text" placeholder="Address 1" class="form-control @error('address_1') is-invalid @enderror" name="address_1" value="" required autocomplete="address_1">

										@error('address_1')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror

									</div>

									<div class="col-sm-6">
										<!-- <input type="text" class="form-control" placeholder="Address 2"> -->

										<!-- <input id="address_2" type="text" placeholder="Address 2" class="form-control @error('address_2') is-invalid @enderror" name="address_2" value="{{ old('address_2') }}" autocomplete="address_2"> -->
										<input id="address_2" type="text" placeholder="Address 2" class="form-control @error('address_2') is-invalid @enderror" name="address_2" value="" autocomplete="address_2">

										@error('address_2')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>

								<div class="row">
									<div class="col-sm-3">
										<!-- <select  id="country" class="form-control @error('address_2') is-invalid @enderror" name="address_2" value="{{ old('address_2') }}" required autocomplete="address_2"> -->
										<select  id="country" class="form-control @error('address_2') is-invalid @enderror" name="address_2" value="" required autocomplete="address_2">
											<option value="">Country</option>
											<option value="">Nigeria</option>
											<option value="">South Africa</option>
											<option value="">Gana</option>
											<option value="">United State</option>
											<option value="">United Kingdom</option>
										</select>
									</div>

									<div class="col-sm-3">
									<!-- <input id="state" type="text" placeholder="State" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" autocomplete="state"> -->
									<input id="state" type="text" placeholder="State" class="form-control @error('state') is-invalid @enderror" name="state" value="" autocomplete="state">

										@error('state')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<div class="col-sm-3">
									<!-- <input id="city" type="text" placeholder="city" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" autocomplete="state"> -->
									<input id="city" type="text" placeholder="city" class="form-control @error('city') is-invalid @enderror" name="city" value="" autocomplete="state">

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

							<h2>2. Upload</h2>

							<section>
								<h6 class="label">Upload profile</h6>
								<div class="row">
									<div class="col-sm-4">
<input type="file" class="form-control" name="file">
									</div>
								</div>
							</section>

							<hr class="mt60">

							<h2>3. Choose Talent Category</h2>

							<section>
								<h6 class="bottom-line">You are:</h6>

								@foreach ($getCat as $gCat)
									<div class="radio-inline">
										<label><input type="radio" id="{{$gCat->id}}" name="talent_category_id" value="{{$gCat->id}}" required >{{$gCat->talentcategory_name}} </label>
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
										<textarea id="about" type="text"  placeholder="About" class="form-control @error('about') is-invalid @enderror" name="about" autocomplete="about" required></textarea>

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

								<h6 class="label">Date of Birth</h6>

								<div class="row">
									<div class="col-sm-4">
										<input type="text" class="form-control" placeholder="MM/DD/YYYY" name="date_of_birth">
									</div>
									<div class="col-sm-4">



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

										<input id="experience" type="text" placeholder="Experience" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ old('experience') }}" autocomplete="experience" required>

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

										<input id="talent_level" type="text" placeholder="Talent Level" class="form-control @error('talent_level') is-invalid @enderror" name="talent_level" value="{{ old('talent_level') }}" autocomplete="talent_level" required>

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

										<input id="degree" type="text" placeholder="Degree" class="form-control @error('degree') is-invalid @enderror" name="degree" value="{{ old('degree') }}" autocomplete="degree" required>

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

										<input id="skill_1" type="text" placeholder="Enter a Skill Pertaining to your talent here" class="form-control @error('skill_1') is-invalid @enderror" name="skill_1" value="{{ old('skill_1') }}" autocomplete="skill_1" required>

									</div>

									<div class="col-sm-4">

										<input id="rate_1" type="number" placeholder="Rate your Skill Mentioned" class="form-control @error('rate_1') is-invalid @enderror" name="rate_1" value="{{ old('rate_1') }}" autocomplete="rate_1" required>

									</div>

									<div class="col-sm-4">

										<input id="about_1" type="text" placeholder="Give Reason For your rating" class="form-control @error('about_1') is-invalid @enderror" name="reason_1" value="{{ old('about_1') }}" autocomplete="about_1" required>

									</div>
								</div>

								<h6 class="label">Skill Rate 2</h6>

								<div class="row">

									<div class="col-sm-4">

										<input id="skill_2" type="text" placeholder="Enter a Skill Pertaining to your talent here" class="form-control @error('skill_2') is-invalid @enderror" name="skill_2" value="{{ old('skill_2') }}" autocomplete="skill_2">

									</div>

									<div class="col-sm-4">

										<input id="rate_2" type="number" placeholder="Rate your Skill Mentioned" class="form-control @error('rate_2') is-invalid @enderror" name="rate_2" value="{{ old('rate_2') }}" autocomplete="rate_2">

									</div>

									<div class="col-sm-4">

										<input id="about_2" type="text" placeholder="Give Reason For your rating" class="form-control @error('about_2') is-invalid @enderror" name="reason_2" value="{{ old('about_2') }}" autocomplete="about_2">

									</div>
								</div>

								<h6 class="label">Skill Rate 3</h6>

								<div class="row">

									<div class="col-sm-4">

										<input id="skill_3" type="text" placeholder="Enter a Skill Pertaining to your talent here" class="form-control @error('skill_3') is-invalid @enderror" name="skill_3" value="{{ old('skill_3') }}" autocomplete="skill_3">

									</div>

									<div class="col-sm-4">

										<input id="rate_3" type="number" placeholder="Rate your Skill Mentioned" class="form-control @error('rate_3') is-invalid @enderror" name="rate_3" value="{{ old('rate_3') }}" autocomplete="rate_3">

									</div>

									<div class="col-sm-4">

										<input id="about_3" type="text" placeholder="Give Reason For your rating" class="form-control @error('about_3') is-invalid @enderror" name="reason_3" value="{{ old('about_3') }}" autocomplete="about_3">

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
