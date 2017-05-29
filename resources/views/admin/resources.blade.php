
@extends('admin.main')
@section('content')

    <div class="top-right links">
                {{--@if (Auth::check())--}}
            {{ Form::open(array('url'=>'/file','file'=>true)) }}
            {{ Form::file('file') }}
            {!! Form::submit('Upload' , ['class' => 'btn btn-success']) !!}

            {!! Form::close() !!}
        {{--@else--}}
            {{--<a href="{{ url('/login') }}">Login</a>--}}
            {{--<a href="{{ url('/register') }}">Register</a>--}}
        {{--@endif--}}
    </div>
@endsection