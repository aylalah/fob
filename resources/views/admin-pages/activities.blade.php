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
                        <div class="product-payment-inner-st">
                             <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Activities List</a></li>
                                <li><a href="#reviews">Image Gallery</a></li>
                                <li><a href="#INFORMATION">Video Gallery</a></li>
                            </ul>
                            <div class="add-product">
                                <a href="{{url('add_activities')}}">Add Activities or Galleries</a>
                            </div>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                 <div class="product-tab-list tab-pane fade active in" id="description">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <!-- <h4>Activities List</h4> -->

                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Name of Category</th>
                                        <th>Status</th>
                                        <th>Tittle</th>
                                        <!-- <th>Content</th> -->
                                        <!-- <th>Title Type</th> -->
                                       <th>Created_by</th>
                                        <th>Updated_by</th>
                                        <th>Created_at</th>
                                        <th>Updated_at</th>
                                        <th>Setting</th>
                                    </tr>
                                     @foreach ($act as $index => $c )
                                    <tr>
                                      <td>{{$index +1}}</td>

                                        <td><img src="http://localhost/fob/storage/app/upload/{{$c->image}}" alt="" /></td>
                                        <td>{{$c->category_name}}</td>

                                        <td>
                                            <button class="ps-setting">{{$c->status}}</button>
                                        </td>
                                        <td>{{$c->tittle}}</td>
                                        <!-- <td><p style="white-space: pre-line;">{{$c->content}}</p></td> -->
                                        <!-- <td>{{$c->title_type}}</td> -->
                                          <td>{{$c->created_by}}</td>
                                        <td>{{$c->updated_by}}</td>
                                        <td>{{$c->created_at}}</td>
                                        <td>{{$c->updated_at}}</td>
                                        <td>
                                           <a href="{{url('edit_activities')}}/{{$c->id}}"> <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            <a href="{{url('delete_activities')}}/{{$c->id}}"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                        </td>
                                    </tr>
                                      @endforeach
                                </table>
                            </div>
                            <div class="custom-pagination">
								<ul class="pagination">
									{{ $act->links() }}
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="product-tab-list tab-pane fade" id="reviews">
            <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="courses-area">
            <div class="container-fluid">
                <div class="row">
                      @foreach ($g_image as $index => $c )
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a ><img src="http://localhost/fob/storage/app/upload{{$c->image_name}}"  alt=""></a>
                                <!-- <h2>Apps Development</h2> -->
                            </div>
                           <div class="product-buttons">
                              <a href="{{url('delete_actg/')}}/{{$c->gallery_id}}">  <button type="button" class="button-default cart-btn">Delete</button></a>
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


            <div class="product-tab-list tab-pane fade" id="INFORMATION">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="courses-area">
            <div class="container-fluid">
                <div class="row">
                      @foreach ($g_video as $index => $c )
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="fitvidsjs">
                            <iframe src="https://{{$c->image_name}}" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>

                       <div class="product-buttons">
                               <a href="{{url('delete_actg/')}}/{{$c->gallery_id}}"> <button type="button" class="button-default cart-btn">Delete</button></a>
                            </div>
                    </div>
                   @endforeach
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

@section('script')

@endsection
