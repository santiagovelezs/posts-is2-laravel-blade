<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PrensaUAM') }}</title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>    
    @yield('body')

    <main class="py-4">        
        <div class="container">           
            @if(Session::has('_success'))
            <div class="alert alert-success">
                {{ Session::get('_success') }}
            </div>
            @endif
            @if(Session::has('_failure'))
            <div class="alert alert-danger">
                {{ Session::get('_failure') }}
            </div>
            @endif
        </div>                  
    </main>

    <div class="fixed-bottom">    
        <footer class="bg-dark text-center text-white">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.822);">
                <div class="row mb-2">
                    <span class="text-white"> © 2020 Copyright: <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com </a></span>                      
                </div>
                <div class="row mb-2">
                    <a class="text-white" href="https://getbootstrap.com/docs/4.1/examples/dashboard/"> https://getbootstrap.com/docs/4.1/examples/dashboard/ </a>
                </div>
                <div class="row mb-2">
                    <span class="text-white">Ingeniería Del Software II UAM 2021</span> 
                </div>
                <div class="row mb-2">
                    <span class="text-white">Estudiante: Santiago Velez S</span> 
                </div>
                <div class="row mb-2">
                    <span class="text-white">santiago [dot] velezs [at] autonoma [dot] edu [dot] co</span> 
                </div>
                <div class="row">
                    <a href="https://github.com/santiagovelezs/posts-is2-laravel-blade"><i class="fab fa-github fa-3x"></i></a>                    
                </div>
            </div>
        </footer>    
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
