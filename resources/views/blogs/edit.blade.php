@extends('layouts.frontend')

@section('content')

    @include('common.errors')

    {!! Form::model($blog, ['route' => ['blogs.update', $blog->id], 'method' => 'patch']) !!}

    @include('blogs.fields')

    {!! Form::close() !!}

@endsection
