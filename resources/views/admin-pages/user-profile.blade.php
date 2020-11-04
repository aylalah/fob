@extends('admin-layouts.master')

<!-- @section('css')
@endsection -->

@section('breadcrumb')


							
@endsection

@section('content')
    
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                            <!-- <img src="http://localhost/fob/public/upload/{{ Auth::user()->image }}" alt="" /> -->
                                <img src="{{ asset('upload') }}/{{$getUser->image}}" alt="" />
                            </div>
                            <div class="profile-details-hr">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Name</b><br />{{$getUser->name}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Designation</b><br /> {{$getUser->role}}.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Email ID</b><br /> {{$getUser->email}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Phone</b><br /> {{$getUser->contact}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Address</b><br /> {{$getUser->address_1}}.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Address</b><br /> {{$getUser->city}}.</p>
                                        </div>
                                    </div>
                                </div>

                               
@if(Auth::user()->user_category_id != 1)  
 
 
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="address-hr">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <h3>500</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="address-hr">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <h3>900</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="address-hr">
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <h3>600</h3>
                                        </div>
                                    </div>
                                </div>

                                @endif 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                                <!-- <li ><a href="#description">Activity</a></li>
                                <li><a href="#reviews"> Biography</a></li> -->
                                <li class="active"><a href="#INFORMATION">Update Details</a></li>
                                <li><a href="#password">Change Password</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade  active in" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                            <form method="POST" action="{{ url('update-user') }}" enctype="multipart/form-data">
						                        @csrf
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                    <div class="form-group">
                                                            <input type="text" class="form-control" value=" {{$getUser->role}}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="First Name"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" autocomplete="name">
                                                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                                        </div>
                                                        @error('contact')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $name }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Last Name"  class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ Auth::user()->lastname }}" autocomplete="lastname">
                                                        </div>
                                                        @error('contact')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $lastname }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Address 1"  class="form-control @error('address_1') is-invalid @enderror" name="address_1" value="{{ Auth::user()->address_1 }}" autocomplete="address_1">
                                                        </div>
                                                        <div class="form-group sm-res-mg-15 tbpf-res-mg-15">
                                                            <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ Auth::user()->description }}" autocomplete="description" placeholder="Description">
                                                        </div>
                                                        <div class="form-group">
                                                            <select  class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ Auth::user()->gender }}" autocomplete="gender">
																<option>Select Gender</option>
																<option>Male</option>
																<option>Female</option>
															</select>
                                                        </div>
                                                        @error('contact')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $address }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Address 2"  class="form-control @error('address_2') is-invalid @enderror" name="address_2" value="{{ Auth::user()->address_2 }}" autocomplete="address_2">
                                                        </div>
                                                        @error('contact')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $address_2 }}</strong>
                                                            </span>
                                                        @enderror
                                         
                                                    </div>
                                                    <div class="col-lg-6">                                                      
                                                        <div class="form-group">
                                                            <select class="form-control @error('country') is-invalid @enderror" name="country" value="{{ Auth::user()->country }}" autocomplete="country" placeholder="country.">
																	<option>Select country</option>
																	<option>India</option>
																	<option>Pakistan</option>
																	<option>Amerika</option>
																	<option>China</option>
																	<option>Dubai</option>
																	<option>Nepal</option>
																</select>
                                                        </div>
                                                        <div class="form-group">                                                           
                                                                <input type="text"  class="form-control @error('state') is-invalid @enderror" name="state" value="{{ Auth::user()->state }}" autocomplete="state" placeholder="state.">
                                                        </div>
                                                        <div class="form-group">                                                            
                                                                <input type="text"  class="form-control @error('city') is-invalid @enderror" name="city" value="{{ Auth::user()->city }}" autocomplete="city" placeholder="Select City.">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" autocomplete="email" placeholder="email">
                                                        </div>
                                                        <div class="form-group ">
                                                            <input type="text"  class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ Auth::user()->contact }}" autocomplete="contact" placeholder="Mobile no.">
                                                        </div>
                                                        <div class="form-group ">
                                                            <input type="text"  class="form-control @error('contact2') is-invalid @enderror" name="contact2" value="{{ Auth::user()->contact2 }}" autocomplete="contact" placeholder="Mobile no.">
                                                        </div>
                                                        <div class="form-group ">
                                                            <input name="file" type="file" />                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress mg-t-15">                                              
                                                            <button type="button" data-toggle="modal" data-target="#PrimaryModalalert" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                                                    </div>
                                                </div>
                                                

                                                <div id="PrimaryModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-close-area modal-close-df">
                                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <i class="educate-icon educate-checked modal-check-pro"></i>
                                                                <h2>Awesome!</h2>
                                                                <p>You are about to update your Profile </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a data-dismiss="modal" href="#">Cancel</a>
                                                                <button type="submit" data-toggle="modal" data-target="#PrimaryModalalert" class="btn btn-lg btn-primary waves-effect waves-light">Proceed</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <div class="product-tab-list tab-pane fade" id="password">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                            <form method="POST" action="{{ url('update-password') }}" enctype="multipart/form-data">
						                        @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="text"  class="form-control @error('email') is-invalid @enderror" disabled value="{{ Auth::user()->email }}" required autocomplete="email" placeholder="email">
                                                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Password" id="password1"  onkeyup="password('pass_1')" class="form-control @error('name') is-invalid @enderror" required>
                                                        </div>                                                   
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Confirm Password" id="password2"  class="form-control @error('lastname') is-invalid @enderror" name="password" required>
                                                        </div>                                                                                                
                                                    </div>
                                                  
                                                    <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress mg-t-15">                                              
                                                            <button type="button" data-toggle="modal" data-target="#PasswordModalalert" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                                                    </div>
                                                </div>
                                                

                                                <div id="PasswordModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-close-area modal-close-df">
                                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <i class="educate-icon educate-checked modal-check-pro"></i>
                                                                <h2>Awesome!</h2>
                                                                <p>You are about to update your password </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a data-dismiss="modal" href="#">Cancel</a>
                                                                <button type="submit" data-toggle="modal" data-target="#PrimaryModalalert" class="btn btn-lg btn-primary waves-effect waves-light">Proceed</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('script-bottom')

<script>
 
    function password(pass){
        var pass1= document.getElementById('password').value;
        alert("pass1");
    }
</script>
	
@endsection