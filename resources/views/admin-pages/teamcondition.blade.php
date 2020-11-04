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
                            <h4>Term and Condition</h4>
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
                                <form  method="POST" action="{{ url('updateteam') }}" enctype='multipart/form-data'>
                                                         @csrf
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                 <input name="id" type="hidden" class="form-control" value="{{$p->id}}">
                                                                <div class="form-group">
                                                                    <input name="heading" type="text" class="form-control" value="{{$p->heading}}">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <textarea name="content" placeholder="Content">{{$p->content}}</textarea>
                                                                </div>
                                                                
                                                               <!--  <div class="form-group ">
                                                                     <input name="file"  type="file" />
                                                                   
                                                                </div> -->
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
        </div>
@endsection

@section('script')
	
@endsection