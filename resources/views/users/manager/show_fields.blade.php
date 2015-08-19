{{--resources/views/users/manager/show_fields.blade.php--}}

        <!-- Username Field -->
<div class="form-group">
    {!! Form::label('username', 'Username:') !!}
    <p>{!! $user->username !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $user->email !!}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{!! $user->password !!}</p>
</div>

<!-- Confirmation Code Field -->
<div class="form-group">
    {!! Form::label('confirmation_code', 'Confirmation Code:') !!}
    <p>{!! $user->confirmation_code !!}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{!! $user->remember_token !!}</p>
</div>

<!-- Confirmed Field -->
<div class="form-group">
    {!! Form::label('confirmed', 'Confirmed:') !!}
    <p>{!! $user->confirmed !!}</p>
</div>

