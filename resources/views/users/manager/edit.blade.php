{{--resources/views/users/manager/edit.blade.php--}}

@extends('layouts.frontend')

@section('content')
    <div class="container">

        @include('common.errors')

        {!! Form::model($user, ['route' => ['users.manager.update', $user->id], 'method' => 'patch']) !!}

        @include('users.manager.fields')

        {!! Form::close() !!}
    </div>
@endsection
