{{--resources/views/users/manager/create.blade.php--}}

@extends('layouts.frontend')

@section('content')
    <div class="container">

        @include('common.errors')

        {!! Form::open(['route' => 'users.manager.store']) !!}

        @include('users.manager.fields')

        {!! Form::close() !!}
    </div>
@endsection
