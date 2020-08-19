<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       
    <title>{{ config('app.name', 'Laravel') }}</title>
    
        @include('layouts.head')
    </head>
    <body>
        <div id="main-wrapper">
            @include('layouts.header')
           
            @yield('content')

        </div>  
    @include('layouts.footer')    
    @include('layouts.footer-script')    
    </body>
</html>