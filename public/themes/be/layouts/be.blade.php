@extends('layouts.app')

@section('content')
    {!! Theme::partial('header') !!}

    <div class="container-fluid">
        {!! Theme::content() !!}
    </div>

    {!! Theme::partial('footer') !!}
@stop

{{--@section('script')--}}
    {{--@parent--}}
{{--@stop--}}
