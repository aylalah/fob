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
            <div class="col-md-3"></div>
            <div class="col-md-6">

                        <div class="apsc-icons-wrapper clearfix apsc-theme-4">
                            <div class="apsc-each-profile">
                                <a class="apsc-facebook-icon clearfix" href="shortcodes_widgets.html#">
                                    <div class="apsc-inner-block">
                                        <span class="social-icon">
                                            <i class="fa fa-facebook apsc-facebook"></i>
                                            <span class="media-name">Facebook</span>
                                        </span>
                                        <span class="apsc-count">Click here to Register</span>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="apsc-icons-wrapper clearfix apsc-theme-4">
                            <div class="apsc-each-profile">
                                <a class="apsc-google-plus-icon clearfix" href="shortcodes_widgets.html#">
                                    <div class="apsc-inner-block">
                                        <span class="social-icon">
                                            <i class="apsc-googlePlus fa fa-google-plus"></i>
                                            <span class="media-name">google+</span>
                                        </span>
                                        <span class="apsc-count">Click here to Register</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                    <div class="col-sm-12">
                        <div class="form-group validate-required" id="billing_first_name_field">
                            <label for="billing_first_name" class="control-label">
                                <span class="grey">First Name:</span>
                                <span class="required">*</span>
                            </label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="First Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group validate-required" id="billing_last_name_field">
                            <label for="billing_last_name" class="control-label">
                                <span class="grey">Last Name:</span>
                                <span class="required">*</span>
                            </label>

                            <input id="name" type="text" class="form-control @error('lastname') is-invalid @enderror" placeholder="Last Name" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group validate-required validate-email" id="billing_email_field">
                            <label for="billing_email" class="control-label">
                                <span class="grey">Email Address:</span>
                                <span class="required">*</span>
                            </label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <div class="col-sm-12">

                        <button type="submit" class="theme_button wide_button color1 topmargin_40">Register Now</button>
                        <button type="reset" class="theme_button wide_button">Clear Form</button>

                    </div>

                </form>
            </div>
            <div class="col-md-3"></div>

        </div>
    </div>
</section>

@endsection
