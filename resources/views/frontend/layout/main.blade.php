@vite(['resources/css/app.css','resources/js/front.js'])
    @include('frontend.layout.header')
    @yield('front_content')
    @include('frontend.layout.footer')
