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
                            <h4>Company Category List</h4>
                            <div class="add-product">
                                <a href="{{url('add_company_category/')}}">Add Company Category</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Category Name</th>
                                        <th>Category Description</th>
                                        <th>Status</th>
                                        <th>Created_by</th>
                                        <th>Updated_by</th>
                                        <th>Created_at</th>
                                        <th>Updated_at</th>
                                        <th>Setting</th>
                                    </tr>
                                    @foreach ($cat as $index => $c )    
                                    <tr>
                                        <td>{{$index +1}}</td>
                                        <td>{{$c->category_name}}</td>
                                        <td>{{$c->category_description}}</td>
                                        <td>
                                            <button class="ps-setting">{{$c->status}}</button>
                                        </td>
                                        <td>{{$c->created_by}}</td>
                                        <td>{{$c->updated_by}}</td>
                                        <td>{{$c->created_at}}</td>
                                        <td>{{$c->updated_at}}</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                </table>
                            </div>
                            <div class="custom-pagination">
								<ul class="pagination">
									{{ $cat->links() }}
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('script')
	
@endsection