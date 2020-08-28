@extends('layouts.master')

<!-- @section('css')
@endsection -->

@section('breadcrumb')
     
                            
@endsection

@section('content')
      <div id="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8 page-content">
                    <div class="white-container mb0">
                        <div class="title-lines">
                            <h3 class="mt15">{{ __('Verify Your Email Address') }}</h3>
                        </div>
@if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
  {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-default btn-large ">{{ __('click here to request another') }}</button>.

                    </form>
</div></div></div></div></div>

@endsection

@section('script')
    
@endsection
