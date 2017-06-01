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


@include('frontend.includes.js')
@yield('script')

</body>
</html>