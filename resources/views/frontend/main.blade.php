<!DOCTYPE html>
<html>
<head>

    @include('frontend.includes.meta')
    <title>@yield('title')</title>
    @include('frontend.includes.css')
</head>
<body>
<div id="main" class="row">
    <div id="sidebar" class="col-md-12">
        @include('frontend.includes.navigation')
    </div>
</div>

@yield('content')

@include('frontend.includes.footer')





</body>
@include('frontend.includes.js')
@yield('script')
</html>