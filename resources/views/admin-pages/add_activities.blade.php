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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            @if(!empty($acts))
    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                              <!-- <h4></h4> -->
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                     <form  method="POST" action="{{ url('updateactivities') }}" enctype='multipart/form-data'>
                                                         @csrf
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <input name="id" type="hidden" class="form-control" placeholder="Tittle" value="{{$acts->id}}"> 
                                                                <div class="form-group">
                                                                    <input name="tittle" type="text" class="form-control" placeholder="Tittle" value="{{$acts->tittle}}">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <textarea name="content" placeholder="Content">{{$acts->content}}</textarea>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
@else
    

                             <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Add Activities</a></li>
                                <li><a href="#reviews"> Add Gallery</a></li>
                                <!-- <li><a href="#INFORMATION">Social Information</a></li> -->
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                              <!-- <h4></h4> -->
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                     <form  method="POST" action="{{ url('storeactivities') }}" enctype='multipart/form-data'>
                                                         @csrf
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                 <div class="form-group">
                                                                    <select name="category_id" class="form-control">
                                                                        <option value="none" selected="" disabled="">Select Category</option>
                                                                        @foreach ($cat as $c )  
                                                                        <option value="{{$c->id}}">{{$c->category_name}}</option>
                                                                       
                                                                          @endforeach
                                                                    </select>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <input name="tittle" type="text" class="form-control" placeholder="Tittle">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <textarea name="content" placeholder="Content"></textarea>
                                                                </div>
                                                                
                                                              
                                                                <div class="form-group ">
                                                                     <input name="file"  type="file" />
                                                                   <!--  <div class="dz-message needsclick download-custom">
                                                                        <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                        <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                                        
                                                                        <input name="file" class="hd-pro-img" type="file" />
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                          
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
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

 <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                 <form  method="POST" action="{{ url('storeactgallery') }}" enctype='multipart/form-data'>
                                                         @csrf
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="devit-card-custom">
                                                              <div class="form-group">
                                                                    <select name="activities_id" class="form-control">
                                                                        <option  selected="" disabled="">Select Activities Tittle</option>
                                                                        @foreach ($act as $c )  
                                                                        <option value="{{$c->id}}">{{$c->tittle}}</option>
                                                                       
                                                                          @endforeach
                                                                    </select>
                                                                </div>
                                                             <div class="form-group">
                                                               
                                                                    <select name="image_type" class="form-control" id="fileselector" required>
                                                                        <option value="" selected="" disabled="">Select File type</option>
                                                                        
                                                                        <!-- <option value="audio">Audio</option> -->
                                                                       <option value="image"> Image</option>
                                                                       <option value="video">Video</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                               <input type="hidden" name="subject" class="form-control" value="activities"  >
                                                                    <!-- <select name="subject" class="form-control" id="fileselector" required>
                                                                        <option value="" selected="" disabled="">Select Subject</option>
                                                                        
                                                                        <option value="audio">Audio</option>
                                                                       <option value="talent">Talent</option>
                                                                       <option value="activities">Activities</option>
                                                                    </select> -->
                                                                </div>
                                                            <div class="form-group file video" id="video" >
                                                                <input type="text" name="image_name" class="form-control" placeholder="Video Link" >
                                                            </div>
                                                            <div class="form-group file image" id="image">
                                                                <input type="file" name="file" class="form-control" placeholder="Phone"  >
                                                            </div>
                                                            
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>

                                                            <!-- <a href="#!" class="btn btn-primary waves-effect waves-light">Save</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
@endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
@endsection

@section('script')
    
@endsection