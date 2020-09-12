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
                                             <h4>Add Company Category</h4>
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form  method="POST" action="{{ url('storeteam') }}" enctype='multipart/form-data'>
                                                         @csrf
                                                        <div class="row">
                                                            
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="form-group">
                                                                <select name="role_id" class="form-control">
                                                                        <option value="none" selected="" disabled="">Select Category</option>
                                                                        @foreach ($role as $c )  
                                                                        <option value="{{$c->id}}">{{$c->role}}</option>
                                                                       
                                                                          @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="team_name" type="text" class="form-control" placeholder="Team Name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="designation" type="text" class="form-control" placeholder="Designation">
                                                                </div>
                                                                 <div class="form-group ">
                                                                  <span>  Team Picture</span>
                                                                     <input name="file"  type="file" />
                                                                 </div>
                                                                 <!-- <div class="form-group">
                                                                    <textarea name="description" placeholder="Description"></textarea>
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
@endsection

@section('script')
    
@endsection