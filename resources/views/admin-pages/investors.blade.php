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
                            <h4>Investors List</h4>
                            <!-- <div class="add-product">
                                <a href="#">Add Library</a>
                            </div>                   -->
                        </div>
                    </div>                    
                </div>
            </div>
        </div>

        <div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                @foreach ($sponsor as $c )  
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std res-mg-b-30">
                            <div class="student-img">
                                <img src="http://{{$app_url->app_url}}/upload/{{$c->image}}" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>{{$c->name}}</h2>
                                <p class="dp"><b>Company's Name: </b>{{$c->company_industry_category}}</p>
                                <p class="dp-ag"><b>Company's Profile: </b>{{$c->company_profile}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std res-mg-b-30">
                            <div class="student-img">
                                <img  src="{{ asset('admin-asset/img/student/2.jpg') }}" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std res-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="student-img">
                                <img  src="{{ asset('admin-asset/img/student/3.jpg') }}" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="student-img">
                                <img  src="{{ asset('admin-asset/img/student/4.jpg') }}" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std mg-t-30">
                            <div class="student-img">
                                <img  src="{{ asset('admin-asset/img/student/1.jpg') }}" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std mg-t-30">
                            <div class="student-img">
                                <img  src="{{ asset('admin-asset/img/student/2.jpg') }}" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std mg-t-30">
                            <div class="student-img">
                                <img  src="{{ asset('admin-asset/img/student/3.jpg') }}" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std mg-t-30">
                            <div class="student-img">
                                <img  src="{{ asset('admin-asset/img/student/4.jpg') }}" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
@endsection

@section('script')
	
@endsection