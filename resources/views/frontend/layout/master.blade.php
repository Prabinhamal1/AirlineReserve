<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/front.js'])
    <title>Document</title>
</head>
<body>
    @include('frontend.layout.header')
    @yield('fronts-content')

</body>
</html>