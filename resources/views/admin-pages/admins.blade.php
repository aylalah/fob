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
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Admin List</a></li>                               
                                <div class="add-product">
                                <a href="#reviews">Add Admin</a>
                            </div>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">

                                <div class="product-status mg-b-15">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="product-status-wrap">                            
                                                <div class="asset-inner">
                                                    <table>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Image</th>
                                                            <th>Fullname</th>
                                                            <th>Contact</th>
                                                            <th>Email</th>
                                                            <th>Role</th>
                                                            <th>Status</th>
                                                            <th>Created Date</th>
                                                            <th>Setting</th>
                                                        </tr>
                                                        @foreach ($all_admin as $index => $c )  
                                                        <tr>
                                                        <td>{{$index +1}}</td>
                                                        
                                                            <td><img src="http://{{$app_url->app_url}}/upload/{{$c->image}}" alt="" /></td>
                                                            <td>{{$c->name}}</td>
                                                            
                                                            <td>{{$c->contact}}</td>
                                                            <td>{{$c->email}}</td>
                                                    
                                                            <td>{{$c->role}}</td>
                                                            <td>
                                                                <button class="btn btn-success">{{$c->status}}</button>
                                                            </td>
                                                            <td>{{$c->c_date}}</td>
                                                            <td>
                                                            <a href="{{url('edit_activities/')}}/{{$c->id}}"> <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                                                <a href="{{url('delete_activities/')}}/{{$c->id}}"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    
                                                    </table>
                                                </div>
                                                <div class="custom-pagination">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                    </ul>
                                                </div>
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
                                            <form method="POST" class="" action="{{ url('add-admin') }}">
                                            @csrf
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="name" type="text" class="form-control" placeholder="Full Name">
                                                        </div>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                        <div class="form-group">
                                                            <input name="email" type="text" class="form-control" placeholder="Email">
                                                            <input name="password" type="hidden" value="12345678" class="form-control">
                                                            <input name="cat_id" type="hidden" value="1" class="form-control">
                                                        </div>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>                                                      
                                                    
                                                    <div class="form-group">
                                                        <select name="role_id" class="form-control">
                                                            <option value="none" selected="" disabled="">Select Position</option>
                                                            @foreach ($pos as $c )  
                                                                @if( $c->id != 1)
                                                                    <option value="{{$c->id}}">{{$c->role}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>                                           

                                                    <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="payment-adress">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
												<div class="row">
													<div class="col-lg-12">
														<div class="devit-card-custom">
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Facebook URL">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Twitter URL">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Google Plus">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Linkedin URL">
															</div>
															<button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
                </div>
            </div>
        </div>
@endsection

@section('script-bottom')

<script>
    var admin = 'list'
</script>
	
@endsection