@extends('admin-layouts.master')

<!-- @section('css')
@endsection -->

@section('breadcrumb')


							
@endsection

@section('content')
    
    <!-- Single pro tab review Start-->
    <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>About Us</h4>
                            <div class="add-product">
                                <!-- <a href="#">Add Library</a> -->
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="edu-accordion-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="tab-content-details mg-b-30">
                             <form  method="POST" action="{{ url('updateaboutus') }}" enctype='multipart/form-data'>
                                                         @csrf
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                 <input name="id" type="hidden" class="form-control" value="{{$abt->id}}">
                                                                <div class="form-group">
                                                                    <input name="heading" type="text" class="form-control" value="{{$abt->heading}}">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <textarea name="content" placeholder="Content">{{$abt->content}}</textarea>
                                                                </div>
                                                                 <div class="form-group">
                                                                    <input name="video" type="text" class="form-control" value="{{$abt->video}}" placeholder="Enter video">
                                                                </div>
                                                              
                                                                <div class="form-group ">
                                                                     <input name="file"  type="file" />
                                                                   
                                                                </div>
                                                            </div>
                                                          
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                           <!--  <h2>Custom Animate accordion Bootstrap</h2>
                            <p>These are the Custom Animate accordion Bootstrap. Using animate bounce, flash, pulse, rubberBand, shake, swing, tada, wobble, jello, bounceIn, bounceInDown, bounceInLeft, bounceInRight, bounceInUp, fadeIn, fadeInDown, fadeInDownBig,
                                fadeInLeft, fadeInLeftBig, fadeInRight, fadeInRightBig, fadeInUp, fadeInUpBig, flipInX, flipInY, lightSpeedIn, rotateIn, rotateInDownLeft, rotateInDownRight, rotateInUpLeft, rotateInUpRight, rollIn, zoomIn, zoomInDown,
                                zoomInLeft, zoomInRight, zoomInUp etc.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">

                <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Teams</h4>
                            <div class="add-product">
                                <a href="add_team">Add Team</a>
                            </div>                  
                        </div>
                    </div>                    
                </div>
            </div>
        </div>

        <div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                      @foreach ($team as $index => $t )  
                  
                  
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std res-mg-b-30">
                            <div class="student-img">
                                <img  src="http://localhost/fob/storage/app/{{$t->image}}" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>{{$t->team_name}}</h2>
                                <p class="dp">{{$t->designation}}</p>
                                <!-- <p class="dp-ag"><b>Role:</b> {{$t->role}}</p> -->
                            </div>
                        </div>
                    </div>
                     @endforeach
                   
                   
                </div>
            </div>
        </div>
                    
                </div>
            </div>
        </div>
@endsection

@section('script')
	
@endsection