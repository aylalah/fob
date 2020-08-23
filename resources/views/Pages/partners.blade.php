@extends('layouts.master')

<!-- @section('css')
@endsection -->

@section('breadcrumb')
     
							
@endsection

@section('content')
              
<div id="page-content">
		@if(count($invest) > 0)
		<div class="container">
			<div class="row">
				<div class="col-sm-12 page-content">
					<div class="white-container candidates-search">
						<div class="row">
							<form method="POST" action="{{ url('search-partner') }}" enctype="multipart/form-data">
						@csrf
							<div class="col-sm-6">
								<input type="text" class="form-control" name="search" placeholder="Search for company name">
							</div>

						<!-- 	<div class="col-sm-4">
								<select class="form-control">
									<option value="">Select Industry</option>
									<option value="">1</option>
									<option value="">2</option>
									<option value="">3</option>
									<option value="">4</option>
								</select>
							</div> -->

							<div class="col-sm-2">
								<input type="submit" class="btn btn-default btn-block" value="Search">
							</div>
						</form>
						</div>
					</div>

					<div class="clearfix mb30">
					<!-- 	<select class="form-control pull-left">
							<option value="">Sort By</option>
							<option value="">1</option>
							<option value="">2</option>
							<option value="">3</option>
							<option value="">4</option>
						</select> -->

						<ul class="pagination pull-right">
							{{ $invest->links() }}
						</ul>
					</div>

					<div class="row">
								@foreach ($invest as $c)    
						<div class="col-sm-6 col-md-4 col-lg-3">
							<div class="partners-item">
								<div class="img">
									<img src="http://localhost/fob/public/upload/{{ $c->image }}" alt="">

									<div class="overlay">
										<!-- <h6>{{$c->name}}</h6> -->
										<p>Company Name: {{$c->company_industry_category}}</p>
										<p><strong>Website:</strong> <a href="{{$c->website}}">{{$c->website}}</a></p>
									</div>
								</div>

								<div class="meta clearfix">
									<span>CEO Name: {{$c->ceo_name}}</span>
									<a href="#" class="btn btn-default fa fa-link"></a>
									<a href="#" class="btn btn-default fa fa-search"></a>
								</div>
							</div>
						</div>
@endforeach
			
						
					</div>

					<div class="clearfix">
						<ul class="pagination pull-right">
							{{ $invest->links() }}
						</ul>
					</div>
				</div>
			</div>

		</div>
		@endif <!-- end .container -->
	</div> <!-- end #page-content -->
@endsection

@section('script')
	
@endsection