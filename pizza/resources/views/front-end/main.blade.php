<!DOCTYPE html>
<html>
<head>

    @include('front-end.includes.meta')
    <title>@yield('title')</title>
    @include('front-end.includes.css')
</head>
<body style="background-color: palegoldenrod">

@yield('content')

@include('front-end.includes.footer')

@include('front-end.includes.js')
@yield('script')

</body>
</html>