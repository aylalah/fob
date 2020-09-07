	<header id="header" class="header-style-1">
		<div class="header-top-bar">
			<div class="container">

				<!-- Header Language -->
				<div class="header-language clearfix">
					<ul>
						<li class="active"><a href="#">En</a></li>
						<li><a href="#">Fr</a></li>
						<li><a href="#">De</a></li>
						<li><a href="#">It</a></li>
					</ul>
				</div> <!-- end .header-language -->

				<!-- Bookmarks -->	

			
			<div class="top-right links">

			
			@if (Route::has('login'))
			@auth
					<a class="btn btn-link bookmarks" href="{{ route('logout') }}"
						onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
					</a>

					<a id="navbarDropdown"  class="btn btn-link bookmarks" href="{{ url('/home') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>


					<a href="{{ url('/home') }}" class="btn btn-link bookmarks">Profile</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
			
					
				@else

				<!-- <a href="{{ url('/register-invest') }}" class="btn btn-link bookmarks">Sponsor</a> -->

					@if (Route::has('register'))
						<!-- <a href="{{ route('register') }}">Register</a> -->

						<!-- Header Register -->
						<div class="header-register">
							<a href="#" class="btn btn-link">Register</a>
							<div>
							<form method="POST" action="{{ route('register') }}">
								@csrf
								<select  id="country" class="form-control @error('user_category_id') is-invalid @enderror" name="user_category_id" value="{{ old('user_category_id') }}" required autocomplete="user_category_id">
											<option value="">Select Role</option>
											<option value="2">Talent</option>
											<option value="3">Member</option>
											<option value="4">Sponsor</option>
										</select>
										@error('user_category_id')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Username" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
								<!-- <input name="user_category_id" type="hidden" value="2"> -->
									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror

								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
	
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror

									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password " required autocomplete="new-password">
									
									<button type="submit" class="btn btn-default">
										{{ __('Register') }}
									</button>
								</form>
							</div>
						</div> <!-- end .header-register -->

					@endif

							<!-- Header Login -->
				<div class="header-login">
					<a href="#" class="btn btn-link">Login</a>
					<div>
					<form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <!-- <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label> -->

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                    
                                <button type="submit" class="btn btn-default">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                           
                    </form>
					</div>
				</div> <!-- end .header-login -->					
				@endauth
				@endif  
			
			</div>
		          		
<?php 
$talentCat = \App\TalentCategory::get();
?>		

			</div> <!-- end .container -->
		</div> <!-- end .header-top-bar -->

		<div class="header-nav-bar">
			<div class="container">

				<!-- Logo -->
				<div class="css-table logo">
					<div class="css-table-cell">
						<a  href="{{url('/')}}">
							<img  src="{{ asset('img/logo7.png') }}" alt="Logo">
						</a> <!-- end .logo -->
					</div>
				</div>

				<!-- Mobile Menu Toggle -->
				<a href="#" id="mobile-menu-toggle"><span></span></a>

				<!-- Primary Nav -->
				<nav>
					<ul class="primary-nav">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li class="has-submenu">
							<a href="{{ url('talents/') }}">Talents</a>
							<ul>
								@foreach ($talentCat as $gCat)                                                  
									            
								<li><a href="{{ url('candidate-category') }}/{{$gCat->id}}">{{$gCat->talentcategory_name}} </a></li>
							
							@endforeach
								
								<!-- <li><a href="{{ url('/talents') }}">More</a></li> -->
							</ul>
						</li>
						<li><a href="{{ url('activity/') }}">Activities</a></li>
						<li><a href="{{ url('candidate/') }}">Candidates</a></li>
						<li><a href="{{ url('partners/') }}">Investors</a></li>				
						<li class="has-submenu">
							<a href="{{ url('about/') }}">About Us</a>
							<ul>
								<li><a href="{{ url('partners/') }}">Partners</a></li>								
							</ul>
						</li>
						<li><a href="{{ url('contact/') }}">Contact Us</a></li>					
					</ul>
				</nav>
			</div> <!-- end .container -->

			<div id="mobile-menu-container" class="container">
				<div class="login-register"></div>
				<div class="menu"></div>
			</div>
		</div> <!-- end .header-nav-bar -->

		@yield('breadcrumb')
		
	</header> <!-- end #header -->
    