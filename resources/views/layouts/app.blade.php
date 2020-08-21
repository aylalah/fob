<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
       
       <title>{{ config('app.name', 'Laravel') }}</title>
       
           @include('layouts.head')
       </head>
<body>
    <div id="app">
    @include('layouts.header')
           
        <main class="py-4">
           @include('includes.messages')
            @yield('content')
        </main>
    </div>

    @include('layouts.footer')    
    @include('layouts.footer-script') 

    @yield('script')
</body>
</html>
