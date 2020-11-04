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
                                                    <form  method="POST" action="{{ url('storecompanycategory') }}" >
                                                         @csrf
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="category_name" type="text" class="form-control" placeholder="Category Name">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <textarea name="category_description" placeholder="Description"></textarea>
                                                                </div>
                                                               <!--  <div class="form-group">
                                                                    <input name="finish" id="finish" type="text" class="form-control" placeholder="Course Start Date">
                                                                </div> -->
                                                             <!--    <div class="form-group">
                                                                    <input name="duration" type="text" class="form-control" placeholder="Course Duration">
                                                                </div> -->
                                                                <!-- <div class="form-group">
                                                                    <input name="price" type="number" class="form-control" placeholder="Course Price">
                                                                </div> -->
                                                                <!-- <div class="form-group alert-up-pd">
                                                                    <div class="dz-message needsclick download-custom">
                                                                        <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                        <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                                        <p class="edudropnone"><span class="note needsclick">(This is just a demo dropzone. Selected image is <strong>not</strong> actually uploaded.)</span>
                                                                        </p>
                                                                        <input name="imageico" class="hd-pro-img" type="text" />
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                           <!--  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group res-mg-t-15">
                                                                    <input name="department" type="text" class="form-control" placeholder="Department">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="description" placeholder="Description"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="crprofessor" type="text" class="form-control" placeholder="Professor">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="year" name="year" type="text" class="form-control" placeholder="Year">
                                                                </div>
                                                            </div> -->
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