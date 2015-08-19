{{--resources/views/users/manager/password/create.blade.php--}}

{{--*/$value = randomizr('hash')->make(12, 6);/*--}}

{!! Form::open(['route' => ['manage.user.changepw', $userId]]) !!}
<div class="modal-body">
    {!! Form::label('password', 'Password was generated (visible) below:') !!}
    {!! Form::text('password', $value, ['class' => 'form-control', 'disabled']) !!}
</div>
<div class="modal-footer">
    {!! Form::submit(trans('form.save'), ['class' => 'btn btn-success']) !!}
    {!! Form::button(trans('form.back'), ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}
</div>
{!! Form::close() !!}