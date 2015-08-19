@extends('layouts.frontend')

@section('content')

    @include('common.errors')

    {!! Form::open(['route' => 'blogs.store']) !!}

    @include('blogs.fields')

    {!! Form::close() !!}

@endsection
