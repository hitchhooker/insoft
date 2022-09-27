<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
        <title>Insoft Services - @yield('title')</title>
    </head>
    <body class="font-sans bg-primary-100 text-primary-800 leading-normal tracking-normal">  
        
        @include('partials.alert')
           
        @include('partials.header')
            
        @yield('content')
        
        @include('partials.footer')


        @include('partials.scripts')
        
        
    </body>
</html>