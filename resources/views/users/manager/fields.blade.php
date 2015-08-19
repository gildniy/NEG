{{--resources/views/users/manager/fields.blade.php--}}

        <!--- Username Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>

<!--- Email Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!--- Password Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>

<!--- Confirmation Code Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('confirmation_code', 'Confirmation Code:') !!}
    {!! Form::text('confirmation_code', null, ['class' => 'form-control']) !!}
</div>

<!--- Remember Token Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div>

<!--- Confirmed Field --->
<div class="form-group col-sm-6 col-lg-4">
    {{--<div class="checkbox">--}}
    {{--<label>{!! Form::checkbox('confirmed', 1, true) !!}Confirmed</label>--}}
    {{--</div>--}}

    <div class="checkbox checkbox-primary ">
        <input tabindex="4" type="checkbox" name="confirmed" id="confirmed"
               value="1">
        <label for="confirmed">
            Confirmed
        </label>
    </div>
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
