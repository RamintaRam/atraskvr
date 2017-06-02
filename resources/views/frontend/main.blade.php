<!DOCTYPE html>
<html>
<head>

    @include('frontend.includes.meta')
    <title>@yield('title')</title>
    @include('frontend.includes.css')
</head>
<body>

@include('frontend.includes.navigation')



@yield('content')

@include('frontend.includes.footer')





</body>
@include('frontend.includes.js')
@yield('script')
</html>