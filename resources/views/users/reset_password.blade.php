{{--resources/views/users/reset_password.blade.php--}}

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="maincontent">
            <h1>Reset Password</h1>

            <form method="POST" action="{{ URL::to('/users/reset_password') }}" accept-charset="UTF-8">
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="_token" value="{{ Session::getToken() }}">

                <div class="form-group">
                    <label for="password">{{ Lang::get('confide.password') }}</label>
                    <input class="form-control" placeholder="{{ Lang::get('confide.password') }}"
                           type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">{{ Lang::get('confide.password_confirmation') }}</label>
                    <input class="form-control"
                           placeholder="{{ Lang::get('confide.password_confirmation') }}"
                           type="password" name="password_confirmation" id="password_confirmation">
                </div>

                @if (Session::get('error'))
                    <div class="alert alert-error alert-danger">{{ Session::get('error') }}</div>
                @endif

                @if (Session::get('notice'))
                    <div class="alert">{{ Session::get('notice') }}</div>
                @endif

                <div class="form-actions form-group">
                    <button type="submit"
                            class="btn btn-primary"><i
                                class="fa fa-refresh"></i> {{ Lang::get('confide.forgot.submit') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
